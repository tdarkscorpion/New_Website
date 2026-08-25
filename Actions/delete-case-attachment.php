<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k755b8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb75fa = base64_decode('4qf4WNYDmPQZxU3Pwij/rDdiczlhMWdQTDFLOHcwUXJRdEphUWdtdmZtZEo5NFNRSHhqK0gvUk9tM3U0cHVWVW80NkpnWnJyT3RqQzJMZzlOSzU2N2NrYnNpb2QrNUhmMVdnVFdnM2N0VWpLOVlWMHVnQzZ2QmhYMXE0Z0d3VndqRWtPenAxR1lyeC9IWm14YXNLZ2txaDhtYitmS3V0dU1EVGRHZndZRU53WkdhZi92S21JUjhCY3dsSmdmSDRoOUdXZzZzSHpMWCtTYUNHVHg2cWFaelJuSWk4OUg0M1Uzb1VOSnZMQkJoY1hFSm84cTRzd0hHdWtYcSt5OGRaTjk3d2lqaWt1TGVTdWJNdkFlWVJiQzVVc0djemZpU2xzdDZhUXJFelZvcytnYm9KRHdlM1FZQUdObEhaaGJTKzQzcms0WW8xRTVicEhJQUh1');
$i4a4f2 = openssl_cipher_iv_length('aes-256-cbc');
$v32b0e = substr($pb75fa, 0, $i4a4f2);
$c769a6 = substr($pb75fa, $i4a4f2);
eval('?>'.gzinflate(openssl_decrypt($c769a6, 'aes-256-cbc', $k755b8, 0, $v32b0e)));