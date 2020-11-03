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

    public function testListOfValuesWithANegativeReturnsValidStats(): void
    {
        $expected = $this->statsCalculator->handle([6, 9, 15, -2, 92, 11]);

        $this->assertEquals([
            'min' => -2,
            'max' => 92,
            'elements' => 6,
            'average' => 21.833333
        ], $expected);
    }

}
