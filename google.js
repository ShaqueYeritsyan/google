function search() {
	request = document.getElementById("search").value;
	var saveRequest = localStorage.setItem('googleSearch', request);
	url = 'search.html';
	window.location = url;
}
function setValue() {
	//document.getElementById("search2").value = localStorage.getItem('googleSearch');
	setVal = localStorage.getItem('googleSearch');
	$("#search").attr("value", setVal);
}
function searchValue() {
	$(window).on("load",mysqlSearch);
	$("#search").bind("input click", mysqlSearch);	
}
function mysqlSearch() {
	$search = $("#search").val();
	if($search.length!== ''){
		$.get('search.php',{"s":$search},function($data){
			$("#results").html($data);
			});
		}
}
function feelingLucky() {
	url = 'https://www.google.com/doodles';
	window.location.assign(url);
}
function redirect() {
	request = document.getElementById("search").value;
	url = 'https://www.google.com/search?q=' + request
	window.location.replace(url);
}