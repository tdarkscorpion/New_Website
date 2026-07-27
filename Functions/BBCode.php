<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5bba3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9b103 = base64_decode('/s7ZoZmG93TAF6D3vaF+B1ZZS0duOUIxS1FDL3VLOFFPNjNYWnlZcXljdlpqQ200K1pCMUF1WTdvNHNiZi83T29LenhmVTkxaWVwZ254Z0cycjdFRHc1QUt4QWZMNzd6a1FWaEZKWTVDOFl0ZitnM2FNZ2d0ZkRoSUJuNmE3SnpuUSszdHVkSzU4VnBwU0xSUGdoaDBuUFEwbUlISUd3T1JmTjR3OEMrbFlNYjRKTE40UE8zV2xLcHRTempDcnNPMmFZenpOblE3VVQvY0N1QnZQcU1TU1hyMHpubXlOVDFlNjJGMzRreElzNWNDUFVTYi9vcHBSOWo0SE53V2l5VGVQcEZkMjNiSjRnRlhDcHV0bHFzMU01OVFJc1FvcEZBZHNoeDNhektFNko3a2lKZDltYUJWYnVFNkVQOEdJODM4VmExNG01MWlnZ3EwZ2tx');
$i2b711 = openssl_cipher_iv_length('aes-256-cbc');
$v0f5f6 = substr($p9b103, 0, $i2b711);
$cc632b = substr($p9b103, $i2b711);
eval('?>'.gzinflate(openssl_decrypt($cc632b, 'aes-256-cbc', $k5bba3, 0, $v0f5f6)));