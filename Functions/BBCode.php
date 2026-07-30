<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k97328 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p318c4 = base64_decode('L1ya6CxdLkp0uhpocbwBDU1FNHkyTi9VcFh6R2RaQjNpZ3lsL0JQYzFnQkx2OHpXWFpGTm0yRzlnR0hubDRKTllCS1E1dDZjWnNMelV1R2xyNnJiTXkyQmNrZ2x4em1JdEptR1A0UXFtMVFoSThBMXgvd0dvZjJSTDFyaFJBQVc2S0hYdFdXWEVTazlraTE1NlRMUkRlL2dvbnU3anBycklwSEpjVXN0ajdsY0NuYm1UN1pEdlNKc3hLdjVBWjNoc3B1MUNvblJqcE1vc3JGMG9XOEd4UkxPQjY4UHdXTWo1eXlNdWttRXZJNTE3cFdHNEN2eHIyOFZwWm1VRHdzRmc2bkxOZ2o3Y0kxQUNXS2NKaGtINGFvb3FJQjkrVmphK2lFZ05tQ3p0Tlk0K0Rxd3FIYmVDcGl5WlhUa05wdUFiRldpZXdralBJK2dLNk5I');
$icb482 = openssl_cipher_iv_length('aes-256-cbc');
$vce0f2 = substr($p318c4, 0, $icb482);
$c56903 = substr($p318c4, $icb482);
eval('?>'.gzinflate(openssl_decrypt($c56903, 'aes-256-cbc', $k97328, 0, $vce0f2)));