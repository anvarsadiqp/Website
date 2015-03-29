dont forward plzzz
-
('#username').on('blur', checkdb);

function checkdb(){ 
    var q = $(this).val();
    $.ajaxSetup({
        url: "getcheck.php",
        type: "POST",
    });

    $.ajax({
        data: 'q='+q,       
        success: function (msg) {
            var shi=msg;
              
                     if(shi==1)
					 {
					 document.getElementById("pas2").innerHTML= "user name exists";
					 document.getElementById('try').disabled=true;
                         }
					 else
					 {
					 document.getElementById("pas2").innerHTML= " ";
	
					 document.getElementById('try').disabled=false;
					 }
			  },
            error: function (XMLHttpRequest, textStatus, errorThrown){   
            alert('Error submitting request.'); 
        }   
    });     
}           
});
</script>




getcheck file is attached