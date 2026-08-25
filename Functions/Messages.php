<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7a594 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0fbdd = base64_decode('wSgSDMhYmI7McXXFlHBOxFVXb201bHZVQmkwTGRqUmUxS1JnMjFrZ3liOVdENmhiVm9Ed0tXeG9GZ0RjT1dpcHcxcHZ2Y2daUS9WY2o1a1NVWEdsRWRxV0I1RW9zMWl5cDV5ckMzbG9acnVLelpWb0Q2MjdXL1grWUdWVEJJdXB4MlcyOHhQUFp3RHcyblE5VzlHZHdjVWsySU13eml5LytSOVRZMURoRFIvU3N2ZlBDN29neWhwWHpUeUVodTVpZ1Z3YmlhOThiL2ZkNHFBaVVENDNnN2xEeHp4T1hoampIOWhrK1VFemxPOW4ySlVLbHUwdXovVzhwNklmQnRPdG9Fc3pIQ3hONlR6U1VreExSNDJGMmJTb1BYb3ZibmtDSU5UeEVoUHJ0NTNudE8ydiszd2swazdMeldVPQ==');
$i6665b = openssl_cipher_iv_length('aes-256-cbc');
$ve2e2b = substr($p0fbdd, 0, $i6665b);
$cd77a5 = substr($p0fbdd, $i6665b);
eval('?>'.gzinflate(openssl_decrypt($cd77a5, 'aes-256-cbc', $k7a594, 0, $ve2e2b)));