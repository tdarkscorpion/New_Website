<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka3ea3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5f0fa = base64_decode('zwn58hCdJ9fJhdn3SEll40N1Qy95OUQ5eElzbjBURUhiUFdTU2FTaVpyQzF4NURoYzB4eFNQUmVTRy9lNE9BVU5ZT200eU1xd2pnTU1MN1h2UEVrd2kyeFd2TC9peG5aOWZUOXVOR2FZMitBTWJTSUFZWGlrNVhoL3FnZklmS2FxckpDbjBrUDYvWmR0VnpHWUJMMjVJWmpUcFNGVEhSUXBZOVYxNWFuejYyci9teWFxV29rNlQ5OVdvcjljSS9uak9HM2Zwb2NqTW11TVU5dUNWMGNGZFhJc0RTVFJrNHUxaVVVS2VjbUdnVE1TYjhyZnh5ODNYYlRzWHhzNnhBQk1vZk0vNURIWVFjSkp6WmZWTWswa1pOUVF2b2VjK0xhcm05cms5TzRJK1pXeC9VSmxCM1J4M3lNdVN4UzgwMTZDeVFRLzYyQis0TEVUVUQ0OW5iSDgwbmhvbk0zSUQ3bmVObTAwZz09');
$i9da85 = openssl_cipher_iv_length('aes-256-cbc');
$v8f3cf = substr($p5f0fa, 0, $i9da85);
$cbbb89 = substr($p5f0fa, $i9da85);
eval('?>'.gzinflate(openssl_decrypt($cbbb89, 'aes-256-cbc', $ka3ea3, 0, $v8f3cf)));