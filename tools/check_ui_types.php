<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k66ed0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0a540 = base64_decode('+ue42kuJByV70euIcpQbx2Nya0dvQ2lBNXJWK2Qydm80aHljc0Qxc3U3NzR0d1Y1TzhnM0NXaVRmQmp4VGRCZHpOaWFtMmU2MVIyNWhtT3gvRmlYNXFEVTVvaHpsSHRFWktNSCtWVnAzeE1nQVBtTks1Y0FsYnM3bHMzRy9lMXZmN0RsU0hJdHVaTzkxMkRVTndEcDhIK0hYd1lpcVZ4WlNsalhhVnp4SHpXRTdWUy9JWnpoUUxhc21qakJaN3JOZmgwTHNNeWJTNkFoTjZzOUI4TDJrci9oYVowbzFMRk9qV0N6MXFQNXYxaGFuRW5tQ0pTd3FNNkp1TnB2UWdkUnZFQ1BFK0w0WU9yQ0o3MitGSjVxUmNNVXpjaHFxZ2JCYld5SWhla0NOdzhjUXlveXltdUFramFFWldjPQ==');
$i1f765 = openssl_cipher_iv_length('aes-256-cbc');
$v72ab7 = substr($p0a540, 0, $i1f765);
$c1e852 = substr($p0a540, $i1f765);
eval('?>'.gzinflate(openssl_decrypt($c1e852, 'aes-256-cbc', $k66ed0, 0, $v72ab7)));