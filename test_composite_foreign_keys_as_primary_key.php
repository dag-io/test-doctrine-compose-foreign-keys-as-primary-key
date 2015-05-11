<?php

require_once 'boostrap.php';

use Acme\Article;
use Acme\ArticleAttribute;

$article = new Article("test");
$entityManager->persist($article);

$articleAttribute = new ArticleAttribute($article, "foo", "bar");
$entityManager->persist($articleAttribute);

$entityManager->flush();
