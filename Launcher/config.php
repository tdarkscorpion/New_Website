<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k294ba = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb8637 = base64_decode('MvUYr0zK8fUl+qlZzGUmQUdPMWQ2SXZpUkZKSHBRSi85U0pZM0hSelAzZ1A2SnprQ3E5cTU4aWNiTU5wRXI0VmhqUXhCZVRxQ09hQWk1L3kvQUNjWDVXaEo5WjdzUVI1dXpQZDJqemt1RGtrRkxqRFFYeDVkKytYV1ZEcUxEWG8vdHdsZnMrOTcxam9qVzkvZVBPdys3N1M4YUYwdTNDRUd3NmFiMDlOelhqSEp4eENpZGxVengxb0JKQkdKMHcrc0FyZVU4NGQxWE9sNU1ZZDFwMHpUMGtuYW9HdVBvNFRoaFNtVmV3V1dKNHJIMndhclRCQURFYUFkMWVpcTdhaW5uNzM4TGd2WUtjKzE4VTF1K3NVR1RVcURVMEltajV4cHVjWU81Y1J1MEhZVDJ2SThDY0RmeHplSWs0PQ==');
$i6d102 = openssl_cipher_iv_length('aes-256-cbc');
$v1ef3c = substr($pb8637, 0, $i6d102);
$c0c50c = substr($pb8637, $i6d102);
eval('?>'.gzinflate(openssl_decrypt($c0c50c, 'aes-256-cbc', $k294ba, 0, $v1ef3c)));