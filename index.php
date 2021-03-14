<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="index, follow, archive">
    <meta name="robots" content="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game-snake/res/k_serpent.css" type="text/css">
    <script type="text/javascript" src="game-snake/res/k_serpent.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <!-- Insetion du css bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <style type="text/css">
      body{
        background-image : url('alone.jpg');
        background-position: 'center';
        background-attachment: local;
        background-size: cover;
      }
    </style>
    <meta name="description" content="Bienvenue sur AbstractSelf. Ici vous pourrez suivre l'avancement de mes différents projets digitaux.">
    <title>abstractSelf blog</title>
    <meta name="author" content="Antonu-Maria Mela">
</head>

<body>
<div class="container">
<div class="row">
    <div class="col-12"><h1 class="h1"><a href="main.php" title="click to enter" target="_blank">Welcome on <span class="text-primary">Abstract</span><span class="text-danger">Self</span></a></h1></div>

</div>

<div class="row">
    <h2 class="h2">Prenez le temps de respirer <a href='#' onClick="go()"><span id='Crono'>une minute</span></a> si vous ne l'avez pas déjà fait au cours de la journée. </h2>
    <div class="col-5 embed-responsive embed-responsive-16by9">
  
    <iframe class="embed-responsive-item rounded-circle" width="560" height="315" src="https://www.youtube.com/embed/5qap5aO4i9A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

</div>


</div>
<script type="text/javascript">
// initialise le temps
var cpt = 60;
 function go(){
timer = setInterval(function(){
    if(cpt>0) // si on a pas encore atteint la fin
    {
        --cpt; // décrémente le compteur
        var Crono = document.getElementById("Crono"); // récupère l'id
        var old_contenu = Crono.firstChild; // stock l'ancien contenu
        Crono.removeChild(old_contenu); // supprime le contenu
        var texte = document.createTextNode(cpt + " secondes"); // crée le texte
        Crono.appendChild(texte); // l'affiche
        Crono.stopPropagation();
    }
    else // sinon brise la boucle
    {
        clearInterval(timer);
        window.alert("Vous avez terminer l'exercice de respiration.")
        alert.stopPropagation();
    }
}, 1000);
}
</script>
 
<!-- le div ou on affiche le chrono, ne pas le mettre vide -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
</body>

</html>
