<?php

require_once 'boostrap.php';

use Acme\Article;
use Acme\Comment;

$article = new Article("test");
$entityManager->persist($article);

$comment = new Comment($article, "Hello world");
$entityManager->persist($comment);

$entityManager->flush();
