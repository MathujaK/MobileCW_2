/*Author : Mathuja 2013050*/
(function() {
    
    // get references to select list and display text box
    var sel = document.getElementById('gender1');	
	 var sel1 = document.getElementById('gender2');
	  var sel2 = document.getElementById('gender3');
	  
	  var str1 = "Rooms :";
      var str2 = "Adults :";
      var str3 = "Child :";
      var el = document.getElementById('display');


  
	
	


    
    document.getElementById('showTxt').onclick = function () {
        // access text property of selected option
        el.value = str1+sel.options[sel.selectedIndex].text+ ","+ str2+sel1.options[sel.selectedIndex].text+ ","+str3+sel2.options[sel.selectedIndex].text;
	
    }

    
    
}());