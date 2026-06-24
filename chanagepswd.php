<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3f4b6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paedf0 = base64_decode('3TR6AohyT1r4IWztc7EwUFlXQ2xhOHpYcU1GQzNxd3dRNmJLa3FlcE53N1lyUGNuVFJTekwreEEzdkhMRk9DMUJYWlFJSGJBeXBaZ1pTb1R6L3EzU1pLM3pFZk51M0VYdmtPOEtzV0dFRElvVmtwTTFLdnBaUWNtYjNobFpWTnh0b2JYY1hyUFhzQmxycHJwK1NFOGN3bnNFaU1iV3pNd3RyN2pFczJ2QktGRXNQTys3RFMrcUFYN3VjTGNYMnVVbVd5SlVkNS8wVFNBcmpHa1pBc29sTGdEOEJTazBPQWpPRXlib1Fha2RiWE9Va3FRVG5QRWFsUlhORG1xLzM0ZDhta2g0Snc4dGFmWm9wNm93NWxHSnkvdmw0ZTVWWTVnRDVsejFGSFlsajJnUDU5THo1VEdLZ1FJZUswMmh3b2RxeXNpbjg2amZWM0lQUzdQNWpiNXk0YzdIc2lPYnVJbVd0ZVIzdz09');
$if3808 = openssl_cipher_iv_length('aes-256-cbc');
$v3d2ab = substr($paedf0, 0, $if3808);
$cc3964 = substr($paedf0, $if3808);
eval('?>'.gzinflate(openssl_decrypt($cc3964, 'aes-256-cbc', $k3f4b6, 0, $v3d2ab)));