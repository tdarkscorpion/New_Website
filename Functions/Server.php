<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kebc54 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8ac94 = base64_decode('yJI2b9NGOFRFBPKhqH1c33piTnJURFpwd1MzNlAxNXRGZXpDODZweE9zNDlFaXBWdXRxWStzQjYwVVl5NEVleXJGcTRTazhBU2MxbTZ4aDNNZkNFZ0hXR01jQVdxdWQxSitxcnlZam9ydk5ib3BTS05FYXN2bmZaWDVHdVVmNmxoY2I3QUs0aWhieVpPQjBCNS9IeERGSXBvMklVaW51VVBaUnoxMWVYMUlFS0ovN2tsSXNZRFBHYk80cEEzRndUQUd0RU5WSnhFNFUyV3FCWmV6MTNZTDlMU1lSbDFRM1pRTDFhSVAvZTluUTRtT1BkbHYrVVd1d05TRU85Nk9TY01ocFNoeDMzWHhOYVA5bE1uY1JpR0lDeml6MjFMRkxLbFVzZXY0Z29xL1Fkbm1JNG9UcXUrcFF2aUpZPQ==');
$iadf4b = openssl_cipher_iv_length('aes-256-cbc');
$v599bb = substr($p8ac94, 0, $iadf4b);
$c41a88 = substr($p8ac94, $iadf4b);
eval('?>'.gzinflate(openssl_decrypt($c41a88, 'aes-256-cbc', $kebc54, 0, $v599bb)));