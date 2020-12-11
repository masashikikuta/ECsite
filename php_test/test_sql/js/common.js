
const images = document.querySelectorAll('img');
	images.forEach((image) => {
		image.addEventListener('error',() => {
		image.setAttribute('src', './img/1.png');
	});
});
