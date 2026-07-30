<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kde33c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcfe0e = base64_decode('IJr41EakQiEqOX/EfX7yPktCVFBBZjdLOGZ1RXJCTjdTRHVacXJodkFRNWVsbUJEQ3hQK0d3bSs0L01xMTU2WkRWVmQ4Rkg0TTYvVTRrRGFBOGxNYTRTdmdGN05ybVNOK2RuYnZyS3JpZVdPZUNwREpQOXFFdXRPcDl0eUxPaSsxZkp1dW8rQjhlVndhVi9CS1RMMktLWDJMcm1aNEhOZkM5a21KcDN0K3JDS1F4YjlvQ005KzZoSEpvVmwzeG56UnpVNnhwaHFjanRQUUJtQ0FNaUIzMkt3cTI4WE5YMXJ0Zm5BQ1VVK1VYVjVralppMU41RDFXQXV6N214QVU5UEFZaHd1M2tUbzNCYnM1U3lzYUI0ZzE0akNZSUQzTUlYWHdIaXozajNaaUFMWWhKZjYrOW1kcmpHUWFjPQ==');
$i78499 = openssl_cipher_iv_length('aes-256-cbc');
$vf26a6 = substr($pcfe0e, 0, $i78499);
$cf5875 = substr($pcfe0e, $i78499);
eval('?>'.gzinflate(openssl_decrypt($cf5875, 'aes-256-cbc', $kde33c, 0, $vf26a6)));