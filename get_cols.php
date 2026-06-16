<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k313b3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd2341 = base64_decode('Rq2qklsKUcxIAm4RSKXKMnZwNmhBUGNMVTFSYXNxTE1SMXlUeUg2SmlZZFA5TnBzT2hoVFlYeWR0QW9EcXYraUpNcHN3Tm90SmV3TFNlL1J2NDY1cDFWT0RrYVZ6akp1aExnQUR0RlBrRmlPL2o4VGl3UFBQT0xZa2RiWDRqT1VuUXcydm5PV2NmcExzUWVaVnNBdU1wOEEyVFpwN0lXdlA3MEdOdVNWY3V6aGlKZlBqT2pEMmpuQVVFT2hqT2YrM25JMDJMaFR0Z0NHZ3dYNnVCdSt6dmF0MW9odmx3aWcyeVArVGc9PQ==');
$i4dc5e = openssl_cipher_iv_length('aes-256-cbc');
$vf3f6b = substr($pd2341, 0, $i4dc5e);
$ceeba1 = substr($pd2341, $i4dc5e);
eval('?>'.gzinflate(openssl_decrypt($ceeba1, 'aes-256-cbc', $k313b3, 0, $vf3f6b)));