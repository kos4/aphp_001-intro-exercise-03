<?php

use Object\Human\Student;
use Object\Technics\Media\Tv;
use Object\Technics\Transport\Car;

require_once __DIR__ . '/autoloader.php';

echo 'Зачисляем студента на первый курс' . PHP_EOL;
$student = new Student('Иван', 'Иванович', 'Иванов', new DateTime('1980-05-25'), 'Физико-математический', 1, 'ФЗ-11');
echo Student::$type . PHP_EOL;
echo 'ИД студента: ' . $student->getId() . PHP_EOL;
print_r($student->getStudentInfo());
echo 'Переводим студента на второй курс' . PHP_EOL;
$student->setCourse(2);
$student->setGroup('ФЗ-21');
print_r($student->getStudentInfo());

$car = new Car('ВАЗ', '2101', 1985);
echo Car::$type . PHP_EOL;
echo 'ИД: ' . $car->getId() . PHP_EOL;
print_r($car->getCar());

$tv = new Tv('LG', 'UV54637', 51);
echo Tv::$type . PHP_EOL;
echo 'ИД: ' . $tv->getId() . PHP_EOL;
print_r($tv->getTv());
