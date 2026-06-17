<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2283c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcb79c = base64_decode('XKIIFQXC5pfPE32VKq8dR0JRckhPL2dOZVRsNzY5Qk0xb2JhT0RqUHgwVU56Ti91ZlU5TFFjM2YrbjJYZHUrbTFoWWJ2LzY1ME1PV2xmaW1vWTd6cW5wWWI1M0pGVlBsOGpQc2svYkk0c2NnMU1oMnpnWS8wd2RmVkl1aWdibmJDYjQwVkFjdlhIWVE3V0JaVERVV0JjOExmYkx6dm5zVzRYbE04dTZ3TVVYSjR1MFJRa3VGVHp3MGxUZ2FDaGpBOFFrcFNLNXcwK3luTlU1cTRzSWp3WUl0QmJPZjlyWmR1ZDFlRitVUGlDTmdUVmUraHZzVkFmZldwL04xa3NuaDdleVowYlBwWWdDMjRMUDhtelRPdVhSZnR5T2FvZFg2RVl6N2I5a2tOZEtWaFhQaVhVNVo2aytSeHFQTXVkYmkwSlhIU01GTTlpR2xUZjB5ZEhHa25mR3pyandocjkvaHJCazlpZE0xRjFVOU4zNzFoT0tjRmJXdjZLTUZJQXlxWEUrOS9UOWFGZklFeDczaGUxend1aEtPc3c2TjdZZlhlY3VJQXc9PQ==');
$i37a21 = openssl_cipher_iv_length('aes-256-cbc');
$v7a136 = substr($pcb79c, 0, $i37a21);
$c73899 = substr($pcb79c, $i37a21);
eval('?>'.gzinflate(openssl_decrypt($c73899, 'aes-256-cbc', $k2283c, 0, $v7a136)));