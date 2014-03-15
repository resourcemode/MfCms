<?php
spl_autoload_register(function($className) {
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName = __DIR__ . DIRECTORY_SEPARATOR . $fileName . $className . '.php';
    if (file_exists($fileName)) {
        require $fileName;

        return true;
    }

    return false;
});

return array(
    'Faker\Module'                                => __DIR__ . '/Module.php',
    'Faker\Documentor'                            => __DIR__ . '/src/Faker/Documentor.php',    
    'Faker\Factory'                               => __DIR__ . '/src/Faker/Factory.php',   
    'Faker\Generator'                             => __DIR__ . '/src/Faker/Generator.php',
    'Faker\NullGenerator'                         => __DIR__ . '/src/Faker/NullGenerator.php',
    'Faker\UniqueGenerator'						  => __DIR__ . '/src/Faker/UniqueGenerator.php',
    'Faker\Guesser\Name'						  => __DIR__ . '/src/Faker/Guesser/Name.php',
    'Faker\ORM\Doctrine\ColumnTypeGuesser'		  => __DIR__ . '/src/Faker/ORM/Doctrine/ColumnTypeGuesser.php',
    'Faker\ORM\Doctrine\EntityPopulator'		  => __DIR__ . '/src/Faker/ORM/Doctrine/EntityPopulator.php',
    'Faker\ORM\Doctrine\Populator'				  => __DIR__ . '/src/Faker/ORM/Doctrine/Populator.php',
    'Faker\ORM\Mandango\ColumnTypeGuesser'		  => __DIR__ . '/src/Faker/ORM/Mandango/ColumnTypeGuesser.php',
    'Faker\ORM\Mandango\EntityPopulator'		  => __DIR__ . '/src/Faker/ORM/Mandango/EntityPopulator.php',
    'Faker\ORM\Mandango\Populator'				  => __DIR__ . '/src/Faker/ORM/Mandango/Populator.php',
    'Faker\ORM\Propel\ColumnTypeGuesser'		  => __DIR__ . '/src/Faker/ORM/Propel/ColumnTypeGuesser.php',
    'Faker\ORM\Propel\EntityPopulator'		      => __DIR__ . '/src/Faker/ORM/Propel/EntityPopulator.php',
    'Faker\ORM\Propel\Populator'				  => __DIR__ . '/src/Faker/ORM/Propel/Populator.php',
);

