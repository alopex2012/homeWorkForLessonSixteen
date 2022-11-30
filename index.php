<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work for Lesson 16</title>
    <style>
        body {
            color: darkblue;
        }

        pre {
            color: black;
        }

        hr {
            background-color: crimson;
        }
    </style>
</head>
<body>
<h5>Заняття 16. Об'єкт зі статичними властивостями та методами. Константи класів в ООП на PHP </h5>
<hr>

<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\User, App\Circle;

echo "<pre>",
"
    1.	Не підглядаючи в мій код, реалізуйте такий же клас User, який підраховує кількість своїх об'єктів.
    2.	Самостійно переробте код вашого класу User відповідно до теоретичної частини уроку.
",
"</pre>";

//create an instance of the class User
$user1 = new User("First");
$user2 = new User("Second");
$user3 = new User("Third");
$user4 = new User("Four");
//create an array of created objects
$arr = [$user1, $user2, $user3, $user4];
print_r($arr);
echo "<br />";
echo "Number of objects created = " . User::getCount();

echo "<hr />";

echo "<pre>",
"
    3.	Реалізуйте запропонований клас Circle самостійно.
    4.	За допомогою написаного класу Circle знайдіть довжину кола та площу кола з радіусом 10.
",
"</pre>";

//create an instance of the class Circle
$circle = new Circle(10);
echo "Circle area = " . $circle->getSquare() . "<br />";
echo "Circumference = " . $circle->getCircuit();

echo "<hr />";
?>
</body>
</html>