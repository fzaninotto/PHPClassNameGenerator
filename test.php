<?php

require __DIR__ .'/vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new PHPClassNameGenerator\ClassNameProvider($faker));
for ($i=0; $i < 20; $i++) {
    echo $faker->namespacedClassName, "\n";
}