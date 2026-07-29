<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kce16a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p73706 = base64_decode('Da9C1a+wIELhuQuHJZ3nHEhCL1M3NGFKYU5zRVJKOHY0bWZFREFiNVRIcDRZUlZQci8waXhVMTZrWXBNa1p6YUNlM1A3Q213eXRYOG43bTlaUnVvMVNEa0h2WEM0OGcxSjN4SjlzTWJmbGtvVXRNVUVIVHo3NTdROXJLZnhHaEpqeDd1ZmkzbjdFcXdnZ0ROUlVVOC9OZnNvN09HeEhpRjd4NDBuRGhENVF1dmFpUEJmMHV1L1pPRk1ySHdOK2lJcTZGTUZRVDlOY3gxb0tRTkVCdHlpdkY2by9Xc1BZa2pxTVlqTDYvU3ZQclE2WlZPUVN3S2VqVUw1NXFjbzlvWVIvbHo0dHQzdEozTDcwR24rSGhaemt1ajNEUWtLUXFtazRoc3pTNENvYWkxdElsMDAzZmxRbHErWGxxMCsvTWFuL0F4NWx4bHBGR0V3dnVFQWhXWkRpeExOTmgxazFQeTRLVnFSQT09');
$iee169 = openssl_cipher_iv_length('aes-256-cbc');
$ve041d = substr($p73706, 0, $iee169);
$c99e27 = substr($p73706, $iee169);
eval('?>'.gzinflate(openssl_decrypt($c99e27, 'aes-256-cbc', $kce16a, 0, $ve041d)));