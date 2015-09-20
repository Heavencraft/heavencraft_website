var radio = null;

$('#radio-button').click(function() {
	if (radio == null) {
		radio = new Audio('http://ns343556.ip-5-135-186.eu:8000/heavencraft');
	}
	if (radio.paused) {
		radio.play();
		$('#radio-button-img').attr('src', 'images/radio_on.png');
	} else {
		radio.pause();
		$('#radio-button-img').attr('src', 'images/radio_off.png');
	}
});