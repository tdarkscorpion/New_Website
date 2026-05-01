<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9d6ea = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p694d4 = base64_decode('ls79+KFddpdYuyGj7DUN7zRQSjc1cTVXV2oxOW1Sc3ozcHhCRTMxaS85NXpvWUhSY2VRYkg2bURjSnNxeTNwRmRCeXdFbGxrazlNUDBZWnQvREl6bzJBRlVzaEtod0x1U01IcjJCYlZ0VDJ2Z0hYbWFJM2UybTM5MzFZdWNHNFYwc0RLOVZwSWNmbWdlZjh0c2RZMUJuZEt5VXhOanJ6SWJlajNPM2FCMGt2SnlLRzZJRHRJR2dVU1EyTXNrcjZPL2dlVS80bEd4OU1ldUt3MlYrRUZpZ29XREVEUXVwNjg1OWl5Tnc9PQ==');
$iefb74 = openssl_cipher_iv_length('aes-256-cbc');
$v0ba4e = substr($p694d4, 0, $iefb74);
$cc980a = substr($p694d4, $iefb74);
eval('?>'.gzinflate(openssl_decrypt($cc980a, 'aes-256-cbc', $k9d6ea, 0, $v0ba4e)));