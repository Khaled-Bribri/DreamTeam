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
                    <form action="form">
                        <div class="field">
                            <label for="Nom" class="label">Nom</label>
                            <div class="control">
                                <input id="nom" name="nom" class="input" type="text"placeholder="entrez votre nom">
                            </div>
                        </div>
                        <div class="field">
                            <label for="Prenom" class="label"  >Prénom</label>
                            <div class="control">
                                <input id="Prenom" name="Prenom" class="input" type="text"placeholder="entrez votre Prénom">
                            </div>
                        </div>
                        <div class="field">
                            <label for="telephone" class="label">Téléphone</label>
                            <div class="control">
                                <input id="telephone" name="telephone" class="input" type="text"placeholder="entrez numero de Téléphone">
                            </div>
                        </div>
                        <div class="field">
                            <label for="message" class="label">Message</label>
                            <div class="control">
                                <textarea id="message" name="message" class="textarea" placeholder="vous pouvez nous laisser un message ici"></textarea>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-text-centered">
                                <button class="button is-link has-background-alt">envoyez</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="displayButon">
                <div class="control has-text-centered">
                    <button class="button is-link has-background-alt">Etre rappelé</button>
                </div>
                <div class="control has-text-centered">
                    <button class="button is-link has-background-alt">Prendre un rendez-vous</button>
                </div>
            </div>
        </section>

    </main>

 
      <?php include("Footer.php")?>;
    

    

</body>

</html>
