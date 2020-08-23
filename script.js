var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("sliderimage");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);
}

$(".login").click(function(){
	var mail = $(".mail").val();
	var pass = $(".pass").val();
	console.log(mail+" "+pass);
	$.ajax({
	url: "server.php",
	type:"POST",
	success: function(result){
     console.log(result);
    },
    data:{
    	ajax:'ajax1',
    	val:mail,
    	val1:pass,
    }

});
})