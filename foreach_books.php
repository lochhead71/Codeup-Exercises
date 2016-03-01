<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $title => $bookData) {
	if ($bookData['published'] > 1950) {
		echo "Title: " . $title . PHP_EOL;
		echo "Published: " . $bookData['published'] . PHP_EOL;
		echo "Author: " . $bookData['author'] . PHP_EOL;
		echo "Number of pages: " . $bookData['pages'] . PHP_EOL;
		echo "\n";
	}
}