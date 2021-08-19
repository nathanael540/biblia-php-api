<?php
header('Access-Control-Allow-Origin: *');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'solion/Solion.php';


function numChapters(&$livro)
{
  $livro['chapters'] = sizeof(Solion::db()->select('verses', 'chapter', [
    'book' => $livro['id'],
    'GROUP' => 'chapter',
  ]));
}



// Load all and go relax bro!
Solion::set('solion.handle_errors', false);
Solion::start();