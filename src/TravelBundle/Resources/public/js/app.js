// ********************************************************************
// *                       Appel Fonction
// ********************************************************************
jQuery(document).ready(function($) {

    console.log('jQuery de app.js a démarré julien test');

    // RETOUR VERS LE HAUT
    // retour_haut();



    //FONTION CASE A COCHER
    // initialisation des listbox (select)
    selecteur();

//    FONCTION MODAL
    modal();

});

// ********************************************************************
// *                       Bouton retour vers haut
// ********************************************************************

function retour_haut() {
    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

    var amountScrolled = 300;

    $(window).scroll(function () {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('slow');
        } else {
            $('a.back-to-top').fadeOut('slow');
        }
    });

    $('a.back-to-top, a.simple-back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });
}


// ********************************************************************
// *                    material call
// ********************************************************************


function selecteur() {
    // console.log('ma fonction')
    $('select').material_select();
}
$(document).ready(function() {
    $('.textarea').trigger('materialize-textarea');
});

// ********************************************************************
// *                    material call
// ********************************************************************

function modal() {
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
}

