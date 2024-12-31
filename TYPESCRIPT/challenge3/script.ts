class Person {
    private name: string;
    private age: number;
    //constructeur de la classe
    constructor(name: string, age: number) {
        this.name = name;
        this.age = age;
    }
    //méthodes de la classe
    tellMyName(): void {
        console.log("I am " + this.name);
    }

    tellMyAge(): void {

        console.log("I am " + this.age + " years old");
    }

}

//instances de la classe
const Person1 = new Person("John", 40);
const Person2 = new Person("Mary", 35);

//appeler les méthodes
Person1.tellMyName();
Person1.tellMyAge();

Person2.tellMyName();
Person2.tellMyAge();