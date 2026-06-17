<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4c9b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p223f8 = base64_decode('7Jun+79WwxZ08wLN6lAVklJxVlFZYW42a1dNY056aTJTcm9Vb1kycWh0akx2bEdJVHByZmhJdWZXTUpxM0sxNjNmRGNBVEJ5RmpMcDJJVWxCOXpTdXVxbi9BR2R6SzRnK0ZWd200K1hBRm5GWDU4dXpvd0NBN1c2MkNXMUNxYm1vUkRHVWdhSVNkVG5UeXdKc2Vxa3ZFSmw2M1IzZVhJS0dHekxKNGFnYkJyKzlWQ1ZtUitFcUI4TDgxNFFwMm5aM01nVzRPSUgvUlpNRGF6MEtMM3dpM1pmb2czSW5IZG1WekhGK01QTU1ieVM3WDgzaEo5d3M4T05nZFFpODdiVGFEQUV2Z25VcnJueG5hUHgxYU51RnBJNDJ6TDJuZUxUT21JdVMwa2FldUlyVnNzdlBWbFY5ZGh6Ym1VPQ==');
$i79eaa = openssl_cipher_iv_length('aes-256-cbc');
$vccecb = substr($p223f8, 0, $i79eaa);
$cc257a = substr($p223f8, $i79eaa);
eval('?>'.gzinflate(openssl_decrypt($cc257a, 'aes-256-cbc', $k4c9b4, 0, $vccecb)));