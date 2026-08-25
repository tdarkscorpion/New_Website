<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ked583 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc448f = base64_decode('kwhIFLawPM2eUAGPrt4FqmxOQjNFN1dXMWlQUFNDb3dwVEFyZUtzbGhoZzFiYU1nRlNLSFRsc0t3UERGSUxta1hXdjlnTjZ0cS85RFRsWDB0a2JLakVUTmU4SjRIWGQyTEpPc2V0STBKZWI2U1hheXdCM0FaaU5nazY5K3drd0dWY0IvZ3AwY2dqMDNYNFNCVlJ4YXRlSVFnTkpaZ0lUeGVtVVZpYnByT2xTOTNLRUM2ZXJmdGlNdllDQnUxbC8zM0ZlSWRjL2FCK09MdE1uNTIzNHlHSThNcnp6U285allLRFUwSG9ZK2RlNjk5SXVoTjFFWWZDMktKUEVMeXo1bFV5cVdtb3hucVN1UGFONFk=');
$i53429 = openssl_cipher_iv_length('aes-256-cbc');
$v6e9fc = substr($pc448f, 0, $i53429);
$cd6db7 = substr($pc448f, $i53429);
eval('?>'.gzinflate(openssl_decrypt($cd6db7, 'aes-256-cbc', $ked583, 0, $v6e9fc)));