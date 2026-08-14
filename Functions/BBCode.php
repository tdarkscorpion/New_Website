<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k22424 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p15247 = base64_decode('3royLaBaQHtrNAyF/f7rdzBWMkVhUVdTWXcwbnNqb0VBdnJXY2dlOG13YlM3T1FNcG1XZTNONjhtTDVhVFhENTNYdkJEWjFORGF6RXBzT1BwVllkbGpSQmZWMlpTWnE2QlJiWktiUDJIVkFlNllwN3JFb3JIN0xjYzMyMEFwOFVSQXVSYi9OOEN2NFdjUG9HQ25XUWxIVjIzMkc0TFpmaDJoLzVDUXFiTVN1dldjWHlLQ3kvQkdjQno1OThJRGREamdYWWIzcXRRZ0JOY3JvZVlCa2pBYTFGUkxZR3h1LzFjTDdzbXFqYmVsZDRFbmlRYjJGK05RQzZGaHZJWi80Z2dmaEw2THo5UjZqNFZzeDdLVnVSL2QwT1N4QUp4aUY0eVhvS3k5MjlEM0VkU3daOXgwbms3SGVrVzJZbGF0NmlKUnlGWWV5dnRSdWRUMng3');
$i8fe73 = openssl_cipher_iv_length('aes-256-cbc');
$vef770 = substr($p15247, 0, $i8fe73);
$ceeec9 = substr($p15247, $i8fe73);
eval('?>'.gzinflate(openssl_decrypt($ceeec9, 'aes-256-cbc', $k22424, 0, $vef770)));