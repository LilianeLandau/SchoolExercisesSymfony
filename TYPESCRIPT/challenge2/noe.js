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
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
//CLASSE PRINCIPALE 'Animal'
//implémente les 3 méthodes qui seront utilisées par les classes filles
var Animal = /** @class */ (function () {
    function Animal(animalName, color, numberLegs) {
        this.animalName = animalName;
        this.color = color;
        this.numberLegs = numberLegs;
    }
    //méthodes qui seront utilisées pour toutes les classes filles
    Animal.prototype.takePicture = function () {
        // Implémentation de la méthode requise par TakePicture
        return "Picture taken of \"".concat(this.animalName, "\"");
    };
    Animal.prototype.stroke = function () {
        // Vérification du nombre de pattes
        if (this.numberLegs === 4) {
            return "You can stroke the animal \"".concat(this.animalName, "\" because it has 4 legs");
        }
        return "You cannot stroke  \"".concat(this.animalName, "\". Only 4 legged animals can be stroked.");
    };
    Animal.prototype.feed = function () {
        // Vérification de la couleur noire
        if (this.color === "black") {
            return "The animal  \"".concat(this.animalName, "\" can be fed because it is black");
        }
        return "You cannot feed \"".concat(this.animalName, "\". Only black animals can be fed.");
    };
    return Animal;
}());
//CLASSE SPECIFIQUE 'Cat'
var Cat = /** @class */ (function (_super) {
    __extends(Cat, _super);
    function Cat(animalName, color, numberLegs) {
        //appeller constructeur de la classe de base
        return _super.call(this, animalName, color, numberLegs) || this;
    }
    Cat.prototype.meow = function () {
        // Implémentation de la méthode requise 
        return "The animal  \"".concat(this.animalName, "\" says meow.");
    };
    return Cat;
}(Animal));
//CLASSE SPECIFIQUE 'Dog'
var Dog = /** @class */ (function (_super) {
    __extends(Dog, _super);
    function Dog(animalName, color, numberLegs) {
        //appeller constructeur de la classe de base
        return _super.call(this, animalName, color, numberLegs) || this;
    }
    Dog.prototype.bark = function () {
        // Implémentation de la méthode requise 
        return "The animal  \"".concat(this.animalName, "\" barks.");
    };
    return Dog;
}(Animal));
//CLASSE SPECIFIQUE 'FlyingAnimal'
var FlyingAnimal = /** @class */ (function (_super) {
    __extends(FlyingAnimal, _super);
    function FlyingAnimal(animalName, color, numberLegs) {
        //appeller constructeur de la classe de base
        return _super.call(this, animalName, color, numberLegs) || this;
    }
    FlyingAnimal.prototype.fly = function () {
        // Implémentation de la méthode requise
        return "The animal  \"".concat(this.animalName, "\" can fly.");
    };
    return FlyingAnimal;
}(Animal));
//CLASSE SPECIFIQUE 'Fish'
var Fish = /** @class */ (function (_super) {
    __extends(Fish, _super);
    function Fish(animalName, color, numberLegs) {
        //appeller constructeur de la classe de base
        return _super.call(this, animalName, color, numberLegs) || this;
    }
    Fish.prototype.swim = function () {
        // Implémentation de la méthode requise
        return "The animal  \"".concat(this.animalName, "\" can swim : it is a fish.");
    };
    return Fish;
}(Animal));
//UTILISER AVEC CAT
console.log("******UTILISATION AVEC CAT******");
var blackCat = new Cat("BlackCat", "black", 4);
console.log(blackCat.takePicture());
console.log(blackCat.meow());
console.log(blackCat.stroke());
console.log(blackCat.feed());
var whiteCat = new Cat("WhiteCat", "white", 4);
console.log(whiteCat.takePicture());
console.log(whiteCat.meow());
console.log(whiteCat.stroke());
console.log(whiteCat.feed());
//UTILISER AVEC DOG
console.log("******UTILISATION AVEC DOG******");
var blackDog = new Dog("BlackDog", "black", 4);
console.log(blackDog.takePicture());
console.log(blackDog.bark());
console.log(blackDog.stroke());
console.log(blackDog.feed());
var whiteDog = new Dog("WhiteDog", "white", 4);
console.log(whiteDog.takePicture());
console.log(whiteDog.bark());
console.log(whiteDog.stroke());
console.log(whiteDog.feed());
//UTILISER AVEC FLYING ANIMAL
console.log("******UTILISATION AVEC BIRD / classe FlyingAnimal******");
var blackBird = new FlyingAnimal("BlackBird", "black", 2);
console.log(blackBird.takePicture());
console.log(blackBird.fly());
console.log(blackBird.stroke());
console.log(blackBird.feed());
var whiteBird = new FlyingAnimal("WhiteBird", "white", 2);
console.log(whiteBird.takePicture());
console.log(whiteBird.fly());
console.log(whiteBird.stroke());
console.log(whiteBird.feed());
//UTILISER AVEC FISH
console.log("******UTILISATION AVEC FISH******");
var blackFish = new Fish("BlackFish", "black", 0);
console.log(blackFish.takePicture());
console.log(blackFish.swim());
console.log(blackFish.stroke());
console.log(blackFish.feed());
var whiteFish = new Fish("WhiteFish", "white", 0);
console.log(whiteFish.takePicture());
console.log(whiteFish.swim());
console.log(whiteFish.stroke());
console.log(whiteFish.feed());
