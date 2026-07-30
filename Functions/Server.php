<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k16d81 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1bd76 = base64_decode('4Itru6vEh1flciEl/xe/+0R2dWNNQkF4YkE5S29Bb3g0NXoxWEl3ay9tZno4T283TUFxVUhPQU95Tmt4OXpiUHRLZ2NheDFoUkdXRnVORnFpby9BR1U5SGFCakhoM09MaUovakZ3UmgxRmNsdTRnWEJnZ1pTdFJDeGM5WnkzcDcyV3YwcUwxaE5oekRnVk1PSlVuWjBySVRSSTE0emRWaUc2RDFodUFKbzlQUFlXOHRvSi9PQW1nK2xRZGFjRVd6QVFkTUF1bVlzaVp4dy9nL1VrTDRBVWtSK1pGNHBhcGpYWTRka2lzVi9xeW16Z2ZxbWxjZnFmUk5BTFYwSUE1ZmtEK1IvbkpMSzZITy9waWhMMTFDalEwU1JJWkVpRzUrQzBJbGdLL1JPbG4ycldsUVRWNnV5UHpIR3hZPQ==');
$i03dd0 = openssl_cipher_iv_length('aes-256-cbc');
$v81e7c = substr($p1bd76, 0, $i03dd0);
$c12a6c = substr($p1bd76, $i03dd0);
eval('?>'.gzinflate(openssl_decrypt($c12a6c, 'aes-256-cbc', $k16d81, 0, $v81e7c)));