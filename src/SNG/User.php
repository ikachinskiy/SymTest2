<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 23.03.18
 * Time: 17:19
 */
declare(strict_types=1);
namespace App\SNG;

class User
{
    private $age = 16;

    public function getAge() : int {
        return $this->age;
    }

    public function setAge(int $age) {
        $this->age = $age;
    }
}