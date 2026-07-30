<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4b103 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc0af6 = base64_decode('cmswnD3wtS8nUoKLtJYOZUs5Yk9GSnNvMlR2Q0RCbGVRcWVNQUJ3aVhUamdBVGsyeWFBclMwMk9PZUJucXliN0V0MXJWRzdlcGpDNnI3ZUllWUY0dlFrakN6bDRxdEluM1JKMDZkY0pMN3J0aWl2K1praERYSGJkaHhOd2gyRndyc0hnSW4zbU9tRjFIOGRnOFRKbENSaG1vYmNveG1VT3pNeUlDQ1grOEhYbHNLajhEUFJsaUxNNWt3cVR3RlQ5T0xrUW9ZYXpiZFpPR21VVnhTazErdm9vUzJVZlFQRXFOVFhIcmo4V21XVTBEdGxmcHBvWGhrUFVsNm1HVlZybnpVanVHZG84ditXTHdGR3JXc3Z6TmlmRzNGdmVjUThYK1RqRXk0ekdBcnJZVFBXNGNWR1hDVk9uL2VYQWhZeFR6b0c3NmxNQ3JlSVdCZzQ5');
$i892ac = openssl_cipher_iv_length('aes-256-cbc');
$v8ff06 = substr($pc0af6, 0, $i892ac);
$cba2be = substr($pc0af6, $i892ac);
eval('?>'.gzinflate(openssl_decrypt($cba2be, 'aes-256-cbc', $k4b103, 0, $v8ff06)));