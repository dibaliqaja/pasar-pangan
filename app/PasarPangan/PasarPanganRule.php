<?php

namespace App\PasarPangan;

class PasarPanganRule
{
    private const PASAR = 'Pasar 20 Belanja Pangan';

    public function matches(int $number): bool
    {
        return $number % 3 === 0 && $number % 5 === 0;
    }

    public function getReplacement(): string
    {
        return self::PASAR;
    }

    public function getReplacementReverse()
    {
        return self::PASAR;
    }
}
