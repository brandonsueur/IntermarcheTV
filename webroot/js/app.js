/**
* Carousel
*/
$('.carousel').owlCarousel({
    items: 3,
    loop: true,
    autoPlay: true,
    navigation: false,
    center: true,
    dots: false,
    dotData: false,
    dotsContainer: false,
    margin: 5
});

/*
 * Time out Timer reload
 */
(function(){
	var delay,timer, d;

	delay = 1000 * 1;

	timer = setInterval(function(){
		d = new Date();

		console.log(d.getHours());

		if(00 == d.getHours() && 01 == d.getMinutes()){
			console.log("Nouvelle journée!");
			document.location.reload(true);
		}
	}, delay)
})();


/*
 * Horloge
 */
window.onload=function() {
	horloge('div_horloge');
	date('div_date');
};
function horloge(el) {
	if(typeof el=="string") { el = document.getElementById(el); }
	function actualiser() {
		var date = new Date();
		var str = date.getHours();
		str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
		str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
		el.innerHTML = str;
	}
	actualiser();
	setInterval(actualiser,1000);
}

function date(el){
	function actualiser(){
		var date = new Date();
		var str = date.getDay();
		el.innerHTML = str;
	}

	actualiser();
	setInterval(actualiser,1000);

}