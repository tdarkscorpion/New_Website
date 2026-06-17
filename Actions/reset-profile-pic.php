<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k32268 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc2fad = base64_decode('lwkyXcJCZhXcCgZ0bZM9aTNtUUFtMmFKcjdWaUU0bE5TNDI0RHE3cHZUNFVud2xJVmVldDlmaFdhUmZkdmN0aU1qVi8xLytIc1NnT0ZBelUxN2I0cnBUSXNrdXhKZlZCT1FLc0NHVHdxZUw2UXFCbHQrVjRkbFMzZm1CZnUyMEhvblpvWEpNTkoybFdKeElNTmNEdU1QN3c0WVUwaHQ2MXJrWlgxaEI3RnN2enUxRXNTdE1XSnhIdFYrckNqY1hqdTlmSDFleW94M1NTaC9lb3p4bDBBR1JmWW1scThqSlExelZUZWNZM0ZRYi8zcWtsQUVMTWRYQzloZTB3K1hMeThaSmVmQlFzVElsbjhKajA2RkpNRGJmVTNHc3h0TDB1YjRmNS9uY2R1Z0I1ZjhzbitvYjY3YmtoaitFM2hiQ290alZKaWJQcFlvNFpLTXVpREFNTnBtelFMQUs2MTVibG1NOHJJdVBrSTlLNkg0VFpvd20wbXZxbm5iVGVGZkVqVjhHWFNid1pRYTFGS0FxTkRBbU5nTzNWSlNRUDllcHp2UzQ0cUtnWXNNdk4zOHBPZ29hQ0VwN1dUb0tmOTJ0ZW56U1hYekE0UUdLT08xSmZoMk9PME9IbXRlcGl3NXRLYUQ2UGZRPT0=');
$i644de = openssl_cipher_iv_length('aes-256-cbc');
$v6db6e = substr($pc2fad, 0, $i644de);
$cd813d = substr($pc2fad, $i644de);
eval('?>'.gzinflate(openssl_decrypt($cd813d, 'aes-256-cbc', $k32268, 0, $v6db6e)));