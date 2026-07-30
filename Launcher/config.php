<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k81edd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a711 = base64_decode('crhMhYrLMC/8d0Sx2K4Rf1Nqa01xOVFXTytaMjdEV1MxT24rOFJJcGozSGxUYTNYaWVvTm1TbEQyUmQrNTFmQ1RPQVVLRkxuazcyWjN2eEVWckQwZ2JXQmpkOWI4dFJ5dDlKb01pRnkrMGhwNHMxV2I2RlNIY0p4Nno1Z2hNRW4zUk9Kdjg0Q3M3MmVyd0xZVCtzaFlHZElHZ3VFUzMyVlY3dmpRc3hFVFhvM01kNVc1dyt2RDBkbGZpU3hOOGxKWGMwbjRLRWxYRFpzMGtTUHA2ajlrWm9OdUo3QjdKRndrY09RaktqV1pkWDhVWkh3ZjhCM3JsTGhpcDU2QjBCY21uT2ZibUFadGVBQkpnOE5iVW5FTkEzMkxkN2I2azlrWEprUlBmUHNqM3RNOVNHN0FVRm9EQ0JoVnVzPQ==');
$i1d159 = openssl_cipher_iv_length('aes-256-cbc');
$v77096 = substr($p5a711, 0, $i1d159);
$ce16fb = substr($p5a711, $i1d159);
eval('?>'.gzinflate(openssl_decrypt($ce16fb, 'aes-256-cbc', $k81edd, 0, $v77096)));