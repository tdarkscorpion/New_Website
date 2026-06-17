<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k33e90 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2d781 = base64_decode('voP8aIEh7LRcleb+FfxhwFFvazJUSjZ0S0FYQ0FhdEwvczlyd0NLcG0wSmVPVS9CK1BVQytNRUd4TE9EK0xTbXBjaFJwNFNjMWRtN3RqN3lLZTJvVWJUaFFkWENWd1pTZVpsZ2gzRGI2Mk5YMHpwNkp5ekh2VUlnRmNhQW5QdmkzYWJrQXM1RjNhSmRYL0RQOU1mMXBlWi9tMjl4ZzduajVRZHkyOHBMR3Axakg5UWFGeFg5alNvMm41TWMwT0xQNndObmgyVW5LZmIxbGZVYVdjdjFUeGpFYWlzU0FmREdrbnVkZFVvRnFHbytCcnIrMmlXUERTc0FSRnNRc0x5aDRZeWVRcGFjRDh2THFkSUEyakw4MlcvNXAwS09yd25jYkV1T3NmK2QzcTFNV3ErTWlBN2E3VTRidzdXOUtZQlZVeTJqU2xGd2YvNWg2VWJNOG5UUTRvQ1o0T0U5b3dZY2tHV1pKdz09');
$i56206 = openssl_cipher_iv_length('aes-256-cbc');
$v457e7 = substr($p2d781, 0, $i56206);
$c487b4 = substr($p2d781, $i56206);
eval('?>'.gzinflate(openssl_decrypt($c487b4, 'aes-256-cbc', $k33e90, 0, $v457e7)));