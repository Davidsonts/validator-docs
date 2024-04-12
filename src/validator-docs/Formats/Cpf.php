<?php

namespace davidsonts\ValidatorDocs\Formats;

use davidsonts\ValidatorDocs\Contracts\ValidatorFormats;

class Cpf implements ValidatorFormats
{
    public static function validateFormat(string $value): bool
    {
        return preg_match('/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', $value) > 0;
    }
}
