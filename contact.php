<!DOCTYPE html>
<html lang="fr">

    <head>

        <title>Stéphane Cursan | Contactez-moi</title>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Library CSS -->
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/metropolis" type="text/css"/>
        <!-- Google Fonts CSS -->
        <link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
              integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Reset CSS -->
        <link rel="stylesheet" href="css/reset.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

        <header class="header header_short">

            <!-- Navbar -->
            <nav class="headerNavbar">

                <div>
                    <p class="headerNavbar_brandingBrand__short"><a href="index.html">stéphane cursan</a></p>
                </div>

                <ul class="headerNavbar_menu">

                    <li class="headerNavbar_menuItem">
                        <a class="headerNavbar_menuItem__link" href="index.html">Home</a>
                    </li>

                    <li class="headerNavbar_menuItem">
                        <a class="headerNavbar_menuItem__link" href="portfolio.html">Portfolio</a>
                    </li>

                    <li class="headerNavbar_menuItem">
                        <p class="headerNavbar_menuItem__linkActive">Contact</p>
                        <img src="images/dotMenu.png" alt="">
                    </li>

                </ul>

            </nav>

        </header>

        <main>

            <article class="contact">

                <section class="contactData">

                    <h2 class="contactData_title">Pour me contacter</h1>
                    <h3 class="contactData_subtitle">Rien n'est impossible !</h3>
                    <p class="contactData_notice">« Mon profil correspond à vos attentes ?<br>
                        Mon portfolio retient votre attention ?<br>
                        Alors... écrivez-moi, téléphonez-moi. »</p>

                    <div class="contactData_container">

                        <div class="contactData_containerSkills">

                            <img class="contactData_containerSkills__symbol" src="images/map.png" alt="">
                            <p class="contactData_containerSkills_data">9 lotissement "Le Caillaou"<br>
                            rue Roger Mano<br>
                            33124 Auros</p>

                        </div>

                        <div class="contactData_containerSkills">

                            <img class="contactData_containerSkills__symbol" src="images/smartphone.png" alt="">
                            <p class="contactData_containerSkills_data">06.85.03.87.83</p>

                        </div>

                        <div class="contactData_containerSkills">

                            <img class="contactData_containerSkills__symbol" src="images/mail.png" alt="">
                            <p class="contactData_containerSkills_data">stephane.cursan@lapiscine.pro<br>
                            stephane.cursan@orange.fr</p>

                        </div>

                    </div>

                </section>

                <section class="contactForm">

                    <h2 class="contactForm_title">Vous pouvez aussi utiliser ce formulaire</h2>
                    <p class="contactForm_notice">« Laissez-moi un message et j'y répondrai dans les meilleurs délais. »</p>

                    <form class="contactForm_container" id="contact" action="process.php" method="post">
                    <!-- <form class="contactForm_container" autocomplete="off" id="contact" action="process.php" method="post"> -->

                        <div class="contactForm_containerFields">

                            <p class="contactForm_containerFields__required">Merci de renseigner tous les champs.</p>

                            <div class="contactForm_containerFields__nameEmail">

                                <div class="contactForm_containerFields__name">

                                    <label class="contactForm_containerFields__nameLabel" for="name">Nom & Prénom</label>
                                    <input class="contactForm_containerFields__nameField" type="text" id="name" name="name" placeholder="Nom et prénom" maxlength="50" oninput="checkField()"
                                           title="Saisissez ici vos nom et prénom">

                                </div>

                                <div class="contactForm_containerFields__email">

                                    <label class="contactForm_containerFields__emailLabel" for="email">Adresse électronique</label>
                                    <input class="contactForm_containerFields__emailField" type="email" id="email" oninput="checkField()" name="email" placeholder="Adresse électronique"
                                           title="Saisissez ici votre adresse éléctronique sous la forme adresse.electronique@fai.fr">

                                </div>

                            </div>

                            <div class="contactForm_containerFields__subject">

                                <label class="contactForm_containerFields__subjectLabel" for="subject">Objet</label>
                                <input class="contactForm_containerFields__subjectField" type="text" id="subject" oninput="checkField()" name="subject" placeholder="Objet" maxlength="50"
                                       minlength="2" maxlength="50" title="Saisissez ici l'objet de votre message">

                            </div>

                            <label class="contactForm_containerFields__messageLabel" for="message">Message</label>
                            <textarea class="contactForm_containerFields__Message" id="message" oninput="checkField()" name="message" rows="8" cols="45" wrap="hard"
                                      placeholder="Votre message" title="Saisissez ici le contenu de votre message"></textarea>

                            <div class="contactForm_containterFields__submit">

                                <div>
                                    <input class="contactForm_containerFields_submit__emailCopyCbox" type="checkbox" id="emailCopy" name="emailCopy" value="emailCopy"> 
                                    <label class="contactForm_containerFields_submit__emailCopyLabel" for="emailCopy">Recevoir une copie du message</label>
                                </div>

                                <div>
                                    <button class="contactForm_containerFields_submitButton" type="submit">Envoyer</button>
                                    <!-- <button class="contactForm_containerFields_submitButton" type="submit" disabled>Envoyer</button> -->
                                </div>

                            </div>

                        </div>

                    </form>

                </section>

            </article>

        </main>

        <footer class="footer">

            <nav class="footerLinks">

                <div class="footerLinks_items">
                    <a href="https://www.linkedin.com/in/st%C3%A9phane-cursan/" target="_blank"><i class="fab fa-linkedin-in fa-2x footerLinks_itemsNetwork"></i></a>
                    <i class="fab fa-github-square fa-2x footerLinks_itemsNetwork"></i>
                    <a class="footerLinks_itemsCv" href="#">www.moncvenligne.dev</a>
                </div>

                    <!-- Button -->
                <div>
                    <a class="footerLinks_button" href="#">CONTACT</a>
                <div>

            </nav>

            <p class="footerCopyright">© 2019 - Tous droits réservés | stéphane cursan</p>

        </footer>

        <a id="backToTop" href="#"><i class="fa fa-chevron-up"></i></a> <!-- a commenter !!! -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        
        <script src="js/main.js"></script>

    </body>

</html>