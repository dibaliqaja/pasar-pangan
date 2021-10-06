<?php

namespace App\PasarPangan;

class PanganRule
{
    public function matches(int $number): bool
    {
        return $number % 5 === 0;
    }

    public function getReplacement(): string
    {
        return 'Belanja Pangan';
    }

    public function getReplacementReverse(): string
    {
        return 'Pasar 20';
    }
}
