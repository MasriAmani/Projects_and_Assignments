window.onload = function(){
	
	console.log("jhjhjhj");
	
	var elements = document.getElementsByClassName("boundary");
           for (var i=0 ; i< elements.length ; i++) {
			   
          elements[i].addEventListener("mouseover", func);
		      
       function func()
              {         
           for (var i=0 ; i< elements.length ; i++) {			  
           elements[i].setAttribute("style", "background-color:red;");
		   }
		   var element = document.getElementByID("status").innerHTML = "YOU LOST";}
		  
		    	   }
		   
		   
		   
		 var element1 = document.getElementByID("start").addEventListener("click", func1);
		    func1()
		         {   
           			 
            for (var i=0 ; i< elements.length ; i++) {			  
            elements[i].setAttribute("style", "background-color:#eeeeee;");
		   }
		    var element = document.getElementByID("status").innerHTML = "Begin by moving your mouse over the S";
		   }
		 
	

	
	
	
	
	
	
	
	
	
	
	
	
	
}





