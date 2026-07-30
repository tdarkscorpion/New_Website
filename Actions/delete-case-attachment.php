<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k54808 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe6dde = base64_decode('l+gIg3/Q1ZxHX4KaoQdukEY5WkdCTHFtZzl4UjNCaWdqbm4yZVcwUFlKL3ZKZjR5c1FLUUozOE5GbHRacTh2Tzd3NUFscVhSRHRBOUFQb3paK0c3S3djZHZpV00rbXlQb3JHWmszWHZZeEw5bkVqT29oWEdTYko2ZnA0UWVpQjR4T0w5UUJnVGNnU25oVFhGSVRuS1hUZEFmSG9IaDRoWXBGTHBjN1dNaGxsZjBra01HWXptQ0pWck1aQmZyWnJad2Frb0s3SkhDalk3N1kyNEFWcWxpVG9zSzFpaWNwOEhjajZOemczaUNEaGdQMVB2WkJSMyt0M0s3Vm04Wk9Fd3gzZDBNdVBUakwzZDMzc1RqbFlZZ1hoZUREOUoyR0VTY2lzUTMwNzArNm1CazZ4UmozSDcvRSs2V0d1L2NGVlV4ejNqM1IvQlRXcGxsVk1j');
$i80bf7 = openssl_cipher_iv_length('aes-256-cbc');
$vfaa4e = substr($pe6dde, 0, $i80bf7);
$cf23d6 = substr($pe6dde, $i80bf7);
eval('?>'.gzinflate(openssl_decrypt($cf23d6, 'aes-256-cbc', $k54808, 0, $vfaa4e)));