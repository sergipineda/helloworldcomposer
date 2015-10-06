<?php
namespace Com\Iesebres\Dam2\spineda\helloworldcomposer;

use Faker\Factory;

require __DIR__ . "/../vendor/autoload.php";

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

        $this->faker = Factory::create();
    }

    public function say_hello()
    {
        echo "Hola " . $this->faker->name . "!\n";
    }
}