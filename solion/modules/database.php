<?php
require(__DIR__ .  "/vendor/medoo/src/Medoo.php");

use Medoo\Medoo;

Solion::map('db', function ($login = "app") {
  return new Medoo(json_decode(file_get_contents(__DIR__ . "/../../secrets/databases/$login.json"), true));
});