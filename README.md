PHPClassNameGenerator™: A PHP Class Name Generator
==================================================

Generate [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md) compliant class names with ease.

Why Should I Use PHPClassNameGenerator™?
----------------------------------------

This library will help you if:

 * You have written a great piece of code but you don't know where to contribute it
 * You would like to contribute to an existing open-source project but don't know what to do
 
Installation
------------

Add the PHPClassNameGenerator™ library to your `composer.json` file:

    {
      "require": {
        "fzaninotto/PHPClassNameGenerator": "dev-master"
      }
    }

Then use [composer](http://getcomposer.org/doc/00-intro.md) to complete the installation process.

Usage
-----

Use the new `ClassNameProvider` class in combination with [Faker](https://github.com/fzaninotto/Faker) to produce an infinite number of PSR-0 compliant class names.

    <?php

    require __DIR__ .'/vendor/autoload.php';

    $faker = Faker\Factory::create();
    $faker->addProvider(new PHPClassNameGenerator\ClassNameProvider($faker));
    for ($i=0; $i < 20; $i++) {
        echo $faker->namespacedClassName, "\n";
    }

This snippet generates 20 awesome class names. Here is an example output from PHPClassNameGenerator™:

    Assetic\History\XPath\ButtonAliasArgument
    Symfony\Store\MissingCheckboxProcessIntrospectableOption
    Doctrine\Resource\Client\FilterMockSet
    Doctrine\Directory\ClientDumperErrorConstraint
    Monolog\Radio\Form\AnnotationAliasAttribEscaperRadioRequest
    Doctrine\Class\Error\Container\EngineTraceableDefinition
    Symfony\Store\Scope\StoreProcessAnnotationNativeStorageWriter
    Silex\Application\ClassPackage
    Doctrine\Service\Kernel\ExceptionStoreForm
    Assetic\Hash\Name\Input\KeyFileGeneratorStreamBag
    Monolog\Response\BasicButton
    Silex\Cookie\Input\AttributeRepeatedDepencencyInjectionProxy
    Symfony\Resource\Access\StorageKernelLoaderPathEngine
    Doctrine\Kernel\Session\ReferenceIntrospectableHelper
    Symfony\Store\CombinedSuccessGenerator
    Symfony\Cache\IdentityTimeShell
    Doctrine\Path\Dialog\Filesystem\LayoutWarmableNodeElementJsonWarmer
    Silex\Cookie\SplDataPackageStringException
    Doctrine\Link\TreeHeaderOptionLoader
    Symfony\Cookie\MandatoryOption

Contributing
------------

PRs are, of course, welcome. Please respect the PSR-1 and PSR-2 standards.

Why Does PSR-0 Force Such Awful Class Names?
--------------------------------------------

You tell me. I never asked for it. Now I can't code in PHP without an IDE anymore, and it's killing my RAD.