console.log('hey hi, you enetered');
var usertext;
var message = 'What is your name?';
usertext = prompt(message);
console.log(usertext);
usertext = 'Hey <strong class="">' + usertext + '</strong>, welcome to the world of internet!';
console.log(usertext);
oldtext = document.getElementById('text-holder').innerHTML;
alert(oldtext);
document.getElementById('text-holder').innerHTML = usertext

// Single line comment


/*
and
a
multiline
comment
*/
