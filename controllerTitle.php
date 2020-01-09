<?php
if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
}
if (isset($_GET['page'])){
    $title = intval(htmlspecialchars($_GET['page']));
    $title = $title - 1;
} else {
    $title = 0;
}
 $tab = $xml->page[$title]->title;
?>
