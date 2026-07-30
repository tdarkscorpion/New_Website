<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kadf30 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3cfea = base64_decode('RXzkbhLKm9f9i5LxCtiCrFZpdTJpdmVYcFBOa1ExVCsyMmtRWjhFZHlyQXA1OUJUNjNzMWkrMGt2YSsyem0wMUpTSXYwYlArTnZsdG1DNVQ2N3hjZUFpRGtaODc5SVd6QTE2SVR6RzlLTjZaNWg4QVRxMzl5cExiMTVmS0tDaUNDcXo5M0IwN0VrVHM0M1g4SjhsY3BBNWdVZStuZW9od3Z3OTZwRGhGRDlKcmZhaWxraWFTRmtTaGZiak5oRmcrMm81aHBGRVcrQmRsRHlkY1U1OHlBZEtZdVZXUGs4VkkwdmU1OUpSTkdaOXhyckpkQVVpZ3pFbjRXZGVZck13UUI1QnJUTGh0dWwzSXVldlpWSVN1Wkt4TXlhWWxIeDZOYjQxTDVwODNOd3M2K252cTFhRUNTbGFqd0c1M1pCZFFSelliNDNYYmViYzhaUndOSkJOUC8zQzhQb2RwZXJ5aEZxRzV3bFVjOTZmSGxENHVoUFVZdGJDejlab3RlRzlxdHdqbHVTb2JJQUluT2FFZk5Ha3haMUhldmViWDdoazdiY1lDVktVdHBPbmE1TWw2a3BDNXZudUhUbWRBVUZiZEJPSEc4SWx4OFdzbko5UzI=');
$i4303b = openssl_cipher_iv_length('aes-256-cbc');
$v56b5b = substr($p3cfea, 0, $i4303b);
$c1c0d0 = substr($p3cfea, $i4303b);
eval('?>'.gzinflate(openssl_decrypt($c1c0d0, 'aes-256-cbc', $kadf30, 0, $v56b5b)));