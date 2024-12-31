// On stocke dans la variable cards la div avec la classe cards
const cards = document.querySelector(".cards");

// Le tableau de chats à adopter
const animalsToAdopt = [
    {
        name: "Lucky",
        picture: "cat1.jpg"

    },
    {
        name: "Symba",
        picture: "cat2.jpg"
    },
    {
        name: "Léo",
        picture: "cat3.jpg"
    },
    {
        name: "Milo",
        picture: "cat4.jpg"
    },
    {
        name: "Charly",
        picture: "cat5.jpg"
    }
];

function createCard(title, imageUrl) {

    // On crée une div avec la classe card
    //CREATE // ADD class // APPEND
    const card = document.createElement("div");
    card.classList.add("card");
    cards.appendChild(card);

    // On crée une div avec la classe card-header et on l'ajoute à la card
    //CREATE // ADD class // APPEND
    const cardHeader = document.createElement("div");
    cardHeader.classList.add("card-header");
    card.appendChild(cardHeader);

    // On crée une div avec la classe card-img et on l'ajoute à la cardHeader
    //créer un nouvel élément HTML <div> qui contiendra l'image
    const cardImg = document.createElement("div");
    //définir l'image de fond de la div
    //(propriété CSS background-image)
    //en utilisant la valeur du paramètre imageUrl
    cardImg.style.backgroundImage = `url(${imageUrl})`;
    //ajouter la classe card-img à  l'élément cardImg
    cardImg.classList.add("card-img");
    //ajoute cardImg comme enfant de cardHeader
    //la <div> contenant l'image sera à  l'intérieur du conteneur cardHeader
    cardHeader.appendChild(cardImg);


    /**
     * Étape 1: Créez la div cardBody, ajoutez la classe card-body 
     * et ajoutez-la à la carte
     */
    //CREATE // ADD class // APPEND
    const cardBody = document.createElement("div");
    cardBody.classList.add("card-body");
    card.appendChild(cardBody);

    /**
     * Étape 2
     * Créez le h2 cardTitle, ajoutez la classe card-title,
     * définissez le texte à l'intérieur de la balise 
     * sur le paramètre "title" de cette fonction
     * et ajoutez-le à la cardBody
     */
    //CREATE // ADD class //  textContent //APPEND
    //créer un nouvel élément HTML <h2> 
    const cardTitle = document.createElement('h2');
    //ajouter la classe
    cardTitle.classList.add("card-title");
    //définir le texte à afficher à l'intérieur de l'élément <h2> 
    //le contenu est pris depuis le paramètre title de la fonction
    cardTitle.textContent = title;
    //ajoute cardTitle comme enfant de cardBody
    cardBody.appendChild(cardTitle);
    /**
     * Étape 3
     * Créez le bouton cardButton, ajoutez la classe card-button,
     * définissez le texte à l'intérieur de la balise sur "Adopt Now"
     * et ajoutez-le à la cardBody
     */
    //CREATE // ADD class //  textContent //APPEND
    //créer bouton
    const cardButton = document.createElement('button');
    //définir le texte affiché à l'intérieur du bouton
    cardButton.textContent = "Adopt Now";
    //ajouter la classe
    cardButton.classList.add('card-button');
    //ajouter cardButton comme enfant de cardBody
    cardBody.appendChild(cardButton);

    // Ajouter un événement click  au bouton
    cardButton.addEventListener("click", () => {
        alert("Merci d'adopter " + title + " ! ");
    });

}

/**
 * Étape 4
 * Créez une boucle for, pour chaque élément du tableau,
 * appelez la fonction createCard avec le paramètre correspondant
 */

for (let i = 0; i < animalsToAdopt.length; i++) {
    //console.log pour vérifier que les chemins sont corrects
    console.log(`Creating card for: ${animalsToAdopt[i].name}, picture: ${animalsToAdopt[i].picture}`);
    //appel de la fonction 
    // Créer une carte pour chaque animal dans le tableau animalsToAdopt
    //le paramètre 'title' de la fonction correspond 
    //à la propriété 'name' des objets dans le tableau animalsToAdopt
    createCard(animalsToAdopt[i].name, animalsToAdopt[i].picture);
}
