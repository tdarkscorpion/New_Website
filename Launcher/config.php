<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k41fe4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb2189 = base64_decode('px3qk5GFrKkk0ZyED7OTbUExd0ZuNFhIN21majVBME0rcHFBQk1iY3pnbUtseGVxWFd6L29uZ1h4TGZjWk9JTGwxQWovUVlFeXU5K1BpTk9LZDhORXlEdlZQcGROYldhT0JBNG1JZHp0YXpuMGFkYVBVZU93R3h0cnUzb0xMcFNQaDIvQXNyT1hBeEk2SU1wUTNEYXNGSVp3Qk1kMlNEN1dLVmtQangxUDRnMlJPUXY2b1M3ak1hZU1Qb1lpU3FoZWRCNkQybjNwZ3IrZVhUTnNTODBTNlUrRldqeElmRzFUY0g3WXRFbWFkczVBRmVQWEdQa2RybXF2NjAxWlk0ZVpFa0tsNXZzbTlSSGN4MXRwQnNCbVB3N2ZXSkNBVzhLS21pRmNIblhpUkdzcC96YlFLUk9hU2lCV3lzPQ==');
$ic5aee = openssl_cipher_iv_length('aes-256-cbc');
$v54e9c = substr($pb2189, 0, $ic5aee);
$cea533 = substr($pb2189, $ic5aee);
eval('?>'.gzinflate(openssl_decrypt($cea533, 'aes-256-cbc', $k41fe4, 0, $v54e9c)));