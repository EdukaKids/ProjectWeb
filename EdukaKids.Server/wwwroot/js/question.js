var requestOptions = {
	method: 'GET',
	redirect: 'follow'
  };
  
  fetch(location.origin + '/api/Quiz', requestOptions)
	.then(response => response.text())
	.then(result => console.log(result))
	.catch(error => console.log('error', error));

// Array of Objects
const quiz = [
	{
		q:'Quanto é 2+2?',
		options:['5','7','4','9'],
		answer:2,
		img:'../images/p1.png'
	},
   
	{
		q:'Quanto é 5+2?',
		options:['5','8','6','7'],
		answer:3,
		img:'../images/p1.png'
	},
   
	{
		q:'Quanto é 1+2?',
		options:['3','5','6','8'],
		answer:0,
		img:'../images/p1.png'
	},
   
	 {
		q:'Quanto é 8+1?',
		options:['3','9','5','8'],
		answer:1,
		img:'../images/p1.png'
	},
   
	 {
	   q:'Quanto é 4+1?',
		options:['1','4','5','6'],
		answer:2,
		img:'../images/p1.png'
	},
	{
		q:'Quanto é 4+4?',
		options:['8','4','5','6'],
		answer:0,
		img:'../images/p1.png'
	}
]