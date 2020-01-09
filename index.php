<?php include 'controlformulaire.php'; ?>
<?php
if (!empty($_GET['param'])) {
    $param = $_GET['param'];
} else {
    $param = 0;
}
$dom = $exp = $element = $enfants = $nom = $title =  $affiche = '';
if (file_exists('source.xml')) {
    $affiche = true;
    $dom = new DomDocument; //création objet dom
    $dom->load("source.xml"); //chargement du fichier xml
    $exp = $dom->getElementsByTagName('page'); //chargement des pages
    $element = $exp->item($param); // On obtient le noeud de la page
    $enfants = $element->childNodes; //réccupération des éléments enfants
    foreach ($enfants as $enfant) { // On prend chaque noeud enfant séparément.
        $nom = $enfant->nodeName; // On prend le nom de chaque noeud.
        if ($nom == 'title') {
            $title = $enfant->nodeValue; //réccupération du titre
        }
    }
    
    //réccupération des valeurs des balises menu
    $libMenu = []; 
    $valueMenu1 = '';
    $count = 0;
    //pour chaque éléments des balises, on réccupère les valeurs concaténées dans une chaine
    foreach( $exp as $expvalue )
    {
       $xmlMenu = $expvalue->getElementsByTagName( "menu" );
        $valueMenu = $xmlMenu->item(0)->nodeValue;
        $libMenu[$count] = $valueMenu;
        $count ++;
    }
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
        <title><?= $title ?></title>
    </head>
    <body>
         <div class="container bg-secondary">
            <h1 class="text-center text-dark">Maçonnerie Ocordo</h1>
            <div class="row bg-info">
                <div class="col-2 bg-primary">
                    <nav class="nav flex-column font-weight-bold">
                        <?php //boucle pour afficher les menus 
                       for($count = 0; $count < count($libMenu); $count++){ ?>
                        <a class="nav-link text-warning" href="?param=<?=$count?>"><?= $libMenu[$count] ?></a>
                      <?php
                       } 
                       ?>
                    </nav>
                </div>
                <div id="exercicesContent" class="ml-5 mb-3 mt-3 d-flex flex-column align-items-center justify-content-center col-10">
                    <?php
                    if ($affiche) {
                        //$element = $exp->item($param); // On obtient le noeud de la page
                        //$enfants = $element->childNodes; // On récupère les noeuds enfants du noeud de la page
                        foreach ($enfants as $enfant) { // On prend chaque noeud enfant séparément.
                            $nom = $enfant->nodeName; // On prend le nom de chaque noeud.
                            echo $enfant->nodeValue;
                        }
                    }
                    ?>
                </div>
            </div>
             <?php
            include 'footer.php';
            ?>
        </div>
        