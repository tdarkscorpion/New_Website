<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4e0b7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdf412 = base64_decode('xXDthWytDSmiDUrm2SAcoDYzaUk2NGl1eVpqa3Q2Sm1FOGhlZWtHdEJzakdta1QwMHB2OHg1TVpyNTZsYjR3UUpIYkRTc2l2VW1rMDRYOHVJRm5saFA5MStycENrTFMycDhoNktKejIva29laWJUdFl2MWxENXEvR1dBeTBZWTRHdEVOUGdqeFBDdHhBUEsya3JiaVFzSXJ6RkFhRk5qUk4zT3YxNGZWcFdiMnZQN2tMdTlzM2RxbHRNOGpRbFM2SStRS0FWUTZkQmxlRDhVV3FzTm1kQnVtbTFHMEtHVGdpNFgraHFmc2o5Y2VtelJoUGhUamlKQll0SWVnSFRUZjFMZkUzUTZyWE1PTVlSZ3FEL21MSG5Mck03bG1PZFQxY2xlSHNnbVgzVngwd1NZV3lhVmhEKzE4a3FnPQ==');
$icf9b8 = openssl_cipher_iv_length('aes-256-cbc');
$v38436 = substr($pdf412, 0, $icf9b8);
$c1d09d = substr($pdf412, $icf9b8);
eval('?>'.gzinflate(openssl_decrypt($c1d09d, 'aes-256-cbc', $k4e0b7, 0, $v38436)));