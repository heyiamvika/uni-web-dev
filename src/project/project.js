addEvents();

function addEvents() {
	const linkPrevious = document.getElementById('link-previous');
	const linkNext = document.getElementById('link-next');

	const baseUrl = window.location.href.split('?')[0];
	//Create URL string from window.location
	const pageUrl = new URL(window.location);
	//pageUrl.search Is a DOMString containing a '?' followed by the parameters of the URL.
	const urlParams = new URLSearchParams(pageUrl.search);
	//Returns the first value associated to the given search parameter.
	const currentIndex = Number(urlParams.get('index'));

	function toPrev() {
		const newIndex = currentIndex - 1;
		window.location = `${baseUrl}?index=${newIndex}`;
	}

	function toNext() {
		const newIndex = currentIndex + 1;
		window.location = `${baseUrl}?index=${newIndex}`;
	}

	if (currentIndex > 0) {
		linkPrevious.addEventListener('click', toPrev);
	} else {
		linkPrevious.style.opacity = 0.2;
	}

	// No way to pass data from PHP to this script
	// Solvable if I fetch all data from database
	if (currentIndex < 11) {
		linkNext.addEventListener('click', toNext);
	} else {
		linkNext.style.opacity = 0.2;
	}
}
