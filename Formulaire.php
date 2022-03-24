<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project-01</title>
   
    <link rel="stylesheet" href="khaled.css">
</head>

<body>
    
 
    <?php include("Header.php")?>;

    <main>
    
        <section id="contact">
            <div class="card-content">
                <div class="media">
                    <div class>
                        <h2 class="title article-title">Contactez-nous</h2>
                    </div>
                </div>
                <div class="content article-body">
                    <form method="post" action="send_email.php">
                        <div class="field">
                            <label for="Nom" class="label">Nom</label>
                            <div class="control">
                                <input id="nom" name="nom" class="input" type="text"placeholder="Votre nom">
                            </div>
                        </div>
                        <div class="field">
                            <label for="Prenom" class="label"  >Prénom</label>
                            <div class="control">
                                <input id="Prenom" name="Prenom" class="input" type="text"placeholder="Votre prénom">
                            </div>
                        </div>
                        <div class="field">
                            <label for="telephone" class="label">Téléphone</label>
                            <div class="control">
                                <input id="telephone" name="telephone" class="input" type="text"placeholder="Votre numéro de téléphone">
                            </div>
                            <label for="telephone" class="label">Email</label>
                            <div class="control">
                                <input id="mail" name="mail" class="input" type="text"placeholder="@gmail.com">
                            </div>
                        </div>
                        <div class="field">
                            <label for="message" class="label">Message</label>
                            <div class="control">
                                <textarea id="message" name="message"  class="textareaMessage" placeholder="Laissez-nous un message ici"></textarea>
                            </div>
                        </div>

                        <div class="displayButon1">
                            <div>
                                <button>Envoyez</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section>
            <h1 class="h1p_class">Besoin d'un conseil ? On vous rappelle !</h1>
            <p class="h1p_class"> un voyage entre potes, en famille, en amoureux... On est là pour vous aider à faire le bon choix 👋 </p>
            <div class="gridform">
            <div id="item-form0"><p>Où peut-on vous joindre ?
            Une conseillère ou un conseiller va vous rappeler immédiatement et gratuitement, durant les heures d’ouverture de notre service commercial. 
            Vous pourrez directement souscrire à la meilleure offre possible.<br></p>
            <div class="displayButon">
                <table>
                    <td>
                    <input id="telephone" name="telephone" class="txtkb" type="text"placeholder="Votre numéro de téléphone">
                    </td>
                    <td>
                    <button >Me faire rappeler</button>
                    </td>  
                </table>
            </div>
            <p class="p_class"> Nos conseillers sont disponibles du lundi au vendredi de 8h à 23h, le samedi de 9h30 à 18h30 et le dimanche de 9h à 17h.</p>
            <h3 class="h3p_class">Aidez-nous à préciser votre demande pour connaître
l            'interlocuteur le plus adapté</h3>

       
           </div>
            <div id="item-form1"><img class="pictures " src="images/imgtel.jpg" alt="partez en famille" ></div>


            <div id="item-form2">
                <h3>RESERVER VOTRE VOYAGE </h3>
                <br>
                <p>Flex-Trip vous fait voyager à prix de rêve !</p>
                <div class="displayButon2">
                        <div>
                             <button>Réserver</button>
                         </div>
                </div>
            </div>
            <div id="item-form3" class="card-content">
                <h3>SUIVI DE COMMANDE</h3>
                <br>
                <p>Suivre l'état d'avancement
                    de votre commande</p>
                <div class="displayButon2">
                    <div>
                        <button>Suivre</button>
                     </div>
                </div>
            </div>
            <div id="item-form4">
                <h3>PRENDRE RDV EN Agence</h3>
                <br>
                <p>Trouver l'agence
                la plus proche de chez vous</p>
                <div class="displayButon2">
                    <div>
                         <button>Prendre RDV</button>
                     </div>
                </div>
            </div>
            </div>


        </section>

    </main>

 
      <?php include("Footer.php")?>
    

    

</body>

</html>
