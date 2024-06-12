/**
 * Jeu qui s'affiche sur une page web et qui consiste à deviner un nombre
 * @param {HTMLElement} zone zone dans laquelle s'affiche le jeu
 */
export function rightNumber(zone) {

    let propositionZone;
    let validateButton;
    let targetNumber;
    let playerNumber;

   /**
    * Initialisation de la zone de jeu
    */ 
   function numberInit() {
        zone.classList.add('apparence-zone', 'number-zone');
        zone.innerHTML = '<div class="numberChoice"><label for="userProposition">choisissez un nombre entre 1 et 100</label><input type="number" id="userProposition"><input type="submit" value="Valider" id="validate"></div>'

        propositionZone = document.querySelector("#userProposition");
        validateButton = document.querySelector("#validate");
        targetNumber = Math.floor(Math.random()*100+1);

        validateButton.addEventListener('click', verifyNumber);
    }

    /**
     * Vérification de la proposition du joueur
     */
    function verifyNumber() {
    
    }

    numberInit();
    console.log(targetNumber);
}