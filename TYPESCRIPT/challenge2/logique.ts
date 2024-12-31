///LOGIQUE
/*

1__INTERFACES
Créer des interfaces simples correspondant aux 7 actions
Une interface par action 
Chaque interface ne contient qu'une seule méthode correspondant à son action
Pas de logique, juste la déclaration de la méthode

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



3__CLASSES D'ANIMAUX SPECIFIQUES
Chaque classe spécifique n'implémentera que 
les interfaces correspondant à ses capacités réelles
_La classe Cat - extends Animal - implements takePicture(),  meow(), stroke()
if color=black alors feed()
_La classe Dog - extends Animal - implements takePicture(), bark(), stroke()
if color=black alors feed()
_La classe Bird - extends Animal - implements takePicture(), fly()
if color=black alors feed()
_La classe Fish - extends Animal - implements takePicture(), swim()
_La classe Insect - extends Animal - implements takePicture(), 



