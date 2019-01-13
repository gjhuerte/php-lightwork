<?php

namespace App\Config;

class Encryption
{
    /**
     * Encrypt the passed string argument
     *
     * @return string
     */
    protected static function encrypt(string $string)
    {
        $encryptedString = $string;
        return $encryptedString;
    }

    /**
     * Decrypt passed encrypted string
     *
     * @param string $string
     * @return string
     */
    protected static function decrypt(string $string)
    {
        $decryptedString = $string;
        return $decryptedString;
    }
}
