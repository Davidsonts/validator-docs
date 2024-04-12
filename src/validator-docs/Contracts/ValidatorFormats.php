<?php

namespace davidsonts\ValidatorDocs\Contracts;

interface ValidatorFormats
{
    public static function validateFormat(string $value): bool;
}
