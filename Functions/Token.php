<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka7620 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4df56 = base64_decode('tez0EknVFRVtKCYDZzbvqXFEL09zTnEzcUpXZFFTY0pyMHpuRllXaXdGYUtiMjREQXpld2lDejhUdWdBZEVFV0RRU2lNcm81aTlEV21CY1Q2YWVTUktBTXZjVC83cnoyd0YyY3JHZitQQmMvY0U1MDlPcjNWSk9sK3lXTSswREhNWTV0OHZOOTVsTk9rbzJDMW5LejlaZmJhUGVrYTBsbmZhODRSanBYSDhkNFFaaU1TNzA4ZFhQMEloZWcxcWhOSVRpUVZBcC96cVFCTi9Cdmp1VVZUVDdEZDJOeTZjOE0vY0M5R29Vb29RbUV5VmtQUHZXei8rSGVtNzh2ZnB0T1ZHSTNYQnZKdm9rUU5WSWw=');
$i78285 = openssl_cipher_iv_length('aes-256-cbc');
$vb008a = substr($p4df56, 0, $i78285);
$c08011 = substr($p4df56, $i78285);
eval('?>'.gzinflate(openssl_decrypt($c08011, 'aes-256-cbc', $ka7620, 0, $vb008a)));