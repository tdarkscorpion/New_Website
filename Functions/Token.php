<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3c7a0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p896c3 = base64_decode('zlLY6hX5ARMYwSoznnw8x1VXbys3UzFiUEVxSVliVkhJb1Mwc2VhSTZOMFZ2S2lHK25acnU5RURNbUlHRFNZK0ZCNlBJektDSVRnMDFNNlN5ejNmWVRHQ1NuQUlMUEhPZlgwNnpHVG9qV0VYNUFQZU9Sc25qT1ZNVWdkNUdkTnVPVXF6cmlGNzVUMHFxZExydVkzSk80NWtmNzl5S3F6ZzVRd1NLbjFVeTNDU2hZOXFqbkxMM1JJcm96dHF6YkxNYXBRU01STnZ6eityVnBXdXZlOTVyWEhSZHVLdTUyZlFTR0hhVldTL3llMHdSZ3BYdmFlVFE3YkE1NFVBUlJqekcrd2NmN3pscWhqWE9tMXg=');
$i65e9f = openssl_cipher_iv_length('aes-256-cbc');
$v10fda = substr($p896c3, 0, $i65e9f);
$c3863b = substr($p896c3, $i65e9f);
eval('?>'.gzinflate(openssl_decrypt($c3863b, 'aes-256-cbc', $k3c7a0, 0, $v10fda)));