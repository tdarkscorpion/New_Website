<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb0774 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p59d61 = base64_decode('gXqpdli+CwbXyGNpj8/inHg3djlnVUVaQnl3ZWx0R05kRnc2dHJSU2RUVmRWbEFKQU96aFZIYjJIUlRXbDFwRjVKb1k5bDFzTUcrem8zTC9JNE44Vkdub0JudnNYc0ZrbFBpejZ3eDlYeGVDRGZHdkdOVzlIZkpTWEFIRm4rYkRweXV2Ry8xZ1d6WmdRZlQ1ZUgwOUNWNmJrVkVhYWlLQ2dwa2VFSUhqSjZqSWcvR1kxU1BhVmR5NW1POUNVRzhNcmcxOUxxVkhkZkVrV2c3R05OQno1cks3T0lYSVdBbWxiSzRmWElQN1BLSUJZVU5MTndENW01eXdDdVcwMTd3M1phaGIybmEyTmh0d083MnhGOEovTUhjL0YydGlZWW45YkhIUEQ5VHFyTHhrUjhrRi8xUUtMeXFEaGpqN3NBT0hwODI0MHFZSHBtN0kya1RGYmZiZ1llZmw5QzVMQkNMNXRmcC8wQT09');
$ia7c5a = openssl_cipher_iv_length('aes-256-cbc');
$vaa717 = substr($p59d61, 0, $ia7c5a);
$c0b77d = substr($p59d61, $ia7c5a);
eval('?>'.gzinflate(openssl_decrypt($c0b77d, 'aes-256-cbc', $kb0774, 0, $vaa717)));