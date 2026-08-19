<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2ccd2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4f50f = base64_decode('9CfMSf6+bdcICstwRS+v/1lEeG5rY3lVWHMzdDB1SkVzZjg5K2xFWUxBV2NXNXZzeHF4RUFtNkRGWFc3aFNnRmRaMERzTDdzSWFNVGV4TUF6dHB3bTgwbGhnMVBTWlV1aWowTWdDQ250bW5vaXJsMGFZNUV2NlQwQnA2L00wWmRHSTNVczJoN2QyL0VZSC9sTUhyL0hJY2p3VHJ1TzRxMHZMK1JORmdpaFY3WEFLVjl4TWpEOFRGNGNIejBveFVRaHhmM1hHc1pKUGNNTXJOdUM1dmVmQWFvMDVSVUZPUUdBRVRQKzltTFM4RElvK1lBZjR5RzZpN3ZGa05PbzN0YlluTnNzeWE0dS9SVy8yOGU=');
$i4b44b = openssl_cipher_iv_length('aes-256-cbc');
$v3cfca = substr($p4f50f, 0, $i4b44b);
$ce375c = substr($p4f50f, $i4b44b);
eval('?>'.gzinflate(openssl_decrypt($ce375c, 'aes-256-cbc', $k2ccd2, 0, $v3cfca)));