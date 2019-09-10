/*** scrollback to top button show ***/
$(window).scroll(function(){

    if ($(this).scrollTop() > 100){
        $('#backToTop').fadeIn();
    } else {
        $('#backToTop').fadeOut();
    }

});

/*** click event scroll to top button jQuery ***/
$('#backToTop').click(function(){
    $('html, body').animate({scrollTop : 0},600);
});

/*** gestion de la validité des champs du formulaire de contact ***/
/*** je crée une variable par champ afin de pouvoir récupérer la saisie de l'utilisateur ***/

var form = document.getElementById('contact');
var nameField = document.getElementById('name');
var emailField = document.getElementById('email');
var emailRegEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
var subjectField = document.getElementById('subject');
var messageField = document.getElementById('message');
var msgCopyCbox = document.getElementById('msgCopy');
var submitButton = document.querySelector('.contactForm_containerFields_submitButton');

/*** je crée la fonction qui permettra de vérifier si chaque champ a été renseigné
afin de changer la couleur du bouton submit et de le rendre utilisable
pour pouvoir envoyer le formulaire ***/

function checkField() {
    /*** je vérifie si l'utilisateur a bien saisi ses nom et prénom, l'object de son message et son message
    et si ses saisies ne débutent pas par des espaces ou ne contiennent pas que des espaces ***/
    if (nameField.value.trim() !== ""
        && nameField.value.length > 3
        && emailRegEx.test(emailField.value)
        && subjectField.value.trim() !== ""
        && subjectField.value.length > 3
        && messageField.value.trim() !== "") {
        /*** si le champ a bien été renseigné le bouton submit change de couleur ***/
        submitButton.style.backgroundColor = '#65d6e6';
        submitButton.disabled = false;
    } else {
        submitButton.style.backgroundColor = '#979695';
        submitButton.disabled = true;
    }
}

// form.addEventListener('submit', function(event) {
//     // event.preventDefault();
//     console.log(event);
// })