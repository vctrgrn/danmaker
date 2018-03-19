/**
 * SCRIPT DU MENU
 */
$(function () {
    $(window).scroll(
        function () { // Au scroll dans la fenetre on déclenche la fonction
            if ($(this).scrollTop() > 840) { // si on a défini de plus de 1000 px du haut vers le bas
                $('#gauche').addClass("fixgauche"); //on ajoute la classe "fixgauche" à <div id="gauche">
            } else {
                $('#gauche').removeClass("fixgauche");//sinon on retire la classe "fixgauche" à <div id="gauche">
            }
        }
    );
});
