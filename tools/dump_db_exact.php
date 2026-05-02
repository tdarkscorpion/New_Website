<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfc8ef = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p46a77 = base64_decode('iV5cx7CRbhC1ynt0RfE+2DBlZWlSTUtyQ09NVHFDZUM5SzFpem5MamRjVUoxMk1tTUo4R1hFMW9JQVA0RllFM0cwZkNCVWw4ZlhjVENEV3doWDRXQURPckZJU01FQ0ZKQzJTOStKWkFNc25IMmZsN3NaUzU0UkhQVU1iVWc1dHdnQzZnSGw5dHhyNStmNUtQNnlvRHJVYVJHamNOSWxkZzVGVnNKQk1yY3hsTHRJMFFTaFJVU082L0JXSm5YRnJYT3hTM05MMVVnN0NuSGNqbW80RTVzb21DUWd5QXlVYzlMSlM0dnlOcEJqdDVmbHpvZ1Bkam9DNkNGSVV5NmdxMjZsaURubXoxZk9sQzdWcHB1NFVlSHQwSWpvdjc2djhhQ3NwZGg5Wnl4Nnhkc1FuSlVQMVQxRk9iUnQwPQ==');
$iae98f = openssl_cipher_iv_length('aes-256-cbc');
$v75ea6 = substr($p46a77, 0, $iae98f);
$cc595b = substr($p46a77, $iae98f);
eval('?>'.gzinflate(openssl_decrypt($cc595b, 'aes-256-cbc', $kfc8ef, 0, $v75ea6)));