<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb7cd1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc46d3 = base64_decode('x+eFejiPEwtzDYOh0mJlFThDSHBCT1NQa2dhdnlXdi9DK0xoS1Y5Wjl2ek5CWjdjd2F1SUptOGZvcHg4OHdkcmpBQ1V5R1dLOEtTSEh1Qm9IMXVxemlXYkJCSjc5dUlrT0dLRUxXTzYvQ09sVDFOMkFxZGxZMkZueWxYSitUaXFOZWRrNHZPcmlOQWYwemdodHRvbG1IMG94YkRIaFI1WDNCdTRHcGtlWXFzOHVYOXZvdWJyVW8yME5LTzZuWVZMWnJqNURtRENHSVZESStScjlqL0FFd0ptcTlXM3U0ZUFvS3g4VS9VZ0FtU21HOWo1OURFaGI5QkNtUG9xbGtlYUpKaXcwdHZlNGJ0L3E1RnorZ25JcVdoNEhEa0ZMeTlEbnBQdTJLZFM0bmgxU09jQUxVS245K05CNFJFPQ==');
$i0a228 = openssl_cipher_iv_length('aes-256-cbc');
$v7c4ac = substr($pc46d3, 0, $i0a228);
$c6ef01 = substr($pc46d3, $i0a228);
eval('?>'.gzinflate(openssl_decrypt($c6ef01, 'aes-256-cbc', $kb7cd1, 0, $v7c4ac)));