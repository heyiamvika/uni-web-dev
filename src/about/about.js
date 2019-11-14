const achievments = [
	{
		title: 'projects completed',
		img: '../../assets/briefcase.svg',
		count: 548,
	},
	{
		title: 'WORKING HOURS',
		img: '../../assets/history.svg',
		count: 1465,
	},
	{
		title: 'POSITIVE FEEDBACKS',
		img: '../../assets/star.svg',
		count: 612,
	},
	{
		title: 'HAPPY CLIENTS',
		img: '../../assets/heart.svg',
		count: 735,
	},
];

appendAchievments();
addButtonEvent();

function appendAchievments() {
	const parent = document.getElementById('about-achievments');

	achievments.forEach(item => {
		const box = document.createElement('div');
		box.className = 'box';
		const imageBox = document.createElement('div');
		imageBox.className = 'image-box';
		const textBox = document.createElement('div');
		textBox.className = 'text-box';
		const image = document.createElement('img');
		const count = document.createElement('span');
		count.className = 'about-text count-text';
		const text = document.createElement('span');
		text.className = 'about-text capitalized-text';

		count.innerHTML = String(Math.round(item.count));
		text.innerHTML = item.title;
		image.src = item.img;

		imageBox.appendChild(image);
		textBox.appendChild(count);
		textBox.appendChild(text);

		box.appendChild(imageBox);
		box.appendChild(textBox);

		parent.appendChild(box);
	});
}

function addButtonEvent() {
	const button = document.getElementById('contact-button');
	button.onclick = event => (window.location.href = '../contact/contact.php');
}
