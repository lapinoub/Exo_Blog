<?php

include("../articles/lire_articles.php");
include("../pdo.inc.php");

$test = lire_article(2, 3);
var_dump($test);