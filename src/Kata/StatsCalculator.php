<?php

namespace Kata;

use InvalidArgumentException;

class StatsCalculator
{
    /**
     * @return array<string, mixed>
     */
    public function handle(array $values): array
    {
        $this->validate($values);

        $min = $this->min($values);
        $max = $this->max($values);
        $elements = $this->numberOfElements($values);
        $average = $this->average($values);

        return $this->formatOutput($min, $max, $elements, $average);
    }

    private function min(array $values): int
    {
        return min($values);
    }

    private function max(array $values): int
    {
        return max($values);
    }

    private function numberOfElements(array $values): int
    {
        return count($values);
    }

    private function average(array $values): float
    {
        return array_sum($values)/count($values);
    }

    private function formatOutput(int $min, int $max, int $elements, float $average): array
    {
        return [
            'min' => $min,
            'max' => $max,
            'elements' => $elements,
            'average' => number_format($average, 6)
        ];
    }

    public function validate(array $values): void
    {
        foreach ($values as $value) {
            if (!is_int($value)) {
                throw new InvalidArgumentException();
            }
        }
    }
}
