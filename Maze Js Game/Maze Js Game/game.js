window.onload = function(){
	
	var start = false;
	var inside = false;
	var score =0;
	var elements1 = document.getElementsByClassName("boundary example");
   elements1[0].innerHTML ="Restart <br><br> Score :  "+score ;

	
	var elements = document.getElementsByClassName("boundary");
           for (var i=0 ; i< (elements.length)-1 ; i++) {
			   
		   elements[i].addEventListener("mouseover", func);}
		      
       function func()
              {   
			  if (start){
           for (var i=0 ; i< (elements.length)-1 ; i++) {			  
           elements[i].setAttribute("style", "background-color:red;");
		   }
		   var element = document.getElementById("status").innerHTML = "YOU LOST";
		   start = false;
		   score -= 10;
		   elements1[0].innerHTML ="Restart <br><br> Score :  "+score ;}}
		  
		    	   
		   
		   
		   
		 var element1 = document.getElementById("start").addEventListener("click", func1);
		    function func1()
		         {   
           			 
            for (var i=0 ; i< (elements.length)-1 ; i++) {			  
            elements[i].setAttribute("style", "background-color:#eeeeee;");
		   }
		    var element = document.getElementById("status").innerHTML = 'Begin by moving your mouse over the "S".';
			start =true;
			inside = true;
		   }
		 
		 
		 var element2 = document.getElementById("end").addEventListener("mouseover", func2);
		    function func2()
		         {   
           			if (start && inside) {
           
		    var element = document.getElementById("status").innerHTML = "YOU WON ";
			score += 5 ;
			elements1[0].innerHTML ="Restart <br><br> Score :  "+score ;
			start = false;
		   }
				 }
	    
		
		   var element3 = document.getElementById("game").addEventListener("mouseleave", func3);
		  
		
		   function func3()
		         {   
           			inside=false;
				
				 }
		 
	    
	 elements1[0].addEventListener("click", func4);
	 function func4() {
		 
       score = 0;
	  elements1[0].innerHTML ="Restart <br><br> Score :  "+score ;
	 }

	
	
	
	
	
	
	
	
	
	
	
}





