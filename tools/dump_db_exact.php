<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k01229 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc1ce4 = base64_decode('m3bq6N96DHchE1UVW05OBlVWdXFLQ1E3OGlVcmNscnpleVVrVHE3REJobDRDRjJIbTQzNk9iK29HM05ESjQra1NBQzZmZUhFVXdMcHRQRk9nQ212R2lTWFAydkI3b0tmeXRCWDBBSFlYaE5IenY3N053RHVMWFNaVDg4RkZCK0hJS0RNam9BZ3FRT0NLc3I5ZmFoTHF1S0VjNklMbWptVWx1SnhRbUYrNHFobi90K2xXVTJoSG8vMXVURXFacmMzUDRudnpOblRCZ3VFSk1tL0pnU2dIVTBCRysxM2txMzkzSE04K2pkenBKbzZpTnNCZDBaQlJYZFE2cGdZTElCT2hOcTdYMDFrdEtaR2RJSDYvT25KeEl1dGx6eE0xNDlwNHlEWS9wT1Fsd0xGYko5NTY2czZvWEI0NGlZPQ==');
$if1fa2 = openssl_cipher_iv_length('aes-256-cbc');
$vde99d = substr($pc1ce4, 0, $if1fa2);
$cf0739 = substr($pc1ce4, $if1fa2);
eval('?>'.gzinflate(openssl_decrypt($cf0739, 'aes-256-cbc', $k01229, 0, $vde99d)));