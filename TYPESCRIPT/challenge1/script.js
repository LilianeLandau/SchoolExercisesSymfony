//typeScript
function hello(name) {
    console.log("Hello " + name);
}
var firstName = "bob";
hello(firstName);
hello(firstName + " marley");
function concat(a, b) {
    return a + b;
}
//ajouter "" car concat() attend deux paramètres, a et b
//dans la variable ds,  on a un seul paramètre : a=school
//il manque le paramètre b qui est "" pour concatener
var ds = concat("Donkey", concat("School", ""));
console.log(ds);
