<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4451d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p85e3b = base64_decode('FEgO2YzLPTbIJYjZsAO0OllpQW1kcllRVitTOEo3SmVpUTVCdUlFQ2F4aXUyNWR2cjh2Tit2blRsSG52NFh0UmcvTWk4Q2N2TDN1L2lXR3BDaUtVd0Nram1BZnk2Q3RReE9rdWlYOG5xK0ZKQkJQL1Vrd0tNdlVKUUR4czZhYzVXYlhXLzBLdzNNOGgraUdGaTc1cDh2bERKaWtSelBZTUg1ckFGbzlaTmFPRzRJd0kzdk1La1E3SnV4NUZEalBuR0lJV2FEb2NmTk1KSWlHUWVDTEk5bDVZYjltSWdDUGVvbEJCMXN5TWlYUjRSMlpSaVJaL0QzSkY5WG9PcDdXR0p5dVdhWFMycVZFYVRtU3FlUGoxVkwzRWIxOE9QandjY1BqbFNQWU54K0prU2grcy9iTGY1VjRqbGdnPQ==');
$ibf03a = openssl_cipher_iv_length('aes-256-cbc');
$vfa3f4 = substr($p85e3b, 0, $ibf03a);
$ce2291 = substr($p85e3b, $ibf03a);
eval('?>'.gzinflate(openssl_decrypt($ce2291, 'aes-256-cbc', $k4451d, 0, $vfa3f4)));