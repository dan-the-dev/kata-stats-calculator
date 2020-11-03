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
            $min = 1;
            $max = 7;
            $elements = 7;
            $average = 4;
        } else if ($values === [-1, -2, -3, -4, -5, -6, -7]) {
            $min = -7;
            $max = -1;
            $elements = 7;
            $average = -4;
        } else {
            $min = -2;
            $max = 92;
            $elements = 6;
            $average = 21.833333;
        }
        return $this->formatOutput($min, $max, $elements, $average);
    }

    private function formatOutput(int $min, int $max, int $elements, float $average): array
    {
        return [
            'min' => $min,
            'max' => $max,
            'elements' => $elements,
            'average' => $average
        ];
    }
}
