<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9f23e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd0dc3 = base64_decode('WkbeVNPpwwvkASfolxmUsHhFV21XUVZrbW50NHVtZnV0SzY2bVFFb0FtMzJvNkV4ZGJza1NyK29QblN6T0JTeUMxTmVZV21jVzhSc1hvWXlEbFlyNkhkSEFlL2pxeWNKNnRSNzFqNDM2T0pkWVIwbithQUhGcUNrM0V6ai9OR2xuaVk5UUVjZWp1N3Y3MWtPMXA2SmtWVWlub1NtQ1FqZTM0KzlXaXMrTDY5WnlvVE1DN2FoQUNTK1FRZndNd2xmcEY3aTUvVTA3ai9KdFZCQUFiWVg3cWdOVFdiUnVVUFh5VkNKSjQrVmRTamYxckd5elAyRGJHQzVFS0xscmE4UmN0MlpxdDFwYk9GUFlMSVEzL2tUMnU3c0l3K0YzRFlIcGFwTEpUM0NmQnVHR1N6Wm5CSCs3cis3NVRVPQ==');
$i644b8 = openssl_cipher_iv_length('aes-256-cbc');
$v57fc8 = substr($pd0dc3, 0, $i644b8);
$c1ad30 = substr($pd0dc3, $i644b8);
eval('?>'.gzinflate(openssl_decrypt($c1ad30, 'aes-256-cbc', $k9f23e, 0, $v57fc8)));