<?php

namespace davidsonts\ValidatorDocs\Formats;

use davidsonts\ValidatorDocs\Contracts\ValidatorFormats;

class CpfCnpj implements ValidatorFormats
{
    public static function validateFormat(string $value): bool
    {
        $cpf = new Cpf();
        $cnpj = new Cnpj();

        return $cpf->validateFormat($value) || $cnpj->validateFormat($value);
    }
}
