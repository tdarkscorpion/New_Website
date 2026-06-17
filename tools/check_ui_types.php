<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb297a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7f2f9 = base64_decode('iu1J28lhL3tUIk9WW+srjnF0Q2ZwbVBPOTR2M0IzeGI1c0FLOFdpTDAvVW54NUt4Vmo1aTRZTHFqM3lFYmQyRUFlV205dU5qWVhNenFZZ1RXb3ZCK3NjNk1JRktDSG1nQlNFOWtNbUI4WElPRk92MG5UTGRKZlV1bEdDU3QzS3JMUVZkeC9scEpOTVdJKzd6ZExFQUxxaXBxK0JOUG4xU0NGTUM1eVV5UjZUL0Nna3VuRU85b2xoanVpVFE2N20zanJXQVdYcndWNHRuRjVNMzMvZ1QzTGVCd2RGUEdtZzFRTytqQjlpZ1ZqVWZmR0tENGVtZFNmT0xGamVvekJyY1FHMVNBdk5SMFZBVGdyTjVPL3djak82TGNZMjRwMDRqYVpETVRBN2lJWHJTSjZYaVY3TmZmdkdmWWk0PQ==');
$i8ca55 = openssl_cipher_iv_length('aes-256-cbc');
$veeb50 = substr($p7f2f9, 0, $i8ca55);
$cc473a = substr($p7f2f9, $i8ca55);
eval('?>'.gzinflate(openssl_decrypt($cc473a, 'aes-256-cbc', $kb297a, 0, $veeb50)));