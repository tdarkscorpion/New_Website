<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k11bd5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8774f = base64_decode('QqtfLtRaazKQyZMBiFuQYmhZTkk2dGtJbUdpWk5zK1ZvUlRURUZqT2d3a1ZxOGNHYzVjNHh5dnArMytGYVBUWEUvdXdnY1FPcG9KTk1zRThUanJ3TWk3N0Z3VmlMenhXMlg1S1gvV2tmV2lRck5CQlorOW9zd1pCdmVFSzhqSDdZRkxsa0k4OWVCQU1jc1R4Mk5sSjMvMWFYQ3VqUURBVVR0YUpzSk84WUZGdGg0b3M3UTVvaXNBRk0yamF4b1Fkdy9XdHZ1YkM1aS9GWTY3MEVCeDFBSCtTdkhvb296blNtR2ZNclRMVTZJcU52TlRxTC84V3FwMVRmcXdjQ1hZNzN2b3JlQ1NHNUY0NitSSnllU2ovWCtaRXM5TkdLUXNTUTlpUitjVmlacUVIMnZSWnI5cTVFOGIxcHV2MmxQMGN1YU9WNGp6QXFjRTB6dFRIYnJtdVl2Q2h4Nk1QRE42ZWdNS0wrZz09');
$i79981 = openssl_cipher_iv_length('aes-256-cbc');
$v0d5a7 = substr($p8774f, 0, $i79981);
$cefd13 = substr($p8774f, $i79981);
eval('?>'.gzinflate(openssl_decrypt($cefd13, 'aes-256-cbc', $k11bd5, 0, $v0d5a7)));