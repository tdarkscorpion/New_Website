<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k54a48 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p59da8 = base64_decode('Iw0IxlVOXfBtzw0dRFy+P3hMNmtCV0ZwcW51RWlBMWVHZHZpb2NYR2lWY0pzZWtwM2lJUVFtbzBDelRGR1ZUdXZKUk9XekpjQ2pDbzJ2SmFNZVRrTm5pbjdRRDdxb2NKT2JNOHNmS1E2RXo2elNLMGpJZ1ZDbFNpK0UyOW15dzRCNkdxWjNZZDNRMGdpWG5ZejgrbjQxeTQ4MzFFZHArWFFRWTlhQWdJVmdWWmhQU20zK1FuaWlxbWE3T3N5ckJrbktzQnl5ME5xQmNJL21EWml2bEFSOCt0M3U5RmRmeGRWa3VmdmtudjBhV21hQ2QwdVdtalJkcFJiVzZUbzZFbnd3Qm51bHdwMG5BNkRwMG45ZkJaY0NWYW5Va2FQc2NoMlFtWHAvb0N1VFZpVHJHdXdISGJNZG0vOGllRU5nVHdUSDVkN0Fqa1d2MkNyU29T');
$i2e0d9 = openssl_cipher_iv_length('aes-256-cbc');
$vcd69d = substr($p59da8, 0, $i2e0d9);
$c3965b = substr($p59da8, $i2e0d9);
eval('?>'.gzinflate(openssl_decrypt($c3965b, 'aes-256-cbc', $k54a48, 0, $vcd69d)));