<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0fe2e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p53e0f = base64_decode('99oLGi6dqht5Rmmx1Nqc83RFemtsMlpsczBSMEtzcGQrQitWaDExSndmVkw1WVhnS01xRXlBZHZDdDlOT0dWejY4SUhxeFNmdjNSN3d1R21GZTNibzJaeXhNeWlZMDNHTHFEZDMwK0JLMDk1bU1LVUxCZkNkaHMvSExwTTBxWGpZcmUwMFVlV0kzZ1J5OHl3cnhscmx2cElINitHZ0k0eFNCTUkvM1RJaG5ESlh1dUxxaXNxZ2FVSDJPSDk4OXk0NHZpREJYcytjSGQ4NURPZUpmUHpQNmJNYkdxVzE2WjVsM002WWJsYjVEeW5WTjB6M0dJVnlaUnp4MG5ScXVRU3lyNm9iT0drNDBWYUlWNTBuWVFyNFJkamZjeEdvYmlkK0RLeXRkMGRCN0hqS1ZUL3FhQ3F2M3JnQnpRT0g5dW1tVGFzYVErblljV2NQbTRD');
$i13856 = openssl_cipher_iv_length('aes-256-cbc');
$vd5122 = substr($p53e0f, 0, $i13856);
$cf0bd3 = substr($p53e0f, $i13856);
eval('?>'.gzinflate(openssl_decrypt($cf0bd3, 'aes-256-cbc', $k0fe2e, 0, $vd5122)));