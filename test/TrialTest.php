<?php
require_once __DIR__ . '/../src/Trial.php';

class TrialTest extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $trial = new Trial (10);
        $result = $trial->mods(2);

        $this->assertEquals(0, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $trial = new Trial (2);
        $result = $trial->mods(15);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $trial = new Trial (2);
        $result = $trial->mods('Z');
    }

    public function testModulus1()
    {
        $trial = new Trial (15);
        $result = $trial->mods(10);

        $this->assertEquals(5, $result);
    }

    public function testModulus2()
    {
        $trial = new Trial (32);
        $result = $trial->mods(12);

        $this->assertEquals(8, $result);
    }

}