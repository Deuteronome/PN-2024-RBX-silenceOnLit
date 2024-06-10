//console.log('hello world!');

//Les variables
/*
let userAge = 17;

console.log(userAge);

userAge = 25;

console.log(userAge);

userAge = "mon nom est \"Olivier\" et j\'ai 18 ans";

console.log(userAge);

// les opérations mathématiques +, -, *, /, %

let nombre1 = 14;
let nombre2 = 3;

console.log(nombre1 + nombre2);
console.log(nombre1 - nombre2);
console.log(nombre1 * nombre2);
console.log(nombre1 / nombre2);
console.log(nombre1 % nombre2);

// + -> les textes concaténations

let nom = "Bear";
let prenom = "Mister";

console.log("Bonjour "+ prenom +" "+nom);
console.log(`Bonjour ${prenom} ${nom}`);

// auto modification

let captainAge = 35;

captainAge = captainAge -3;

console.log(captainAge);

captainAge /= 10;

console.log(captainAge);

//incrémentation (++) - décrémentation (--)

let counter = 0;

console.log(counter);

counter++;

console.log(counter);

counter++;

console.log(counter);

counter++;

console.log(counter);

counter++;

console.log(counter);

*/

//Les conditions

/*
let userAge = 19;
let hairColor = "rousse"

if (userAge < 18) 
{
    console.log("Tu dégages!");
} 
else if (hairColor === "brun")
{
    console.log("Tu prends le large");
}
else 
{
    console.log("Bienvenue");
}
*/
//

alert("Salut utilisateur");

let userName = prompt("Quel est ton nom");

alert (`Bonjour ${userName}`);

let userAge = prompt('Quel est votre age?');
 
if(userAge >= 18)
{
    alert("Tu es majeur");
}
else
{
    alert("tu es mineur");
}
