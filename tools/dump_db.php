<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2617c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3cc6 = base64_decode('B8SuHzLCcEvS2WLQhIPWc1lpcEsyMEFYc0pjYWxFWFdGQzh3K3JLOHlvUmRhNXU3RWRxWFUzV1lmNXY4T3Q0LzNTOGRVcldjUkU2bCtxa1FCeS82YWtkQzVTWklIbm5DODltTE10QWRtWDg3RWhhTnVmbGszTElpdHRCTFdnOWs2OVhUanpJSktiNHpFL3FYMktoTmEyYWxMOVRHejVoeCtFV1lRaXEwWWNrSDZTb291RVRNMkpKd0tRRFp1ekkwckRvM0Q2TnF0Qm84VVREY0JMaUc4b0FRS29GSUUzc1NtVlVLNHc9PQ==');
$if3572 = openssl_cipher_iv_length('aes-256-cbc');
$v04557 = substr($pa3cc6, 0, $if3572);
$c86f80 = substr($pa3cc6, $if3572);
eval('?>'.gzinflate(openssl_decrypt($c86f80, 'aes-256-cbc', $k2617c, 0, $v04557)));