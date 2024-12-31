var Person = /** @class */ (function () {
    //constructeur de la classe
    function Person(name, age) {
        this.name = name;
        this.age = age;
    }
    //méthodes de la classe
    Person.prototype.tellMyName = function () {
        console.log("I am " + this.name);
    };
    Person.prototype.tellMyAge = function () {
        console.log("I am " + this.age + " years old");
    };
    return Person;
}());
//instances de la classe
var Person1 = new Person("John", 40);
var Person2 = new Person("Mary", 35);
//appeler les méthodes
Person1.tellMyName();
Person1.tellMyAge();
Person2.tellMyName();
Person2.tellMyAge();
