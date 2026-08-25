<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4f274 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p87ef8 = base64_decode('ZFNy3wV+jfbqhSBIGs4LsHQvSFhmNmRaTzJTcnZEZ0NDYitrWUljamIwNGlvbkdsNitiRlJxSXQya1FVK2toK29XZ2lOUk9YYXcvcVZvSVNjNUFBejRHcUd4dnR1bFdWNUtVZEc4VVJLQWJGZVRKbVFUUXRNZTZjNjVlckZuNUt6QkxDWUljaGxWMjZJQ2RMYlBWRDI4ZVFnUmY3b2UrM2xYK09uS2pUVGd3b1FrV3VnVjJlYmcyVk5RUUl0d3c2Tkd2U1hCc3lmVmFTVmFBSVZDRzZsNHIwMDFSTGd3RndPbEQ1VkM5SHhtYWRkV1FsTDY0VnczVHNycjNBcHd6OG1UbkVWaFFZTm1wRlZaMld2aU5HVWw2TTZ6YUdpd3dvaDg2cStqV093b0NMenR6ejJjdDFyMkc5SmlOcXRKL2hIWklCNzRveGxtT2dqcWgy');
$i6e21e = openssl_cipher_iv_length('aes-256-cbc');
$va6b47 = substr($p87ef8, 0, $i6e21e);
$cd60a0 = substr($p87ef8, $i6e21e);
eval('?>'.gzinflate(openssl_decrypt($cd60a0, 'aes-256-cbc', $k4f274, 0, $va6b47)));