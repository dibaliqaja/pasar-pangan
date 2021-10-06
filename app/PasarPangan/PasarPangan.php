<?php

namespace App\PasarPangan;

class PasarPangan
{
    private $rules;

    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }
    
    public function generateList(int $limit): array
    {
        $list = [];
        for ($number = 1; $number <= $limit; $number++) {    
            if ($number === 76) break;
            $list[] = $this->generateElement($number);
        }
        return $list;
    }

    private function generateElement(int $number)
    {
        foreach ($this->rules as $rule) {
            if ($rule->matches($number) && $number >= 31) {
                return $rule->getReplacementReverse();
            } elseif ($rule->matches($number)) {
                return $rule->getReplacement();
            }
        }
        return $number;
    }
}