<?php

use DivineOmega\PasswordExposed\PasswordStatus;
use PHPUnit\Framework\TestCase;
use DivineOmega\ReadingTime\ReadingTime;

class ReadingTimeTest extends TestCase
{
    public function testLargeTextReadingTimeMinutes()
    {
        $text = file_get_contents(__DIR__.'/data/large.txt');

        $this->assertEquals(9.7699999999999996, (new ReadingTime($text))->minutes());
    }

    public function testLargeTextReadingTimeSeconds()
    {
        $text = file_get_contents(__DIR__.'/data/large.txt');

        $this->assertEquals(586.19999999999993, (new ReadingTime($text))->seconds());
    }

    public function testSmallTextReadingTimeMinutes()
    {
        $text = file_get_contents(__DIR__.'/data/small.txt');

        $this->assertEquals(0.40999999999999998, (new ReadingTime($text))->minutes());
    }

    public function testSmallTextReadingTimeSeconds()
    {
        $text = file_get_contents(__DIR__.'/data/small.txt');

        $this->assertEquals(24.599999999999998, (new ReadingTime($text))->seconds());
    }
}
