<?php

include("../articles/lire_nb_articles.php");
include("../pdo.inc.php");

$test = lire_nb_articles();
var_dump($test);