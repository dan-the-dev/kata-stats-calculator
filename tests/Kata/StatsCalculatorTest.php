<?php

namespace Kata;

use InvalidArgumentException;
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

    public function testListOfValuesSimplesAllPositiveReturnsValidStats(): void
    {
        $expected = $this->statsCalculator->handle([1, 2, 3, 4, 5, 6, 7]);

        $this->assertEquals([
            'min' => 1,
            'max' => 7,
            'elements' => 7,
            'average' => 4
        ], $expected);
    }

    public function testListOfValuesSimplesAllNegativeReturnsValidStats(): void
    {
        $expected = $this->statsCalculator->handle([-1, -2, -3, -4, -5, -6, -7]);

        $this->assertEquals([
            'min' => -7,
            'max' => -1,
            'elements' => 7,
            'average' => -4
        ], $expected);
    }

    public function testItThrowExceptionWhenArrayContainsNonIntegers(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->statsCalculator->handle([1, 2, 3, '4', 5, 6]);
    }
}
