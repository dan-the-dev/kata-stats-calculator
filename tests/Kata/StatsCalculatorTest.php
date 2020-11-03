<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\StatsCalculator;

class StatsCalculatorTest extends TestCase
{
    private $index;

    protected function setUp(): void
    {
        $this->index = new StatsCalculator();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

}
