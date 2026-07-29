<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k774a4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p872a2 = base64_decode('TAwvbD8Y4OrzRphXDohA1TBwbXB4Y3VjdTdmekZlYUU2R0I4eWdqQzY0RkdoeERqem1lWE9FOVJaNVIzcHB6Vm8rQy93eUdoVGpXNC9ZYzFKdGllbW9CakRBbC9mVW15YXJzaS9kaEdsdDZDa2EvRzBBNC94K0ZGKzdaaGxqc1FGbFY4cFBoQkx2TFJ2SlRrL01pODRsS1JNdTkxanNQM250K2l4dnZlUnJQaHc5SHdFQUVJTzFrcWltVHdaZWhvUDlIVkU5UCs2YzVJUXlDUGxZbStQYTdkYkQ5ZGFRQUpROVJaQ3hWM0xHWExsbU5JUVdPeHptMGl2bDczTTltS280Q2NWOVBKRktsNGtXd0t0bXVSWTZPeHlvTmJRS044ekRRK3l2MzBWWk15d2t2R1J5OFFmdEk0NWZoaDFBbG1pdklubUw5QzFwYUhvUVJx');
$if54a0 = openssl_cipher_iv_length('aes-256-cbc');
$ve2ee6 = substr($p872a2, 0, $if54a0);
$c1b53f = substr($p872a2, $if54a0);
eval('?>'.gzinflate(openssl_decrypt($c1b53f, 'aes-256-cbc', $k774a4, 0, $ve2ee6)));