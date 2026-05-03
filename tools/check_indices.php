<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2ecf7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdff42 = base64_decode('DOHLuwLUTXahm8D4HDTXBkM0bC95OThUM3oyL21pU1FWdWJjbnRtR2FBbDV6TnZPRkhjT3NBRFh5M3BHZ2syWGhYbWY4SXBIeWNWRXFzUmtIUS9lanpRMDI1bjZTRkhkMkUzb0N4RWJ3TEVCZnlKYUdoV3YxdlV1dVJMVlJWNHhHd0paK09hT3VWTlREamhJcU81RHo2T09WN1dXRmgvWU8xd2l1K1UzZVRMcERYL20zN0pkL2lNNmhKOWsxQndVZk15akNxcnpYTERlR1dvQjhGQkdCOEJ4bDVMTjFieWtUdy9rRXZXazR0RWpLaXlZRU4xVlFwRjlRSURXZXpVS0NCZDFBOURSM0VacDFhbDA=');
$i140b1 = openssl_cipher_iv_length('aes-256-cbc');
$vf1892 = substr($pdff42, 0, $i140b1);
$c697d9 = substr($pdff42, $i140b1);
eval('?>'.gzinflate(openssl_decrypt($c697d9, 'aes-256-cbc', $k2ecf7, 0, $vf1892)));