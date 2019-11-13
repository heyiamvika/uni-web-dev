addHoversAndEvents();

function addHoversAndEvents() {
	const wrapper = document.getElementsByClassName('project-wrapper');
	const newProjectHover = document.getElementsByClassName('project-hover');

	if (typeof window.orientation !== 'undefined') {
		console.log('Mobile!');
	} else {
		console.log('Desktop!');

		function mouseOver(index) {
			newProjectHover[index].style.display = 'flex';
		}

		function mouseLeave(index) {
			newProjectHover[index].style.display = 'none';
		}

		function mouseClick(index) {
			window.location = `./project/project.php?index=${index}`;
		}

		for (let i = 0; i < wrapper.length; i++) {
			wrapper[i].addEventListener('mouseover', event => mouseOver(i));
			wrapper[i].addEventListener('mouseleave', event => mouseLeave(i));
			wrapper[i].addEventListener('click', event => mouseClick(i));
		}
	}
}
