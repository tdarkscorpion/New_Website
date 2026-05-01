<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k26d26 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p94732 = base64_decode('7C29vc6UCptm+a88HVc1xDZqZkRzbHRwb0FXTW1La1Azc2IxcDhIVFZKS2d1eThEOC91NlhpdTZqc1JFcW02N3gvNFdoV2NYdGxsOG4vYk5IdEx0MzVMTzlka2cwb0tscXNLMWwxZWlQaVBXRElNRlRVaU5NN1hENU1mM0pJM1hCRFRVYjM2TkJHczZnS1hiZTBMMmNTMzJKOFVqT3krUURFZXFHNDVSTXRNTjhqM3RDZ0tjODBBM3YrQy9jaHprdVE2RDJGM1IzMEd5VEtGZHAvb1NEbmtERGRQd0l1VkZRb3VPYnpTQVBsZUQ2dlhXOFB1eEhqRXEzRVE9');
$id5d17 = openssl_cipher_iv_length('aes-256-cbc');
$vbdffe = substr($p94732, 0, $id5d17);
$c869fe = substr($p94732, $id5d17);
eval('?>'.gzinflate(openssl_decrypt($c869fe, 'aes-256-cbc', $k26d26, 0, $vbdffe)));