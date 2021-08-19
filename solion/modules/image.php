<?php
require(__DIR__ .  "/vendor/SimpleImage/src/claviska/SimpleImage.php");

Solion::map('image', function () {
  return new \claviska\SimpleImage();
});
