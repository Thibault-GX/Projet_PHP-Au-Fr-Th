<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
        <title>Maçonnerie Ocordo</title>
    </head>
    <body>
        <div class="container bg-secondary">
            <h1 class="text-center text-dark">Maçonnerie Ocordo</h1>
            <div class="row bg-info">
                <div class="col-2 bg-primary">
                    <nav class="nav flex-column font-weight-bold">
                        <a class="nav-link text-warning" href="?param=0">Page 1</a>
                        <a class="nav-link text-warning" href="?param=1">Page 2</a>
                        <a class="nav-link text-warning" href="?param=2">Page 3</a>
                        <a class="nav-link text-warning" href="?param=3">Page 4</a>
                    </nav>
                </div>
                <div>
                    <?php
if(!empty($_GET['param'])){
    $param = $_GET['param'];
}
else{
    $param = 0; 
}
echo  $_GET['param'];
$dom = new DomDocument;
$dom->load("source.xml");
$exp = $dom->getElementsByTagName('page');
 
$element = $exp->item($param); // On obtient le noeud de la page
$enfants = $element->childNodes; // On récupère les noeuds enfants du noeud de la page
 foreach($enfants as $enfant){ // On prend chaque noeud enfant séparément.
    $nom = $enfant->nodeName; // On prend le nom de chaque noeud.
        echo $enfant->nodeValue;
                    ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>

