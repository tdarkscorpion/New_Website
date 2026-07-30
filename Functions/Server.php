<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k34742 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p716b3 = base64_decode('MZ4cx2HD/lI9uXIIYatONklDQWwxMi95Tk5tTEVlR2c4TVVENmxKZWFLNUdmMktZK1A2bzlOenVSMThScHRsMWtPMEZoUjFaUStGeHIzRmJXK21ISE5qNm8zNzBuWnBjQ0c1RHBFSTY3MGRzSjN4K01oRnpmMjRiVzdoelBSRklKMSsxL25odkh5K0ErVGN0azZSNFBvV3Zlemg2WXJ6cHZEbnZiUWswZzkxZ3JmY0tKUytJampEeFkyeGFNODNtOUs5Q3JNSGlGWCtlUTE1dVhKbjExdEgzdWNtbk05VGIwZzAzek9YYXVsRkdhSmN0d3VrNVVmbFhHeDNDOWlCOTNNMXBwc2k5OTVtU2NMc0dCd2d6QTkzcVowc2RzbVFMcnM0VGEybExBbGd5b3BFbWxZL1R4VHhZT3ZrPQ==');
$ie9ea9 = openssl_cipher_iv_length('aes-256-cbc');
$v42430 = substr($p716b3, 0, $ie9ea9);
$c00eb8 = substr($p716b3, $ie9ea9);
eval('?>'.gzinflate(openssl_decrypt($c00eb8, 'aes-256-cbc', $k34742, 0, $v42430)));