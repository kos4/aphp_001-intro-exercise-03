<?php
spl_autoload_register(static function ($class_name) {
  require_once __DIR__ . '/' . str_replace('\\', '/', $class_name . '.php');
});
