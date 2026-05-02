<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k59491 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8cdd8 = base64_decode('vzx8soLI6dZWM/gkr2cbW2R0RFJ6Q2VIM2w0VGZIOEQwc2VtakUrSStEY1FiSXVJUVM5T3Uyek5teGZiVEd3bldaNjl1Yld2NWpEbXRLaGplWExmTGtsTTRBeTEycGhYbzdScTFWRGQrMjc5WEdLaENubDM2VXVRd1dxUXl5UXFMN0ZIS3pRSnhHWE1sY0hwM29Tb2dZK3l5S0RKTlozTm5tdHhaQm1GYS9wcWVRWkkwTWtPTXNTM1BKWkowUEpiUG8yUlUrbTY4ek1YQUMzMzdVMFgrcFN4L2k5QXBJa0pnSU5rS1h4NGdFcko4S2oraUNidzVRNTZuY1E4UXQ3TmVXYzdub08wcFY5TEVsdmMyamVpUXZjVm9iMzYwU1NBOFM5SE9pQk5jdUdMa1hXTkNkc2E2ZGF3ZStxQW5NK2hCaXFkVHE0UXZlbHpuVHB1VEVwY3NTemFzZXYwNG1Jc1BNb0tyQmxDV1JKbkdsWkdnc0NsTTZEQllpcE9UeUtKS25ITzJrUnI4TThWekF1WkYvdGl0NUllNUlXVnZudW5SYjZ1YVE9PQ==');
$i53f12 = openssl_cipher_iv_length('aes-256-cbc');
$vd17bf = substr($p8cdd8, 0, $i53f12);
$c2aefd = substr($p8cdd8, $i53f12);
eval('?>'.gzinflate(openssl_decrypt($c2aefd, 'aes-256-cbc', $k59491, 0, $vd17bf)));