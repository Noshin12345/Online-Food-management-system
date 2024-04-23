<?php

class AdminManagerTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        session_start();
        $_SESSION = [];
    }


    public function testAdminSubmission()
    {
        $conn = $this->createMock(mysqli::class);

       
        $adminManager = new AdminManager($conn);

      
        $_POST['full_name'] = 'Noshin Tasnim Khan';
        $_POST['username'] = 'Noshin';
        $_POST['password'] = '1234';

       
        $adminManager->handleAdminSubmission();

       
        $this->assertArrayHasKey('add', $_SESSION);

     
        $this->assertEquals('Admin Added Successfully', $_SESSION['add']);
    }
}
