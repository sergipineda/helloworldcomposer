<?php

require __DIR__ . "/vendor/autoload.php";

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 6/10/15
 * Time: 19:32
 */
class Hello
{
    public $faker;


    /**
     * Hello constructor.
     */
    public function __construct()
    {

        $this->faker = Faker\Factory::create();
    }

    public function say_hello()
    {
        echo "Hola " . $this->faker->name . "!\n";
    }
}