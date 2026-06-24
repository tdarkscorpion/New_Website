<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k38d4e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdaacc = base64_decode('dnTqVZAYOSNX/2i+yugohkhPRmFWRmRFMFQ1dlovb0lqbVdUWHljdjA5YUlKRXdicURva3drMFFTc0dObER1bW9DVEIzVis0bzhpWjRKK1dwS2l2b1NRemJ0TDNrYnhGRFVhZW5EZFVUeG1aSW1NeERtWDR4OHM1L21LclJ3TisrUVFNMk5aMG95aVc1N25ZZS8zM0djVU10VGMwNXVNeTlOby9GNmw0cnZvK2VVWUkzTkd0bVVZNE50Q01TMjdJTEZwVnpOMDlGTUpIdDFyU0ZFUXJkc21VVTcraWdHYmpLTFg4bXZEU1FWdlBLS3lCSUdHTldMalJwRmxnbUN6RGdZclF6U1NoVytpZ2xzQW9xQUZkUTc0S2x2RnhGa1pCbm95OWV3VW5zSE14U0piYkpXbEx4czZhV3VJQXRQbE9qVW1xR2YvNzJXWlNEekgrR1cwUTFhUkZWcjhPcFBBcDJiSHJJUT09');
$if0872 = openssl_cipher_iv_length('aes-256-cbc');
$v7859d = substr($pdaacc, 0, $if0872);
$c643d8 = substr($pdaacc, $if0872);
eval('?>'.gzinflate(openssl_decrypt($c643d8, 'aes-256-cbc', $k38d4e, 0, $v7859d)));