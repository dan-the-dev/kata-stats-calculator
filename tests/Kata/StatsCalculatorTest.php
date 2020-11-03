<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\StatsCalculator;

class StatsCalculatorTest extends TestCase
{
    private $statsCalculator;

    protected function setUp(): void
    {
        $this->statsCalculator = new StatsCalculator();
    }

    public function testShallPass(): void
    {
        $expected = $this->statsCalculator->handle();

        $this->assertEquals([
            'min' => -2,
            'max' => 92,
            'elements' => 6,
            'average' => 21.833333
        ], $expected);
    }

}
