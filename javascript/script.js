/* variables and data types
console.log('hello world');

var firstName = 'shyam';
console.log(firstName);

var lastName = 'dalsaniya';
console.log(lastName);

var fullAge = true;
console.log(fullAge);

var job;
console.log(job);

job = 'student';
console.log(job);
*/


/* variable naming rule

var _3year = 3;
var if = 23;
*/

/*************************************
    variable mutation and type coercion


var firstName = 'Shyam';
var age = 20;

// type coercion
console.log(firstName + ' ' + age);

var job, isMarried;
job = 'Student';
isMarried = false;

console.log(firstName + ' is a ' + age + ' year old ' + job + '. Is he married? ' + isMarried);


// vatiable mutation
age = 'twenty';
job = 'driver';

alert(firstName + ' is a ' + age + ' year old ' + job + '. Is he married? ' + isMarried);

var lastName = prompt('What is his last name');
console.log(firstName + ' ' + lastName);

*/



/*********************************************
     Basic operators


var yearMe, yearFriend;
var now = 2018;
var ageMe = 20;
var ageFriend = 23;


//math operators
yearMe = now - ageMe;
yearFriend = now - ageFriend;

console.log(yearMe);

console.log(now + 2);
console.log(now * 2);
console.log(now / 10);

//logical operators
var meOlder = ageMe > ageFriend;
console.log(meOlder);

//type operators
console.log(typeof meOlder);
console.log(typeof ageMe);
console.log(typeof 'me older then my friend');
var x;
console.log(typeof x);
*/


/***********************************
	operator precedence
	

var now = 2018;
var yearShyam = 1999;
var fullAge = 20;

//multiple oprators
var isFullAge = now - yearShyam >= fullAge;
console.log(isFullAge);

//grouping 
var ageMe = now - yearShyam;
var ageFriend = 23;
var average = (ageMe + ageFriend) / 2;
console.log(average);

//multiple assignments
var x, y;
x = y = (3 * 5) * 4 - 6;
console.log(x, y);

//more operators
x *= 2;
console.log(x);
x += 10;
console.log(x);
x++;
console.log(x);
x--;
console.log(x);
*/


/***********************************
	Chalange Time


// BMI = mass / (height * height);
var massJohn = 78; //kg
var massMark = 92; //kg
var heightJone = 1.69; //meters
var heightMark = 1.95; //meters 

var bmiJohn = massJohn / (heightJone * heightJone);
var bmiMark = massMark / (heightMark * heightMark);

console.log(bmiJohn);
console.log(bmiMark);

var compare = bmiMark > bmiJohn;
console.log(compare);

console.log('Is Mark\'s BMI higher than John\'? ' + compare);
*/



/******************************************
    ternary oprator and switch statement


var firstName = 'shyam';
var age = 20;

age >= 18 ? console.log(firstName + ' drink beer') : console.log(firstName + ' drink juice');

var drink = age >= 18 ? 'beer' : 'juice';
console.log(drink);


if (age >= 18) {
	console.log(firstName + ' drink beer');
} else {
	console.log(firstName + ' drink juice');
}

/*****************************
       switch statement

var job = 'driver';
switch (job) {
	case 'teacher':
		console.log(firstName + ' teaches kids how to code.');
		break;
	case 'instructor':
	case 'driver':
		console.log(firstName + ' drive in uber in india.');
		break;
	case 'desiner':
		console.log(firstName + ' design website for google.');
		break;
	default:
		console.log(firstName + ' does something else.');
}

*/




/******************************************
 truthy and faulsy values and equality operator
 
//falsy values: undefined,null,0,'',not a number
//truthy values: not falsy values


var height = 23;

if (height) {
	console.log('variable is defined.');
} else {
	console.log('variable has not been defined.');
}


//  eqality operatiors
//  the == operator convert string to no. then it wiil compare
//  23 == '23' :true
//  23 === '23' : false

if (height == '23') {
	console.log('the == operator is checked.');
}
*/



/*********************************************
                challenge 2


var johnTeam = [89, 120, 103];
var mikeTeam = [116, 94, 123];

var johnAvg = ((johnTeam[0] + johnTeam[1] + johnTeam[2]) / 3);

var mikeAvg = ((mikeTeam[0] + mikeTeam[1] + mikeTeam[2]) / 3);
console.log(johnAvg, mikeAvg);

if (johnAvg > mikeAvg) {
	console.log('john team is win by ' + (johnAvg - mikeAvg) + ' points.');
} else if (mikeAvg > johnAvg) {
	console.log('mike team is win by ' + (mikeAvg - johnAvg) + ' points    .');
} else {
	console.log('draw');
}
*/

