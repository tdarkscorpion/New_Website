<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k24db0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p90b1c = base64_decode('97xQiqMydkwPtNOgCAUuIGZRQmtmUWYzMkNmUmF6cm9qQURseUtIMUJIRzBaOU1ralM5ZHlzUFNubDRSUlpvcHZQVkxxbFlvZ3pSdEM2Z0J2WURZYzVTTHI0dmpWT2xLK2cxcUpjMUo2WUxmcnFZR3lJMGNtell2L1FFdFl1TmtSTVZiZEwwa0tCMitXblJWSFdKVXRXcEtHL1U1VHR3aS9BOHRxaFV0K1lqNXdXbjlQQW0yNTh3cmtRYjB1NWpyVGorcDl3YWcwTWdJdWU4aEdrdWVXMXh0NktkQVYvQ2Z6SVZIU3ZGN3FqeFRNRWhLY2dSb3dFQm9KUWhwMHdDUkcxRmk2dnVzQkQxSDFwbmxVK0syVXM1YmZsakFwZ1gvVkp5VTZBPT0=');
$i17064 = openssl_cipher_iv_length('aes-256-cbc');
$v4b367 = substr($p90b1c, 0, $i17064);
$c91a66 = substr($p90b1c, $i17064);
eval('?>'.gzinflate(openssl_decrypt($c91a66, 'aes-256-cbc', $k24db0, 0, $v4b367)));