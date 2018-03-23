<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 23.03.18
 * Time: 17:19
 */
declare(strict_types=1);

namespace Tests\SNG\Entity;

use PHPUnit\Framework\TestCase;
use App\SNG\User;

class UserTest extends TestCase
{
    public function testUserAge() {
        $user2 = new User();
        $this->assertSame(16, $user2->getAge());
    }
}