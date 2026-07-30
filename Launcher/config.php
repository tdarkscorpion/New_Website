<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7e775 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pef75e = base64_decode('L5UhXoslt7ylj8oNj6H8SmtwTWJBL0NlOWlIS1lrYXVweWNkd2Y0QVUvMUNNV2ZjQ0wvTkgrUGpyNWlDSVhtSXJlWFRMcWJvTVFwdVJaWjFWMlhsWWtSZXZvT3ZBQnZ1YnJSOHNsTmgvbzVNdmNuelU1THdzL2tVQVpSclBYWXI0S0QzUHRGdmRJUitoWnpCSDgySGNQYkQxNEYxZCs1OTlZc1lEVGU2RjlRbmwyT0cvK013c2pDSHBPakhOdUdTb0c4c3htV3BVcDV1L05BUXBzWDBCZEh6NXJuVEVDeUkwUWdFSk5oQitucVlRRGdsMTVoQkdwSE5RQThwR296cWh2dDBiUjlhT2pFRm1POG93NWd2bm1yaXhMNU1BS0wvWXlLVW5seGlJUVRIWktMWlFwdXpaaVpTbnZ3PQ==');
$iada8b = openssl_cipher_iv_length('aes-256-cbc');
$v29dba = substr($pef75e, 0, $iada8b);
$c1b36e = substr($pef75e, $iada8b);
eval('?>'.gzinflate(openssl_decrypt($c1b36e, 'aes-256-cbc', $k7e775, 0, $v29dba)));