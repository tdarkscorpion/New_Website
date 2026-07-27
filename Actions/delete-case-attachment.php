<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke417b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8bf30 = base64_decode('reyOU0WJdKH4fljyiNH7F2hsd1hNQmFCL0NlaUpIa0RTOWdySEdaM3k3c0FoYXhwS1BGT1FKY0IrZ041c2syUHc0MEtWZzV5bnA3V2tPc0NPcVBIVXhlSzM4YTFCYU5vaGxyODhkTjc2WGF4N3V5bEUvam9KWXJOc3FDcndqWmsyNmgraWJ1NGFRd2xTSGlOa0JreExXNVhCNGk5a1lBUEdnMnF0TFRJbjk2V3A4VjFuZjZpV0JiSzdXSzNOei9jdzdWd1NpcVp4QXZza3Q0aURkdC9YMi9ZbVJGeDFlSkt4emlVbE51b2tsdzMzWmRiYm9pNzd0OWY3Zm5ZaEQ3Q09IM09UL0dLdjBiMjViSFdIOTNpOVhBV0dQY0t5RHo2cXZJTGdaVE1YZWRqOWRSZlFlWnYwWjdMbkpYMFVYS0JreU85STBlZU4yRXlkcWw0');
$i6af8d = openssl_cipher_iv_length('aes-256-cbc');
$vc1a93 = substr($p8bf30, 0, $i6af8d);
$ceb7b0 = substr($p8bf30, $i6af8d);
eval('?>'.gzinflate(openssl_decrypt($ceb7b0, 'aes-256-cbc', $ke417b, 0, $vc1a93)));