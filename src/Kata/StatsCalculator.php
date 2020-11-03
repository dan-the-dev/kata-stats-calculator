<?php

namespace Kata;

class StatsCalculator
{
    /**
     * @return array<string, mixed>
     */
    public function handle(array $values): array
    {
        if ($values === [1, 2, 3, 4, 5, 6, 7]) {
            $min = $this->min($values);
            $max = $this->max($values);
            $elements = $this->numberOfElements($values);
            $average = $this->average($values);
        } else if ($values === [-1, -2, -3, -4, -5, -6, -7]) {
            $min = $this->min($values);
            $max = $this->max($values);
            $elements = $this->numberOfElements($values);
            $average = $this->average($values);
        } else {
            $min = $this->min($values);
            $max = $this->max($values);
            $elements = $this->numberOfElements($values);
            $average = $this->average($values);
        }
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
}
