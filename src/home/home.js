const projects = [
	'Project1',
	'Project2',
	'Project3',
	'Project4',
	'Project5',
	'Project6',
	'Project7',
	'Project8',
	'Project9',
	'Project10',
	'Project11',
	'Project12',
	// 'Project13',
];

appendDivsToGrid(projects);

function appendDivsToGrid(arr) {
	const elementsPerRow = 4;

	const projectGrid = document.getElementById('home-grid');
	const rowsCount =
		arr.length % elementsPerRow === 0
			? arr.length / elementsPerRow
			: Math.floor(arr.length / elementsPerRow) + 1;

	for (let i = 0; i < rowsCount; i++) {
		const newRow = document.createElement('div');
		newRow.id = 'grid-row';
		const isRowEven = i % 2 === 0;

		for (let j = i * elementsPerRow; j < (i + 1) * elementsPerRow; j++) {
			const isElementEven = (j + 1) % 2 === 0;

			// Create a wrapper for element itself and it's hover box
			const wrapper = document.createElement('div');
			wrapper.className = 'project-wrapper';

			// Create a box for each project itself
			const newProject = document.createElement('div');
			if ((isRowEven && isElementEven) || (!isRowEven && !isElementEven)) {
				newProject.className = 'project box-dark';
			} else {
				newProject.className = 'project box-light';
			}

			// Create hover for the project box
			const newProjectHover = document.createElement('div');
			newProjectHover.className = 'project-hover';

			const hoverImage = document.createElement('img');
			hoverImage.src = '../assets/code-hover.svg';
			hoverImage.className = 'project-hover-img';
			newProjectHover.appendChild(hoverImage);

			// on Hover functionality
			// Only for desktops
			if (typeof window.orientation !== 'undefined') {
				console.log('Mobile!');
			} else {
				console.log('Desktop!');
				wrapper.onmouseover = function(event) {
					newProjectHover.style.display = 'flex';
				};
				wrapper.onmouseleave = function(event) {
					newProjectHover.style.display = 'none';
				};
			}

			// Append wrapper to the row
			wrapper.appendChild(newProject);
			wrapper.appendChild(newProjectHover);
			newRow.appendChild(wrapper);
		}

		projectGrid.appendChild(newRow);
	}
}
