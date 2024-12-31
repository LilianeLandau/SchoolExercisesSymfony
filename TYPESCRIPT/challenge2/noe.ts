//LOGIQUE UTILISEE :
/*
1__INTERFACES
Créer des interfaces simples correspondant aux 7 actions
Une interface par action 
Chaque interface ne contient qu'une seule méthode correspondant à son action
Pas de logique, juste la déclaration de la méthode. 
Le détail de la méthode sera précisé dans chaque classe.

Une interface pour photographier - contient une méthode takePicture(animalName)
Une interface pour miauler - contient une méthode meow(animalName)
Une interface pour aboyer -contient une méthode  bark(animalName)
Une interface pour voler - contient une méthode fly(animalName)
Une interface pour nager - contient une méthode swim(animalName)
Une interface pour caresser les animaux à 4 pattes - contient une méthode stroke (animalName)
Une interface pour nourrir les animaux noirs - contient une méthode feed (animalName)

2__CLASSE DE BASE 'Animal'  -les classes spécifiques en héritent
La classe de base "Animal" contient des propriétés communes
Les classes spécifiques hériteront de cette classe de base
Attributs de 'Animal' : animalName, color, numberLegs
Méthodes de 'Animal' : takePicture, stroke, feed - ces méthodes seront utilisées par les classes filles


3__CLASSES D'ANIMAUX SPECIFIQUES
Chaque classe spécifique n'implémentera que 
les interfaces correspondant à ses capacités réelles
_La classe Cat - extends Animal - implements  meow()
_La classe Dog - extends Animal - implements bark()
_La classe FlyingAnimal - extends Animal - implements  fly()
_La classe Fish - extends Animal - implements  swim()
*/

//LES INTERFACES 
interface TakePicture {
    takePicture(): string;
}
interface Meow {
    meow(): string;
}

interface Bark {
    bark(): string;
}

interface Fly {
    fly(): string;
}

interface Swim {
    swim(): string;
}

interface Stroke {
    stroke(): string;
}

interface Feed {
    feed(): string;
}

//CLASSE PRINCIPALE 'Animal'
//implémente les 3 méthodes qui seront utilisées par les classes filles
class Animal implements TakePicture, Stroke, Feed {
    animalName: string;
    color: string;
    numberLegs: number;

    constructor(animalName: string, color: string, numberLegs: number) {
        this.animalName = animalName;
        this.color = color;
        this.numberLegs = numberLegs;
    }
    //méthodes qui seront utilisées pour toutes les classes filles
    takePicture(): string {
        // Implémentation de la méthode requise par TakePicture
        return `Picture taken of "${this.animalName}"`;
    }
    stroke(): string {
        // Vérification du nombre de pattes
        if (this.numberLegs === 4) {
            return `You can stroke the animal "${this.animalName}" because it has 4 legs`;
        }
        return `You cannot stroke  "${this.animalName}". Only 4 legged animals can be stroked.`;
    }
    feed(): string {
        // Vérification de la couleur noire
        if (this.color === "black") {
            return `The animal  "${this.animalName}" can be fed because it is black`;
        }
        return `You cannot feed "${this.animalName}". Only black animals can be fed.`;
    }
}

//CLASSE SPECIFIQUE 'Cat'
class Cat extends Animal implements Meow {

    constructor(animalName: string, color: string, numberLegs: number) {
        //appeller constructeur de la classe de base
        super(animalName, color, numberLegs);
    }

    meow(): string {
        // Implémentation de la méthode requise 
        return `The animal  "${this.animalName}" says meow.`;
    }

}

//CLASSE SPECIFIQUE 'Dog'
class Dog extends Animal implements Bark {

    constructor(animalName: string, color: string, numberLegs: number) {
        //appeller constructeur de la classe de base
        super(animalName, color, numberLegs);
    }

    bark(): string {
        // Implémentation de la méthode requise 
        return `The animal  "${this.animalName}" barks.`;
    }
}


//CLASSE SPECIFIQUE 'FlyingAnimal'
class FlyingAnimal extends Animal implements Fly {

    constructor(animalName: string, color: string, numberLegs: number) {
        //appeller constructeur de la classe de base
        super(animalName, color, numberLegs);
    }

    fly(): string {
        // Implémentation de la méthode requise
        return `The animal  "${this.animalName}" can fly.`;
    }
}



//CLASSE SPECIFIQUE 'Fish'
class Fish extends Animal implements Swim {

    constructor(animalName: string, color: string, numberLegs: number) {
        //appeller constructeur de la classe de base
        super(animalName, color, numberLegs);
    }

    swim(): string {
        // Implémentation de la méthode requise
        return `The animal  "${this.animalName}" can swim : it is a fish.`;
    }
}

//UTILISER AVEC CAT
console.log("******UTILISATION AVEC CAT******");
const blackCat = new Cat("BlackCat", "black", 4);
console.log(blackCat.takePicture());
console.log(blackCat.meow());
console.log(blackCat.stroke());
console.log(blackCat.feed());

const whiteCat = new Cat("WhiteCat", "white", 4);
console.log(whiteCat.takePicture());
console.log(whiteCat.meow());
console.log(whiteCat.stroke());
console.log(whiteCat.feed());


//UTILISER AVEC DOG
console.log("******UTILISATION AVEC DOG******");
const blackDog = new Dog("BlackDog", "black", 4);
console.log(blackDog.takePicture());
console.log(blackDog.bark());
console.log(blackDog.stroke());
console.log(blackDog.feed());

const whiteDog = new Dog("WhiteDog", "white", 4);
console.log(whiteDog.takePicture());
console.log(whiteDog.bark());
console.log(whiteDog.stroke());
console.log(whiteDog.feed());



//UTILISER AVEC FLYING ANIMAL
console.log("******UTILISATION AVEC BIRD / classe FlyingAnimal******");
const blackBird = new FlyingAnimal("BlackBird", "black", 2);
console.log(blackBird.takePicture());
console.log(blackBird.fly());
console.log(blackBird.stroke());
console.log(blackBird.feed());

const whiteBird = new FlyingAnimal("WhiteBird", "white", 2);
console.log(whiteBird.takePicture());
console.log(whiteBird.fly());
console.log(whiteBird.stroke());
console.log(whiteBird.feed());



//UTILISER AVEC FISH
console.log("******UTILISATION AVEC FISH******");
const blackFish = new Fish("BlackFish", "black", 0);
console.log(blackFish.takePicture());
console.log(blackFish.swim());
console.log(blackFish.stroke());
console.log(blackFish.feed());

const whiteFish = new Fish("WhiteFish", "white", 0);
console.log(whiteFish.takePicture());
console.log(whiteFish.swim());
console.log(whiteFish.stroke());
console.log(whiteFish.feed());



