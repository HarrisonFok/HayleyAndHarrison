// function moveFirstPic() {
// 	var firstPic = document.getElementById("firstPic");
// 	var pos = 0;
// 	var id = setInterval(frame, 3);
// 	function frame() {
// 	    if (pos == 1150) {
// 	      clearInterval(id);
// 	    } else {
// 	      pos++; 
// 	      firstPic.style.left = pos + 'px'; 
// 	    }
// 	}
// }
$("#takeOut").on("click", function() {
	$("#takeOut").css("display", "none");
	$("this").remove();
	$("#pic").css("display", "none");
	$("#pic").remove();
});