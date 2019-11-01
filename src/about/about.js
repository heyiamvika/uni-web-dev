const achievments = [
	{
		title: 'projects completed',
		img: '',
		count: 548,
	},
	{
		title: 'WORKING HOURS',
		img: '',
		count: 1465,
	},
	{
		title: 'POSITIVE FEEDBACKS',
		img: '',
		count: 612,
	},
	{
		title: 'HAPPY CLIENTS',
		img: '',
		count: 735,
	},
];

appendAchievments();

function appendAchievments() {
	achievments.forEach(item => {
		console.log(item);
	});
}
