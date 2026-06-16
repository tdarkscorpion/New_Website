<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfaa94 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p717de = base64_decode('kCcmR+hWnZ+ZbLc8BoR/5mw1UUN3eTJmRkU2alhWeFl3T0YzVkFJUG9mOXpSeU9iaHc5TVRlc21SVDB3RmwvL3NoZncvZjFPODBlTFhXMDE4MUZXYmVIM3IvWWdzenBZZ2xZVVZrN1E1cGZ1QmZmdWoyVDF2WnNQVGJMU2pBQVJDMXgyK2FzN2JIRjdGVlo2Z0FrcncyeklYdU0zRndTZXNLUUpUT0pwZHZzdytxOTBzMHE1Q3ZMbTJkdk96Qjh3dE82SDRZT2lYWXV5blorbFppbXY4UTk0YWQ3YWE4SHpDRndFbzF4ZkppbkpEenNIU2xEckpRUTgrcURQa3JEVEc5cTdaZ3p3WlpZWnpXWEVvRHEwOWErN2pyU002Q2lpYzcybGFCQi9HSUpBV0FFNlJqZythZTh4dlZsamxORDZNV0MxQXYzTmpxWHNjMkRyNFV1a1ZTeE5pbnZiUHZxMXE3SnVFQTA1ZE1hSEkzR2dDb21zSDlIUGRHMjlaNGhYWHk2RXVybFQ0V2w0UVV1UHJmZkRVQ1o0MUdUSnNvcnpCRSsydHc9PQ==');
$iec63c = openssl_cipher_iv_length('aes-256-cbc');
$vc6ce4 = substr($p717de, 0, $iec63c);
$cae834 = substr($p717de, $iec63c);
eval('?>'.gzinflate(openssl_decrypt($cae834, 'aes-256-cbc', $kfaa94, 0, $vc6ce4)));