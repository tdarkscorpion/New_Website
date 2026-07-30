<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdca35 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc54d5 = base64_decode('4sYRWGVPzOFmNUIqUUD0sTJkcTNMSVZYQ2lwSzIrajFwSzI3andqdi9QY3lEMW82UWtqWUxxamZpd2NLMHdzb2pLMFU4UTUycTlvOHgwRDlib044M2dRWlhYVWl0dEFBcXR3RzFleWFyOEhzVmNhREV3eGV4N1kvWGd3VnlDRHorUGh5Qk8xMzBTb2ZHS0tJOWxNRFErWmxYMVBpOFAxZlZNbEhDQ1lMNlcyOHR4VU5CUFdsTlllT3F6VWpqd0wyb3BGbndRQ0xVeERHdi85akRibGZ3Z1J1dGEvcVNYbjVMU1ZJLzJYakhqc1gzWjM5Vzd0L0prRkhVZnRRVFNhMUkvQjVwTytFMmJ1YlNKbWF1SXdVMkxHWksrVFE5WEtTMWt1L2ZybFdsMDZvbytEdXV0MXgwSUtmMDNNPQ==');
$ib5297 = openssl_cipher_iv_length('aes-256-cbc');
$v800f5 = substr($pc54d5, 0, $ib5297);
$cb2575 = substr($pc54d5, $ib5297);
eval('?>'.gzinflate(openssl_decrypt($cb2575, 'aes-256-cbc', $kdca35, 0, $v800f5)));