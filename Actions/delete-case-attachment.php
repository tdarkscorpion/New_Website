<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3077b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdb1ef = base64_decode('Kpz8dURBUT7x4qlkW8liC25qRDB1WkJWZkQwY25POUt2b3lnMHZrbitET2E0YTNBYVFRWExNb0djSGlNZmVwWk85R0twei9DMUJkKzNVYjNmSW8zZGV1UEVReFhWN1dvVEZKOWxLcjU5QXVCWDR2eWJtdU9FQXFQR29oY29PRTVZOEU4ZzkwU1F0aVRub1MxVjNHUHdpSXg4NWlkM1RwZG5LOUcvRzluZFNwdGsxS0Z4K214NUpoTEY3dEx6NWpuZ0RSNmZ2MU1aM0tVNVpRUUJHakxPZnpKajE1SzF4T1c4dWVGMXVDQklhR0Z2ajA3VFMvd2RDSVAxRVhKazcyN0dMVmgyalVPRUFSNk9MOTRCUmRSNUtjWnBGd1UxK3RBNmRvTU1hK1pmUWRmK3J1aUVSdmlkeDBtMVVXczhBd0h6UGF5VXR3S0NLa1Bvb2tQ');
$i1df3e = openssl_cipher_iv_length('aes-256-cbc');
$va00b7 = substr($pdb1ef, 0, $i1df3e);
$c4cdbb = substr($pdb1ef, $i1df3e);
eval('?>'.gzinflate(openssl_decrypt($c4cdbb, 'aes-256-cbc', $k3077b, 0, $va00b7)));