var pic = document.getElementById("pic");

pic.addEventListener("mouseover", function() {
	document.body.style.background = "green";
});

pic.addEventListener("mouseout", function() {
	document.body.style.background = "lightblue";
});

// $("button").on("click", function() {
// 	$("div").slideToggle(1000);

$("#seeAll").on("click", function() {
	$("div").slideToggle(1000);
})

// <button id="s1817">September 18, 2017</button>
// <button id="s2517">September 25, 2017</button>
// <button id="s2817">September 28, 2017</button>
// <button id="s3017">September 30, 2017</button>
// <button id="o0217">October 02, 2017</button>
// <button id="o0417">October 04, 2017</button>
// <button id="o0617">October 06, 2017</button>
// <button id="o0717">October 07, 2017</button>
// <button id="o0817">October 08, 2017</button>
// <button id="o0917">October 09, 2017</button>
// <button id="o102817">October 10-28, 2017</button>
// <button id="o2917">October 29, 2017</button>
// <button id="o3117">October 31, 2017</button>