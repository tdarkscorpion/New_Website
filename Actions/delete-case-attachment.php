<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf9497 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf576c = base64_decode('GrkI1K/6lC3v0seAxIm0vmxSaXBPM0t6V0lsei8yQk1XM0VoaW1HSW5rY2sxKzRBR1BKenFuMVQwWW8xc0JQdTJXakpIT2tuOFk2SmFsUnI2L0FtRFZ4NE9jdk5abXJabERrVkFnRy84Sm5MMENEUzRYd3p0ZlhiTkExZk9Pc0gzenczSDgrRlROWXM5aTBIYlJ0U2IrV1lyK3pzU3hXU01FSlVZTDliY011UWt3QVVUc0x6MmhyeVp5dDJJVmVtWFhMaEpmblFyejdBNVo2WVhXazRaRE56em1XRldCNFRqRE84M1dnWjM3VEtxZXhQV0F4eFh2RUJoa1JyUERVdWwzOEJVZ2lGWFdHamJZYkxMZlE3bHprdHI3QUNHb3ZUd3VjS1NsRVJLQWJPdS84Q1JGNklDY1o4T0c1RFZHMTF4ZXdCbUFSNjRWNndaT3gv');
$ief8b0 = openssl_cipher_iv_length('aes-256-cbc');
$ve9cb1 = substr($pf576c, 0, $ief8b0);
$cffcfa = substr($pf576c, $ief8b0);
eval('?>'.gzinflate(openssl_decrypt($cffcfa, 'aes-256-cbc', $kf9497, 0, $ve9cb1)));