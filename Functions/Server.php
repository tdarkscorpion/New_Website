<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka35a7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4a1bd = base64_decode('JMx0RTv+XHfvxnqVhQy3hWNtMjUxdHFBK21KTzNpMCtDb2E3Vm5HK2tMTkgyN2s0b1pFYmxIL2hlYkhZV3RCUU9aS2JmNExZMmM3OFUrODRMRHM5V0VZMnZ4UGc5TTRyZlczZ2hKVEdReHl6M2xtNDYxbmhzTEJSYXhKZkVqaE56aDZLYWhPRXladHBmTHl0ek5YQXgwZzlZTUtKZWFKekNFMzNyb0tURTdTMDlnbTFVNDhpQjRxREUvUU54b3Q2K3dGdHo0Qk1qOTZpVVB3d3h5bmZjMnpiUGNMZ2ZZZ3dHQjdqSDgzNVpuamNwOUZEajBRMUJDOUdCenJvR3Y0Vm00Rm9jMWNGd3pNa0tCME1KSks0eTMzOXdWVmhZQ0o2eVBiNHhWRVJ0Y3RMc0FCbDhKMndGNE10TktrPQ==');
$i1db75 = openssl_cipher_iv_length('aes-256-cbc');
$v17e5f = substr($p4a1bd, 0, $i1db75);
$c02181 = substr($p4a1bd, $i1db75);
eval('?>'.gzinflate(openssl_decrypt($c02181, 'aes-256-cbc', $ka35a7, 0, $v17e5f)));