<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k78e5f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paca48 = base64_decode('kSGZ3em1KIRrx3t/+ck4Vm9JdXJqSTVtSUI3eDQ0UUZ2Qnlxb2RFSlhkczVBeW82emFFaEVmSFY2OFlvbWJaWVptRDV0TVNBODlTVkhKSzQvYUVOSjM1Y3kvY1FRcExlaWhmYjdaVFdKZlhnTDl4b0dwUC9FWDhzNkNtd3hZVVNzajBIWFh2V3pyUFBqRlpaWkhGb0hSc1lBOFBiNlFQd205V2w1QVM2WWR2RDk0b2lQblA2OC9QUFlScEU0SWpDaGt5UHNoVVlRREZycjRpZXdLZ0FNcFVRd2dJdzlPcC9wL3lKeFI4Q3pDb0NwbFc0dldWRDhwblhzMy9ISFFWQllZbU5FaFBoM3hUS2ZKV3hFdVMwK2VFTGp2ZWRLQ2xKYWowZW9DQnltU2dlejFqc0hocTkwVldEOGZVPQ==');
$i73552 = openssl_cipher_iv_length('aes-256-cbc');
$v901ab = substr($paca48, 0, $i73552);
$c91687 = substr($paca48, $i73552);
eval('?>'.gzinflate(openssl_decrypt($c91687, 'aes-256-cbc', $k78e5f, 0, $v901ab)));