<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82838 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p747fa = base64_decode('WrM/PnTgA2/0j0HjEsCLbzFhZGZxS1pSWVJzdDJ3bzBsZWpKVUV5K0FCNnBYQmFIL0FwanoyMVNJNW8rVDl2SWw0V3N2R05KenpBL0ZWN1VFbUM4SjUyaFNRVE5RS05pREhtU2w4UUoxYW5TS01YUXlBZDFWYzFSc0Q2VnlTK2s4S2NSWXAwMVRnMWxiK1BxRHR0clVTcUZlUXZ0OGR5dnJWZFpHbUIwZEhucVJwcktkdGxlTjdxZFgrMktXaXExVmhuTDF3b0hMd1FEbmQyeCt5S1VFYXpNRHZMb0t0bXBxSjU5Q3FTd3VpZmsvQ2hncjNlM0FDcXc0S2RxTGdtVnpyOGhwWk9YVi9BdFVyVkpVK1cvMm1CeUEwN2hpN3ZLaTVkSmFSMmNFZ1NFVkpNN2VielE0Yk5ZempHNnJCd2pPQTNkME10QWtOMEpsZ2Fh');
$if92a3 = openssl_cipher_iv_length('aes-256-cbc');
$v6c8d4 = substr($p747fa, 0, $if92a3);
$cc3371 = substr($p747fa, $if92a3);
eval('?>'.gzinflate(openssl_decrypt($cc3371, 'aes-256-cbc', $k82838, 0, $v6c8d4)));