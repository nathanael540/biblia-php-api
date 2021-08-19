<?php

Solion::route('/', function () {
  Solion::render('doc.php');
});

Solion::route('/books', function () {
  $livros = Solion::db()->select('books', '*');

  foreach ($livros as &$livro) {
    numChapters($livro);
  }

  Solion::json($livros);
});

Solion::route('/verses/@version/@abbrev/@chapter', function ($version, $abbrev, $chapter) {
  // Only ACF Version
  $version = 'acf';

  // Pega livro pela sigla
  $livro = Solion::db()->get('books', '*', ['abbrev' => $abbrev]);

  // Conta capitulos do livro
  numChapters($livro);

  // Pega versos
  $versos = Solion::db()->select('verses', 'text', [
    'version' => $version,
    'chapter' => $chapter,
    'book' => $livro['id'],
    'ORDER' => 'verse',
  ]);

  Solion::json([
    'book' => $livro,
    'chapter' => [
      'number' => (int) $chapter,
      'verses' => sizeof($versos)
    ],
    'verses' => $versos
  ]);
});

Solion::route('/verses/@version/@abbrev/@chapter/@number', function ($version, $abbrev, $chapter, $number) {
  // Only ACF Version
  $version = 'acf';

  // Pega livro pela sigla
  $livro = Solion::db()->get('books', '*', ['abbrev' => $abbrev]);

  // Conta capitulos do livro
  numChapters($livro);

  // Pega versos
  $verso = Solion::db()->select('verses', 'text', [
    'version' => $version,
    'chapter' => $chapter,
    'book' => $livro['id'],
    'verse' => $number,
  ]);

  Solion::json([
    'book' => $livro,
    'chapter' => (int) $chapter,
    'number' => (int) $number,
    'text' => $verso
  ]);
});