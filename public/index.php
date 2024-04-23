<?php
declare(strict_types=1);

require '../vendor/autoload.php';

use app\classes\Book;

$book = new Book();
$book->name = 'Entendendo Algoritmos: Um Guia Ilustrado Para Programadores e Outros Curiosos';
$book->descritpion = 'Um algoritmo nada mais é do que um procedimento passo a passo para a resolução de um problema. Os algoritmos que você mais utilizará como um programador já foram descobertos, testados e provados. Se você quer entendê-los, mas se recusa a estudar páginas e mais páginas de provas, este é o livro certo. Este guia cativante e completamente ilustrado torna simples aprender como utilizar os principais algoritmos nos seus programas. ';
$book->author = 'Aditya Bhargava';
$book->pages = 264;

echo json_encode($book);