$(document).ready(function(){
	var _intro =  setInterval(function viewPage(){
		
		console.log("desaparecer");
		clearInterval(_intro);
		$(".intro").fadeOut("slow",function(){
			$(".main").fadeIn("slow");
		})
		

	}, 15000);
	
})