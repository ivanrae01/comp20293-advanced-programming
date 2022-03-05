<?php
require_once __DIR__ . '/../src/Simple2.php';

class Simple2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $simple2 = new Simple2();
        $simple2->setName('Jongseong');
        $this->assertEquals($simple2->getName(), 'Jongseong');
    }

    public function testGetAge()
    {
        $simple2 = new Simple2();
        $simple2->setAge(20);
        $this->assertEquals($simple2->getAge(), 20);
    }

    public function testFaveColor()
    {
        $simple2 = new Simple2();
        $simple2->setFaveColor('Green');
        $this->assertEquals($simple2->getFaveColor(), 'Green');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Simple2();
        $simple2 ->setName('Jongseong');
        $this->assertIsString($simple2->getName(), 'Jongseong');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Simple2();
        $simple2->setAge(20);
        $this->assertIsInt($simple2->getAge(), 20);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Simple2();
        $simple2->setAge(20);
        $this->assertIsNumeric($simple2->getAge(), 20);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Simple2();
        $simple2->setFaveColor('Green');
        $this->assertIsString($simple2->getFaveColor(), 'Green');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Simple2();
        $simple2->setTogetherInput('Jongseong', 20, 'Green');
        $this->assertEquals($simple2->getTogetherInput(), 'Jongseong', 20, 'Green');
    }

}