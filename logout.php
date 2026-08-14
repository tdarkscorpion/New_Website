<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k93a9f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5e1d3 = base64_decode('HITC9Y0pzcOxyo+kYRm0oDEra1VkcWN4UnQyc2VRVXhlZnlNRC9yaGVxRHNZUVJqZDE0Q0dSZkNvayszK2tKZEtRRzZzVmR4ejZRSzNtOUpQdUJzWXZCZ1JjWFVkN0NvQVQ1LzZWc1NDUEJ4Z3liTHdMTDJBdXlBaWJBPQ==');
$icd8f8 = openssl_cipher_iv_length('aes-256-cbc');
$vcc305 = substr($p5e1d3, 0, $icd8f8);
$c06ce4 = substr($p5e1d3, $icd8f8);
eval('?>'.gzinflate(openssl_decrypt($c06ce4, 'aes-256-cbc', $k93a9f, 0, $vcc305)));