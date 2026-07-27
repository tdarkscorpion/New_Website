<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc7cfd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa8ebc = base64_decode('qNrcgjlBTf/Up+LOWcM+7G1EczZRKzJtZjJMdld2RnRjaUdBZFlXd2VZM2ZZbHNNUHhpQVRqQWQ2NVN5WllGcnlicVMwWkFEdU53TVkxRm8wWDZSNnkzMjl6ZTBVd3gycUsrYW5TR1pZVXAybEVMZjJSWkhPVlhzZ0dHZW0yYUo0cjVGWlFTWUQycUJ5V1BvcVV0U1FFZE9UVHRVRlJRSkNGYTNaL0NXQTNPdHlqaEZpNVhKU3lqRHMwTWo1YkpDSHJsazhCMlhwU1lIRFRkQ1NvNHRrZmQyR1pxT3RraCt4bmhqbmxTVEJtVFhFOGFzZGV3MVc0R3JDWFQybE9KczdRdUtDTDRObzdMUHlyWHRsM0RsVnpiaVI2ajdYWUxYM1U3ckJXTU9UVyt6cVlYU0lpbExxc1NIbmd3PQ==');
$i75904 = openssl_cipher_iv_length('aes-256-cbc');
$vdcf95 = substr($pa8ebc, 0, $i75904);
$c5be59 = substr($pa8ebc, $i75904);
eval('?>'.gzinflate(openssl_decrypt($c5be59, 'aes-256-cbc', $kc7cfd, 0, $vdcf95)));