//typeScript
function hello(name: string): void {
    console.log("Hello " + name);
}

let firstName: string = "bob";

hello(firstName);
hello(firstName + " marley");

function concat(a: string, b: string): string {
    return a + b;
}

//ajouter "" car concat() attend deux paramètres, a et b
//dans la variable ds,  on a un seul paramètre : a=school
//il manque le paramètre b qui est "" pour concatener
let ds: string = concat("Donkey", concat("School", ""));
console.log(ds);
