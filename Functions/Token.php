<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9306e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p10e44 = base64_decode('MI6lMP8RH138dTdTnqInnnIvek44M3VkSm9pMnFEcWE5Umo1RHhhWVAyaiswUFJXQnJkYjZTZS92M09RUm1mUnZaTkJCN3lDNDhMRmZrT0dPYUpDVGVKWDYxTGcxbEpDaFRNZzRJS3paUVBuUy9qNGE4U2FRTUFGUkgwbC9Gb28zbHlGaFZIWEx0ZDRiOEZDTGhqUkJ0NzRRNjR1cVVoeDlmOU9JMm04cHVDbE1SV0RybEFlTVZyQ1F2MVZEaEYrV0toYjFRSzB4Y2hnN2RzZVRveGlObkQ5YkszSXllb1I2ciszekZmQkhLWGw4VGhQcGszNFFZRUpud1lKMUEzcEtQN3VxRGZOUEVtV0xLV0E=');
$i366b2 = openssl_cipher_iv_length('aes-256-cbc');
$vb865a = substr($p10e44, 0, $i366b2);
$c19f35 = substr($p10e44, $i366b2);
eval('?>'.gzinflate(openssl_decrypt($c19f35, 'aes-256-cbc', $k9306e, 0, $vb865a)));