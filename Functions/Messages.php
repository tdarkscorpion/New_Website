<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1ad7e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4c4e8 = base64_decode('mNlqeXPk4mjSEy3YbUfgEkVyOVN2T3pDSTRGNDBlRXFmRXM4WWNXR1htOXp3dzNwYjVKclB1WlFJZkFXSE5VWDI3WmFGbE8zYUtlM055Z0U2dmVUNmxrYXRMUnBPNGhIZE5YUlI4L0hxUWRaOENacDJDenZtT0x6YzdRN0FxUHdMOFJsMDVwRUZlTWJ0U0E0TGdDTngxZEFJVXV4M3RTbHFiazBkWTU0TEc0ZHRRd0dmVmZtb0dMMDN1U2I5ZGkrbzZ5bm5QSTFQL05KRGo3TkR6WXIxcnh6WXJGZG1VVXhCQWZ4MnNhZ29WSy8xc2VzazlTOW9kczVhOGRPQm5aWTJ6bGtxMDJTbFc0dXcxMjgxUG9YbWE1MWNTb0hjY3V3cmNwOEVMNUJHY0pGd1NqM1Qvam91SjVhWVcwPQ==');
$i7b9de = openssl_cipher_iv_length('aes-256-cbc');
$v89e5f = substr($p4c4e8, 0, $i7b9de);
$c164a3 = substr($p4c4e8, $i7b9de);
eval('?>'.gzinflate(openssl_decrypt($c164a3, 'aes-256-cbc', $k1ad7e, 0, $v89e5f)));