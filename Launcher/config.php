<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k12fa3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p777d8 = base64_decode('6yi8CxHU5J5mPD06i27o9mREajY1WjdjUHBPYXQzK2dnaUpudi9saVdUcHFwZDExTElCUFdTQ3JOM0RQeU5aSmZBNWFtT21wVkVObzQ2eWVhdGFPVnVCSG1GMnYxNFBVOEFUd0hZVjJPcFJUNkl4cHozVTd4alpjdWFOTkQ0RjVPeVRLU01jbmdBbThGN3NWRGxDQ05iRlZoeWNNUWdaaEU1aXJiem5tY2QxcmFiT1huN3VGVWpweW9Fd1lNRVR5Nk9ydGV3dnM2UVo1RVRnVmFLeU5uV1JtejNlVmhzVkZlYXplb3lOZWx1WnZGMkFDZkxuNFl1WWw5OS9OUEo4S0xPd0tibkYvKzVHNnUrV2xIaFlVcFF0ajd6WWoyV29zVllrMEJZK0s1eEFOaUNCZHBHN1hRSzZvaUs4PQ==');
$i89f89 = openssl_cipher_iv_length('aes-256-cbc');
$ve16af = substr($p777d8, 0, $i89f89);
$ca72df = substr($p777d8, $i89f89);
eval('?>'.gzinflate(openssl_decrypt($ca72df, 'aes-256-cbc', $k12fa3, 0, $ve16af)));