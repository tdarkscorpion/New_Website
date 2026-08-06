<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kabc40 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pff718 = base64_decode('8fX+1ahxkyyhiC1VtRknqVlEaldpWUJhTHlEZW1LSmdLaHZjOW90WEkyTDFzOHlaTFk2NnpTbFpjeVFoZWJLMmxMTC9tTXpWemJ6bXlIaFpmVnlGVElkRlpDK1RnckF0MmVKbERsNmNINnJpMnQxOThXUjYyMlk5RHZ5STVoUllOc0xTVStmWEEzYldtazNGVTBscVU0NnQ5Yys3ajNSaVRBZ2h5Z0Mxd2VsR1gwNEdEL0J6dGNrSEVYVzhyak1QY3I4OFFXdmt5aU5weEFpZFdPYktyTFRhUk9pWWJOcUw1VWZwN28ycm5yRXRuVXM5UXZYRjRPVGx0cjBtQk9qcjlnR0g3Y2c3dG1lbVMyUTBBMWRLand2L2xta1RiVGVxOEtvVmpGa0lQYXFEa1FJaWFDSVVHaVRVRmZ3RzBDREdwNzZibzk3bVN3QzM4czBn');
$ic873f = openssl_cipher_iv_length('aes-256-cbc');
$vb3e21 = substr($pff718, 0, $ic873f);
$c00aee = substr($pff718, $ic873f);
eval('?>'.gzinflate(openssl_decrypt($c00aee, 'aes-256-cbc', $kabc40, 0, $vb3e21)));