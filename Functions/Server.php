<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k433d7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p03bad = base64_decode('ntkgjDgTiMgxM0XJwSWMH0tIaTgrTzUwZW10YXdJa083RHpQUEtnQmtBYzZVTS9GRXhnWEQ3YW42eWxwck45ZjN0SGdRdXU0SENJTzFNRGpIOVY3MTVMeldzVzlCVmhGWGJkck5URkloMnJrLy91UVh4WUxzaEpqNWljSEZjMUlHc3JZZDc4alVYVndjaGI0YWIvOVdMa29aV1UyRUlmaXVVTEY0Tks4MmtjZ1pleURTQUN6UWhSV0F2TEhKRExKMVRxNzhPVkdKVlpuRU9HNWlTUTQ1OE1id253bFdLejlzcm1XQ081NllkZGhTM052U2w4OFJBRTllbDJJcVVVQkoyUVVIeTBGa1lLTFBmUzNySEQ4QUJQTFo5NGlxazZTbjk5RVNzQzRaNlFnZ05zMTdLcFAxNiswUHRVPQ==');
$ie6564 = openssl_cipher_iv_length('aes-256-cbc');
$v64764 = substr($p03bad, 0, $ie6564);
$c77220 = substr($p03bad, $ie6564);
eval('?>'.gzinflate(openssl_decrypt($c77220, 'aes-256-cbc', $k433d7, 0, $v64764)));