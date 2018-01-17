<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="images/projet/favicon-96x96.png">
    <title>Samakunchan</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
          crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="styles.css">
    <script src="js/objectLibrary.js"></script>
</head>

<body id="main">
    <header>
        <div class="collapse head" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 py-4">
                        <h4 class="text-white">A propos</h4>
                        <p class="text-muted">Développeur passioné, passé par une reconversion professionnel,
                            à la recherche de nouveau defis et qui adore le Javascript, parce que le Javascript... c'est la vie.</p>
                    </div>
                    <div class="col-sm-4 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.linkedin.com/in/cedric-badjah-9646b3141/" target="_blank" class="text-white">Linkedin</a></li>
                            <li><a href="https://github.com/samakunchan/" target="_blank" class="text-white">GitHub</a></li>
                            <li><a href="mail" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark menu">
            <div class="container d-flex justify-content-between">
                <a href="home" class="navbar-brand">Samakunchan</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main" >
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Bienvenue</h1>
                <p class="lead text-muted">Voici les projets que j'ai réalisé en tant qu'étudiant. Chaque projet a été validé par un
                professionnel expérimenté. Les 5 projets ci-dessous sont une condition sine qua non pour avoir le diplôme.</p>
                <p>
                    <a href="home" class="btn btn-primary">Voir mes projets</a>
                    <a href="#" class="btn btn-secondary">En savoir plus sur moi</a>
                </p>
            </div>
        </section>
        <div class="album text-muted">
            <div class="container">
            <?= $contenu; ?>
            </div>
        </div>
    </main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right btn btn-primary">
            <a id="rolTop">Back to top</a><!-- Mettre en JS -->
        </p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/scroll.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>
