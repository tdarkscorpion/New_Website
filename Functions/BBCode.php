<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfaefc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1e7a7 = base64_decode('pFouLZ+E1aRooWA1KJ+qhkZoWEN5UUJhQk1BTnYyclBwMnVmS3ROTXlKa2ZXekFqT2hjakdhODBJVTJ1cWovTXoycFA3ZUQvclpEell4SWpVNG1DZithNEpwUDREdzltYmUxMk82RUJyOHhwQVlpZDlVNndrQzV5dldxYXJyWTlpOEJzeERTeXBXNldUbWMzTk81OWdmdk1aTjlKOFhMQnp5dGJZU3F2TkZTY1dLblhyTFJ2QXZ5N1lreStiS2FsTTROL0dNSnQrUDhZdmFSWFVFcVRYVnVCWjNpR3hSNTJFV1BqbE9heXF0NWNMa3hTT2VkOGw3V3JjK3htcTJFR2o5aE5ZM0FuMnpFL3IxOWo2anBmTnJ3Tzc3TUUzcXhYWDFvT1BMbTRzaWNTNENGczRwakNWdTU1THdMRS81WVAwK0lRKzVaa3BuYlh4cWtR');
$iae859 = openssl_cipher_iv_length('aes-256-cbc');
$vebb6c = substr($p1e7a7, 0, $iae859);
$c60af2 = substr($p1e7a7, $iae859);
eval('?>'.gzinflate(openssl_decrypt($c60af2, 'aes-256-cbc', $kfaefc, 0, $vebb6c)));