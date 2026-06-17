<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k97331 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf01f8 = base64_decode('oKiN04TylNW1F0bFQbbhHHpBbWwzWS9VaDEzV3FSRGtoMFdSSGtUZlVibVF5cXgrZG8zTFlwVnI2WVJlNFk1V2tqdTZtMzI5K0c5cnhHQnRIK2w5WmJmeTdTZ1ZidWVUTllUOEFqd3JaR2VFa0hnK3pPYzV3TVNiUWxxYXdXTlF1eXpkcXNyanZuaitvc0N5Ty9PdXhNSTNmT2JLaUVvK2ZvM2Jia2pmQnJnMWpwT1d1Rm9oMmZSSXRBT1lWVlpwQ0VtbW1mV2tCcU9Tbm5zUG1ScEdCZWduc3lrNUNTazhhazFRU1lmVUNSaFRiSytFdjQvMnBaN3E5SmFOYWcvL2Z6UzVUYXRXTVZ6Y002blJIYkNXTlpWL1hiNHZHcHgxbUFPdDM2Tm10SXppT1c0cndIVHJHUElmNURnPQ==');
$iab6fa = openssl_cipher_iv_length('aes-256-cbc');
$v5ed13 = substr($pf01f8, 0, $iab6fa);
$c75a81 = substr($pf01f8, $iab6fa);
eval('?>'.gzinflate(openssl_decrypt($c75a81, 'aes-256-cbc', $k97331, 0, $v5ed13)));