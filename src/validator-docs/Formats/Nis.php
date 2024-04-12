<?php

namespace davidsonts\ValidatorDocs\Formats;

use davidsonts\ValidatorDocs\Contracts\ValidatorFormats;

class Nis implements ValidatorFormats
{
    public static function validateFormat(string $value): bool
    {
        return preg_match('/^\d{3}\.\d{5}\.\d{2}-\d{1}$/', $value) > 0;
    }
}
