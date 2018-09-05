<?php

namespace ihipop\TaobaoTop\security;

use ihipop\TaobaoTop\exceptions\DecryptErrorException;

class Security
{

    private static $iv = "0102030405060708";

    public static function encrypt($input, $key)
    {
        $key = base64_decode($key);

        return base64_encode(openssl_encrypt($input, 'AES-128-CBC', $key, true, self::$iv));
    }

    public static function hmac_md5($input, $key)
    {
        $key = base64_decode($key);

        return hash_hmac('md5', $input, $key, true);
    }

    public static function decrypt($sStr, $key)
    {
        $key = base64_decode($key);

        $decrypted = openssl_decrypt(base64_decode($sStr), 'AES-128-CBC', $key, OPENSSL_RAW_DATA, self::$iv);

        if (!$decrypted) {
            throw new DecryptErrorException(sprintf('解密失败，请检查密钥 %s 密文 %s 是否正确?', base64_encode($key), $sStr));
        }

        return $decrypted;
    }
}
