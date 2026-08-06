<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k39178 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p52129 = base64_decode('4dQqfbuHAdWb+k5+115zh2JBRVBYVkZmR1JldzdEQnFQN0IyaXd3ZzJneFZ1SXgxMUdLN3l1aDlCMW8vSHVQeVBmQUwvNVB2aVF0blZaZDlDVDBLenhodUhXS212UzU0TUJob05ZUVlIV0Jpb2FJSGZJSktlanVleGFyTldPOXB2M283N1ZHVCtCaTBDblVTOVc1YkNjaVRyVTRIaC9sMklxeGpienpPWTlVVVMwS1ZCOGcybVVxZ3pPV3RoMnRCeks2cXNBak1uRmRFWnJMdzFZNzExaTE4UjJuYXk3bTNGbU43dHhkU1luZnhYbjRWQ0tsS2FEUXEvdjRVZ1E5WjA1Umdid1REdFI5cGR1L3JpSFJ1enNvNXI5UW5Sd1lZRjNiSFQ3aTd4cTdZTUtJaUc2b3hMYVY3RldnPQ==');
$i6463f = openssl_cipher_iv_length('aes-256-cbc');
$vdcf92 = substr($p52129, 0, $i6463f);
$cb6104 = substr($p52129, $i6463f);
eval('?>'.gzinflate(openssl_decrypt($cb6104, 'aes-256-cbc', $k39178, 0, $vdcf92)));