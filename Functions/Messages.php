<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kff116 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2fc89 = base64_decode('xw3PycX7gCVtWxz5U9/B7kVsazdOdjZGNlNxUXd5akRSMUR2dHJFNUdaekx4WWlwZDZRSnlhckZINTVaUEZHU1NnMmRhdTZRaW5obTIvV1FJS3paNTR3NDhPWDA0V1oxdmNLTnVNMG00c09qektYZm5HcFBKamtUamhaL2Q4aUZkakxYVFB4WTJuTUpsY1U3MVZPMDJVQUViQUM2Qnh2bjZyS1lLL2NWZ2V3Nnp3Qk42MmwzOGtlZWlvNnVDeVQybUpZb2M3N0txTE9SRGdscE9RUk1kVGlHdWlzOFpvVjdxZmxNTExleTBjQ2NNNDVoaVppVVlFMUQwbjF2UWtvQ084V2wxYlVabFF4WUlQYmg2YkNKNlU4SHJmdEN2Q2plblhibFRUeWpnc1VXMDBUdk1KTldCem1lUzkwPQ==');
$i4666e = openssl_cipher_iv_length('aes-256-cbc');
$v80a51 = substr($p2fc89, 0, $i4666e);
$c69641 = substr($p2fc89, $i4666e);
eval('?>'.gzinflate(openssl_decrypt($c69641, 'aes-256-cbc', $kff116, 0, $v80a51)));