window.addEventListener("load", function() {
	var s = "script",
		d = document,
		w = window,
		firstScript = d.getElementsByTagName(s)[0]

	// BSA bitches!
	var bsa = d.createElement(s);
	bsa.async = 1;
	bsa.src = "//s3.buysellads.com/ac/bsa.js";
	inject(bsa);

	// Injects an sync script
	function inject(s) {
		firstScript.parentNode.insertBefore(s, firstScript);
	}

	// Promo!
	(function() {

		var promoNode = d.getElementById("promoNode");

		// Temporary - use MooTools 2.0 when available
		function createElement(tagName, attr, parent) {
			var el = d.createElement(tagName);
			for(prop in attr) {
				if(attr.hasOwnProperty(prop)) el.setAttribute(prop, attr[prop]);
			}
			parent.appendChild(el);
			return el;
		}

		// Loads a script
		function loadScript(url) {
			var script = d.createElement("script");
			script.src = url;
			script.setAttribute("async", "true");
			d.documentElement.firstChild.appendChild(script);
		}

		// Create the Twitter widget, inject
		createElement("a", {
			href: "//twitter.com/share",
			"data-count": "horizontal",
			"class": "twitter-share-button"
		}, createElement("span", {}, promoNode));
		loadScript("http://platform.twitter.com/widgets.js");

		// Create the Google Plus icon
		var gl = createElement("g:plusone", {
			href: w.location,
			size: "medium"
		}, createElement("span", {}, promoNode));
		loadScript("//apis.google.com/js/plusone.js");
		
		// Create the Facebook widget
		createElement("iframe", {
			src: "//facebook.com/plugins/like.php?href=" + w.location,
			scrolling: "no",
			frameborder: 0,
			allowTransparency: true,
			style: "border:none; overflow:hidden; float:left; height:24px; margin-top:3px;"
		}, createElement("span", {}, promoNode));

})();
	
});


window.addEvent('domready',function() {
		/* search */
		var searchBox = $('search-box'), searchLoaded = false, searchFn = function() {
			if(!searchLoaded) {
				searchLoaded = true;

				//build elements!
				var container = new Element('div',{ id: 'search-results', position: 'relative' }).inject($('search-area-custom'),'after');
				var wrapper = new Element('div',{
					styles: {
						position: 'relative'
					}
				}).inject(container);
				new Element('div',{ id: 'search-results-pointer' }).inject(wrapper);
				var contentContainer = new Element('div',{ id: 'search-results-content' }).inject(wrapper);
				var closer = new Element('a', { 
					href: 'javascript:;',
					text: 'Close',
					styles: {
						position: 'absolute',
						bottom: 35,
						right: 20
					},
					events: {
						click: function() {
							container.fade(0);
						}
					}
				}).inject(wrapper);

				//google ineraction
				var search = new google.search.WebSearch(), 
					control = new google.search.SearchControl(),
					options = new google.search.DrawOptions();

				options.setDrawMode(google.search.SearchControl.DRAW_MODE_TABBED);
				options.setInput(searchBox);

				search.setUserDefinedClassSuffix('siteSearch');
				search.setSiteRestriction('davidwalsh.name');
				search.setLinkTarget(google.search.Search.LINK_TARGET_SELF);

				control.addSearcher(search);
				control.draw(contentContainer,options);
				control.setNoResultsString('No results were found.');


				//add listener
				searchBox.addEvents({
					keyup: function(e) {
						if(searchBox.value && searchBox.value != searchBox.get('placeholder')) {
							container.fade(0.9);
							control.execute(searchBox.value);
						}
						else {
							container.fade(0);
						}
					}
				});
				searchBox.removeEvent('focus',searchFn);
			}
		};
		searchBox.addEvent('focus',searchFn);
	})


