<?php
/**
 * Created by PhpStorm.
 * User: eketchabepa
 * Date: 09.10.2018
 * Time: 17:16
 */

namespace App\Security;


class TokenGenerator
{
    private const ALPHABET = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    public function getRandomSecureToken(int $length): string
    {
        $maxNumber = strlen(self::ALPHABET);
        $token = '';

        for ($i = 0; $i < $length; $i++) {
            $token .= self::ALPHABET[random_int(0, $maxNumber - 1)];
        }

        return $token;
    }
}