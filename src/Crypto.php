<?php

namespace Incapption\Helper;

class Crypto
{
    /**
     * Generate a base64 encoded HMAC hash based on an array which will be JSON encoded
     *
     * @param array  $data The array which should be JSON encoded and hashed
     * @param string $secret The secret
     *
     * @return string
     */
    public static function hmacFromArray(array $data, string $secret) : string
	{
		return base64_encode(hash_hmac('sha256', json_encode($data), $secret, true));
	}

    /**
     * Generate a base64 encoded HMAC hash from a string
     *
     * @param string $str The string which should be hashed
     * @param string $secret The secret
     *
     * @return string
     */
    public static function hmacFromString(string $str, string $secret) : string
	{
		return base64_encode(hash_hmac('sha256', $str, $secret, true));
	}
}