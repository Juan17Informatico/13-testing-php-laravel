<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {
        // $email = 'juan@gmail.com'; 
        // $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);

        $result = Email::validate('juan@gmail.com');
        $this->assertTrue($result);

        $result = Email::validate('juan@@gmail.com');
        $this->assertFalse($result);

    }
}
