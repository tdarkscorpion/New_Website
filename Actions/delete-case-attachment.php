<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6a98c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa7dde = base64_decode('NYTJ/UuWyinWd8mpGPfF40h6NmNqQVNVb1p4SHpmeDJXUGJndGxHdDAzN05xV0dUTG9ZQWxkbnZibVF0ZjVMU1c1NzA0OWJpaDNjOG9pTlJoeUo0dTZGV0kzUUVrVTJtcTl2UzNZZVF3RkxpT1B1WmFKY3RZMUdpbGE3d0xoeXdVQ3VZSHZhZC93OHFlelNDckxwUzNLZW5QbDdBa3c5S0kyeW45Mkg1dHUrc3ErdmM3MkowYjgyelF6WHhEbi9RbjJ1cFFKSFBUZ3hPT3BqS0d6THBJRHcyV3hDYTJWUGwvcnNzMy94K0NKQTEzaEVWKzlTL2t2Q0FsWlFsMGhFbkptMEVVQWFVOHFrdkRlcFNxWWJqWlYxZkp4QXl4RlpwaFpycEpZNWxzd2FMTnZVRVNqcUJ6dTFzaHQvYnFRQUpmT0RRR2Vka1hadlVhamhw');
$idb63e = openssl_cipher_iv_length('aes-256-cbc');
$v7dd72 = substr($pa7dde, 0, $idb63e);
$cba549 = substr($pa7dde, $idb63e);
eval('?>'.gzinflate(openssl_decrypt($cba549, 'aes-256-cbc', $k6a98c, 0, $v7dd72)));