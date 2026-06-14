<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka6625 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$ped47c = base64_decode('GFlkVJ/T5hkv2P1r/ea03ldubzJGdkVnSHA0cXNuUW8rTVhVNmE5VTgyblZkWjUvYWlPcTJpeExCWldFY2UrZ1pJdW5QbzJjdVIzclRsZDZjQUJidERCVzhDZnhVSU4wOGRZUjN5bEFDYlJISlltTFluN3dPZWYwRGhxbVNZSUF4RnBaaW4zUGNjeElQbVBVaGZsQU41amlpRGtsN1FVelZEWkhCUnl0TEU0WlRZR3FXYU44WWppUzZzU0lFTG5yeCt2R0VXK0RTWDRJQnd3SCtKSE9qNEI2WnEyYWxxRHZDYnQwMjIwV0ZUa0FuODRFencxeitFYUhBbnZCalVBa2p2MjJRV3VoNENDTXZyZkFQQ2VIOUNMOUFybjdySkhmN2I2cWpTVGs5TmtFSmhuYVhHQkRFcmU5WS9zPQ==');
$i72d92 = openssl_cipher_iv_length('aes-256-cbc');
$v98259 = substr($ped47c, 0, $i72d92);
$c86f52 = substr($ped47c, $i72d92);
eval('?>'.gzinflate(openssl_decrypt($c86f52, 'aes-256-cbc', $ka6625, 0, $v98259)));