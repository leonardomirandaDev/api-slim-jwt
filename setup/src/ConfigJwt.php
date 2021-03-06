<?php
namespace Settings;

class ConfigJwt
{

    static $daysToExp = 31;
    static $expire = true;

    protected static function getPrivateKey()
    {
        return file_get_contents(__DIR__ . '/private.pem');
    }

    protected static function getPublicKey()
    {
        return file_get_contents(__DIR__ . '/public.pem');
    }
}
