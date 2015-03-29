function DragAndDropController() {
	this.surface=null;
	this.dragObject=null;
	this.extensionPort=null;
	this.settings=null;
	
	//this.dropAreas=new DropAreas();
	this.dropHints=new DropHints();	
}

DragAndDropController.__instance__ = null;  //define the static property

DragAndDropController.getInstance = function () {
    if (this.__instance__ == null) {
        this.__instance__ = new DragAndDropController();
    }
    return this.__instance__;
};

DragAndDropController.prototype= {
	
	checkInjection: function() {
		return 	!window.location.href.toLowerCase().startsWith('https://www.facebook.com/dialog/') &&
				!window.location.href.endsWith('.pdf');
	},
	
	destroy: function () {
	    this.dropHints.destroy();
	    this.surface.destroy();

	    this.surface=null;
	    this.dragObject=null;
	    this.extensionPort=null;
	    this.settings=null;
	    this.dropHints=null; 	    
	},
	
	getPort: function() {
	    return this.extensionPort;
	},
	
    getProfilePrefs: function () {
        if (this.profilePrefs==null) {
            throw 'DragAndDropController::getprofilePrefs() settings are null';
        }
        return this.profilePrefs;
    },	
	
	getSettings: function () {
		if (this.settings==null) {		    
			throw 'DragAndDropController::getSettings() settings are null';
		}
		return this.settings;
	},
	
	getSurface: function() {
		return this.surface;
	},
	
	hideDropHints: function() {
        this.dropHints.hide();
        this.dropHints.hideBubbles();	    
	},
	
	init: function() {
	    if (isMac()) {
	        this.surface=new MacDragSurface();
	    } else {
	        this.surface=new WinDragSurface();
	    }	    
		this.initExtensionPort();		
	},
	
	loadSettings: function() {
		this.extensionPort.postMessage({action: "getSettings"});			
	},
	
	initExtensionPort:function() {
	    console.log('extension connect');
	    try {
	        this.extensionPort = chrome.extension.connect();
	        this.extensionPort.onDisconnect.addListener(delegate(this,this.onExtensionDisconected));
	        this.extensionPort.onMessage.addListener(delegate(this,this.onExtensionMsgReceived));
	    } catch (err) {
	        publishErrMsg(err);
	    }
	},
	
	
	inject: function() {
		this.dropHints.init();
		this.getSurface().init();				
		$(document).bind('onSurfaceClick',delegate(this,this.onSurfaceClick));
		$(document).bind('onNewDragObject',delegate(this,this.onNewDragObject));
		$(document).bind('onMoveDragObject',delegate(this,this.onMoveDragObject));
		//$(document).bind('onDragObjectIsDropped',delegate(this,this.onDragObjectIsDropped));
		$(document).bind('onDisableDropHints',delegate(this,this.onDisableDropHints));
		$(document).bind('onOpenSettingsDialog',delegate(this,this.onOpenSettingsDialog));		
		//this.getSurface().subscribe('dragEnter',)
	},	
	
	suspend:function() {
		this.getSurface().destroy();
	},
		
	
	updateSettings:function(settings) {
		this.settings=settings
		
		if (this.getSettings().showDropHints) {
			this.dropHints.show();
		} else {
		    this.hideDropHints();
		}
		
		if (this.getSettings().showDropHintBubbles) {
			this.dropHints.showBubbles();			
		} else {
			this.dropHints.hideBubbles();
		}		
	},
	
	onExtensionDisconected:function() {
		try {
			this.destroy();
			//setTimeout(delegate(this,this.initExtensionPort), 1000);
		} catch (err) {
			publishErrMsg(err);
		}
	},
	
	
	onExtensionMsgReceived:function(message) {
		try {
			switch (message.action) {
			    case "ddBgIsReady":
			        this.loadSettings();
			        break;
				case "getSettings":
					if (message.windowType != "popup" && this.settings==null && this.checkInjection()) { //first run
						this.inject();
					}
					if (message.profilePrefs!=undefined) {
					    this.profilePrefs=message.profilePrefs;
					}					
					this.updateSettings(message.settings);		
			        this.extensionPort.postMessage({action: "getSearchSources"});
			        this.extensionPort.postMessage({action: "getShareSources"});    					
					break;
				case "updateSettings":
					this.loadSettings();
					break;
				case 'getSearchSources':
                    this.getSurface().createSearchDropAreas(message.data);
                    break;          				    
				case 'getShareSources':
					this.getSurface().createShareDropAreas(message.data);
					break;		
				case 'windowIsActivated':
				    setTimeout(delegate(this,this.hideDropHints),10000);
				    break;
				case 'frameUserEvents':
					$(document).trigger('frameUserEvents',[message.data]);
					break;					
				default:
					throw '::onExtensionMsgReceived() - unknown message';													
			}
			console.log('onExtensionMsgReceived:'+message.action);
		} catch (err) {
			publishErrMsg(err);
		}
	},	
	
	
	onOpenSettingsDialog:function(event) {
		try {
			this.extensionPort.postMessage({action: "open-options"});
		} catch (err) {
			publishErrMsg(err);
		}
	},
	
	onSurfaceClick:function(event) {
		try {
			if (this.getSettings().showDropHintBubbles) {
				this.extensionPort.postMessage({action: "hideDropHintBubbles"});	
			}			
		} catch (err) {
			publishErrMsg(err);
		}
	},	
	
	onDisableDropHints:function(event) {
		try {
			this.extensionPort.postMessage({action: "hideDropHints"});
		} catch (err) {
			publishErrMsg(err);
		}
	}
	
};