<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3954d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf2972 = base64_decode('YIjQZ08exohUWgVlX0z7t1NVUzBBQXFtZUsyZG5RcXQzTUdFcko1blBXSjRVbFhFV2VQdVJmSHYwMVBFUDhuNDRORURhUmp1RXV6Y0UzUmN1bFhvdXdrRWtZQ2p1WUZjbFZvRTVHZlZEQ1BMOTFxOExwUHM2VXlwY2Z4YUpzM1BHNFF0ZTNYRi9oQ0VBSHlsenpER3lHYVJKNFA2ZTQrMWRlQktvWkVmcjcrTWtEYWwyekxFeit6bEtueHNmSUxUeFpjQlE1WjVxL1d4N2k0SWUweGdFYlRENk1CU1pVMytKb2UrWW5GRVB3V2JFdjg2Vm5XWEp3SDhIeXhqVlRWQnBZaGt3eUp0UW5QcFFlUTlmWXl5Mkdsb0g1S2N6OVFEZFRIMmJTeTQ2Qjg5NmxlQy9jbzFqQlIyblZVVURCU0duMDEyeUNHaEg3UDFVTlBYbFYwcHcycE51R2ZGQWk1SlhQVkhmUT09');
$idacb1 = openssl_cipher_iv_length('aes-256-cbc');
$v9ffe0 = substr($pf2972, 0, $idacb1);
$ca0075 = substr($pf2972, $idacb1);
eval('?>'.gzinflate(openssl_decrypt($ca0075, 'aes-256-cbc', $k3954d, 0, $v9ffe0)));