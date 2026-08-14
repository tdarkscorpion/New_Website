<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0d3c3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pddc22 = base64_decode('m9huekGmnW7enQrPyMvQylhaUU04V3NEVkxQR1RldldzUWIvaUxjUVFPckVLSWNwckxIL0VRakl2MGZVc3JFM0Exb1hiT2piTFNNdW4wbUpHRGp5bmk1ZnpOcHpNNFZyY1V4RWFvK1hTcWFkNXlwOWZuYml3L1AxNUs3emYxOUVIdkZOWVk3ZU9EdklGRWpjYnFnNnhUQ3VIU3NxVWpiRnNLNjFIdnVmYkxDcHFJMnJrSnk3NVhmYWJ6c05MbThvLzB1ODI5eHo4V2dWS2JWTlJiM3VhVC9qMVYxTDlPMEZJYmVtOGNzaEp5eWdtSkRGN013U24xT0c0d1ZjY0p3bDdmK2JJdEpQN3B1NXFGdEl6Zm82a2QwTWwxaXlHY0ZoUlROby9ibERObjE0N2VOUzRQZkNWVHFMd3R3PQ==');
$i5597f = openssl_cipher_iv_length('aes-256-cbc');
$vd08dc = substr($pddc22, 0, $i5597f);
$cc8397 = substr($pddc22, $i5597f);
eval('?>'.gzinflate(openssl_decrypt($cc8397, 'aes-256-cbc', $k0d3c3, 0, $vd08dc)));