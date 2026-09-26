<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcdeb5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p44898 = base64_decode('Edt7pBC4eBeewE/5+VtNky9HUzM2NVMxeEdTUzBhNWV5dzIzdWRUQUVmdlhGUkx5dmFGYWpRN3BiNUtXdjdncG5QZHJpTXNzWFplb0x0blB4TmRXeU14bjVrSGFjUVFXOHhmNnBFaG9FTmlZVFFVWXh0TUJsaGhNTEhWdFVTdFVJbnZYNVFOUjc1SkpqcGtVSkpaL2tNdjRjeHhZcWFkOTZreWhIYno4aGVCamtxTGRMQzJ0RThkSHI0RHdQUU1xcXkwdnllcmxTcU1UNVhreERYTmhUcnFRUlA3M1J3MHBhUVBMejNFR2dweUFwOUo3ZUxlS0hFQ25DeThUWFhnVWExSUE3TVpnUGd0S1RmZzRBaWlvWitSSjhFbjhlVFMwdTYyalNuSWNTei9sV2hGUUViYXJPN3N6RGFNPQ==');
$i02d0a = openssl_cipher_iv_length('aes-256-cbc');
$ve3a61 = substr($p44898, 0, $i02d0a);
$c0ffb2 = substr($p44898, $i02d0a);
eval('?>'.gzinflate(openssl_decrypt($c0ffb2, 'aes-256-cbc', $kcdeb5, 0, $ve3a61)));