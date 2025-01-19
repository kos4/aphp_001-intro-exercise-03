<?php
spl_autoload_register(static function ($className) {
  $path = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $className . '.php');

  if (is_file($path)) {
    require_once $path;
  }
});
