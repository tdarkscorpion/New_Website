<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc0041 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7089e = base64_decode('5FDhpMxoEE9qyLYu+vysA3RmZE93ZkZsU0l0b21GcU5yTkxSWGpRdmZyQ2k1Q3V6RDdzdGxBRjZOa0c5RS9EVndxSlhyRVhwaGhVTkRVQVNMVUZtYkMzNWpFVDBzSU9UczRyZWdnVkJvTjhoZTh6ei9IeDBJQWozRDlnY1JPZGl1eFhCNS9VeDExMmhMSWQrN0F2cjdpTTlQOGEybUw5MG0vL2dieXFqKzZaU3luM3drNTh0cmwvSkVzMjl3d1ZINTRUR0lacWQvSlVVVHEyNUlzazhPVnFCSklmbCtXeDJ1ZDJkMEowTFdkQ0dEeDRVbGlQYng1RTcyTWhoc0dScTF0WVlDT2daTTM0azNTMWdIRmtLUnc4NnFBOXkyZTRWSE1uMHlmbU01NUw0c0RUSlB0ajY2NlhueVVudWZMQlR5OVFoV2IxR1BNclMvOGlKSU1yRFJjSkV6MkYzSkQ2bGlUaWtKOE9jMnhSWlBpKzExTndob2tiQWhIdnl4Q2FJQnlObDhINjIya1lVQVcwM1k5RGtaNFJnRS85NGpXZmJ0ZnYyM0xubVlCaTdQcEVPT0tRMFVyYnBrRkRmYnJtMzFEYzRtdzZmejJXMUVnU3ZMMWdXNVBZRHhZdzFMc0dGc2wyaEJnPT0=');
$i148b6 = openssl_cipher_iv_length('aes-256-cbc');
$vcd1f4 = substr($p7089e, 0, $i148b6);
$c0faff = substr($p7089e, $i148b6);
eval('?>'.gzinflate(openssl_decrypt($c0faff, 'aes-256-cbc', $kc0041, 0, $vcd1f4)));