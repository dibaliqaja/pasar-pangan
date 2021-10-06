<?php

namespace App\PasarPangan;

class PasarRule
{
    public function matches(int $number): bool
    {
        return $number % 3 === 0;
    }

    public function getReplacement(): string
    {
        return 'Pasar 20';
    }

    public function getReplacementReverse(): string
    {
        return 'Belanja Pangan';
    }
}
