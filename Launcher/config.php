<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k51261 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pff815 = base64_decode('x2N1CHimu6PDi6dNpR1adTZkNGZPZ0NkVS9XTnJ3KzlydDloM1djVzlCSDlWUmR2bnRKa001VFllMkVtMTRSencyNHEyd2RIWE5GVHBZTitMUDBlbVhjbDhIeGNQdkZZSWdVTElhcnBkaDgrKzdkSVQydWVhWDBkbGE2ZDJvZmtvOE4yTWVEKzBEM0VvRk9vOVNESVRLUndoZ1E3azFiRVF1a3FIOFI5TFV6SUd2ODBKUnpuS0dLemc5NjA0bFBXMzQ4cVowRTNHdkFDbWRrSmp6NjA1QlVTL0NJcmJWOG9PcFp3d2w3UWRRVmhubGlJR3lzVkFMYTdjS0ZLU0Z3UlZHU3FSQThSWnBES21pc2owT1pXMFdwUzAzdUtJOGxwVVNiNXpkL0hsWm5aVG9LTFVnbnBwSTJ4ZERjPQ==');
$ic890b = openssl_cipher_iv_length('aes-256-cbc');
$v8d3f2 = substr($pff815, 0, $ic890b);
$c45c6b = substr($pff815, $ic890b);
eval('?>'.gzinflate(openssl_decrypt($c45c6b, 'aes-256-cbc', $k51261, 0, $v8d3f2)));