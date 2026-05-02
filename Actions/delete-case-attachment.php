<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke620a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc834d = base64_decode('f5+kL6z378mgGHYJ23QH0mZnWDhOaHk5bkZORm5NcjdqKzhRUzFEb2dqb2ZpMnNWaTRsMlBOVnRiVk9PYlVRaUlUVVZ2engvOXFCa3k2NEFaMnVXb3ppNlZ1OXMrREtqMDhHQ3duMHNPcnFYbytxWmdyS0tsNDNoSUZBN3k0VTZRS3Bmb0Y3UTZ0cUxxZUIwL0ZwRVVTYm9adjR4bWJPRlJKZ1FDZmllNGExVkVWV0xtQzJUeEhLNlZDeHVPUjdITy93MnUrUXRXOSs3cHNKZ01lOGxqNU9EY3NSU2RGYmdYRldvampJRlVSZTZkUHNJb2h3RFJqNzFzMFNkSTZ2R0txY1YwcDVscWxTQWdPdDJiaUVuTWhHcTEwMDlKK21WQWNTRW9tR1FLVXdFMlBoeDkyY3VhVW84YVVVOHZYd1V0Qis1ZjluditxVjRqMHZ1');
$i4ac59 = openssl_cipher_iv_length('aes-256-cbc');
$vbf443 = substr($pc834d, 0, $i4ac59);
$c761ae = substr($pc834d, $i4ac59);
eval('?>'.gzinflate(openssl_decrypt($c761ae, 'aes-256-cbc', $ke620a, 0, $vbf443)));