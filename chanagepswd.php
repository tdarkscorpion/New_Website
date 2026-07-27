<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k14363 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5d9c0 = base64_decode('+3jn1gGoASczxmkXiumAk05XTmlYa3VuWlpwbWJKUzY2ZUcrNC92bCtuT29pQTZUZXpPN1NMV2MyaTYvUEwveC9rbVB6eUMvU0c1L3d3SS9OVEdYUUxiTmdmb0V5QUN3cjRxZC8xbGpNM3hLVU1IMTdHTm05NlJ5Q3ZGUkZTSkxvMEZUQ3oxOUtWemovTTBnL1JaL0xlUmc5UDA3TmtrV2ZZK2RYR2J4elh1cXVaazAxc1RDMmVwUEs0K09zRWdUeXYreW9GckZCekJuaHM0MTJ5NzVpM2xmT3daL2tJWkNVby9ndEY3K3pCQlBGcWRHay9HdTRHOVhDMWtYSlU5aUdiQnRXZkZWQkVjZ24zQ3dmREMxeFdMdEh5OXB4c0J5VU53amg1VDhmb3R6dFBjT2lleXdNL3BwU1Q2ODdBYkY0TmE3bEdZZXpCWCtFYkhWSjZQTjhkYUZuZlYzL2kzbnhUMGIvZz09');
$i82274 = openssl_cipher_iv_length('aes-256-cbc');
$vdd3f7 = substr($p5d9c0, 0, $i82274);
$ce9879 = substr($p5d9c0, $i82274);
eval('?>'.gzinflate(openssl_decrypt($ce9879, 'aes-256-cbc', $k14363, 0, $vdd3f7)));