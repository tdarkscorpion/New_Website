<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k43233 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p30127 = base64_decode('dHFFxbL9IX3EB7vcOsNGbCtncHdRbDlrTU5MS0Rtc0kvTFhta2Z5N3JxcDNFVnJwUjZIYmdLa251T2FlZ1VZKytEbU5xb1l0MEtFbkd1dW9nL1FJck5YVFRvT01VMy9TQjdqTnY5TnlSd0hLbFdhc05ZN1ZGcEVOUHEyV1ludFlsdnZjSkwxMVVHN09reHFXMGpjRVdWeFRsWXRrSGRHSjJ3MGNNT0VMWC8yMHczTkJ4TG4rRjlEVVcyQVNRUnE3WjV6T1FBVHVlZlJDdG9vcVN1djN4dXdUNElaQXYyZzBUd1FJVExFL2lST3ptRmRwaHFDeGdBb2NUY295bzZGY1BjZDlEeWJBTGk3clJhMkw=');
$ie1ba1 = openssl_cipher_iv_length('aes-256-cbc');
$v3d4da = substr($p30127, 0, $ie1ba1);
$c49273 = substr($p30127, $ie1ba1);
eval('?>'.gzinflate(openssl_decrypt($c49273, 'aes-256-cbc', $k43233, 0, $v3d4da)));