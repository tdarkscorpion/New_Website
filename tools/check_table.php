<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4c694 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf8f4f = base64_decode('dCPbO2pU2N45D3UjdAbS32lBYjJkMWpqL0ZUYlZpU2dKZ0U1WmkxbGVSam12amtYd0ppL3l3SGxMdUUzMjRtOW1zNk9kMTVFdjJIMFlaZmI3TGNMeWJmNC8zck1URDZ4ditJNExDdnRXcGNIQXNuUmtvcnp1TVF1d3JqdkxvaEc3dWtVZjIzbnVMWkhQQmdRbHBZODdMT29Nb0p2bCs4VHVIZjU3czJ1MnZwcWdpeTROTU0rVTZVUy9jTFF3SWRQUHR3Ykp6UjdmbXZCV2NTVGx6YU12LzBVSSt0THhGcTV1WHowUERLUVJHMnJBcXJFbnZPa2Z6dUJoTkJ2bFBoZnI2TEdhWllYN0VDTVVoMTVJbWsvdm5WckkvZFNGdzlrV1JPdnpSSDRERWVmNU12VTRiTWpTeW00T2FrVGVNVTV1VkFsazFESDhIbWFONDFh');
$i8f414 = openssl_cipher_iv_length('aes-256-cbc');
$v4e0cd = substr($pf8f4f, 0, $i8f414);
$cef57f = substr($pf8f4f, $i8f414);
eval('?>'.gzinflate(openssl_decrypt($cef57f, 'aes-256-cbc', $k4c694, 0, $v4e0cd)));