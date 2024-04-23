<?php

use PHPUnit\Framework\TestCase;

class FoodFormTest extends TestCase
{
    public function testSubmitForm()
    {
      
        $_SESSION = [];

      
        $conn = $this->getMockBuilder(mysqli::class)
            ->disableOriginalConstructor()
            ->getMock();

        
        $_FILES['image'] = [
            'name' => 'test_image.jpg',
            'tmp_name' => '/tmp/test_image.jpg',
            'error' => 0,
            'size' => 123456,
        ];

      
        $_POST = [
            'title' => 'Test Food',
            'description' => 'This is a test food description.',
            'price' => 10.99,
            'category' => 1,
            'featured' => 'Yes',
            'active' => 'Yes',
           
        ];
     
        ob_start();     
        $output = ob_get_clean();
        $this->assertStringContainsString('Food Added Successfully', $output);
        $this->assertArrayHasKey('add', $_SESSION);
        $this->assertEquals('<div class=\'success\'>Food Added Successfully.</div>', $_SESSION['add']);

    }
}
