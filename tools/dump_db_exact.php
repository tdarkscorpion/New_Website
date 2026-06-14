<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka50bc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7c3b9 = base64_decode('sMD6JQmRYeYNvMuI3EhqinhiRFhKSE9mN3lBVkh3VWJ2WXJPMnlWOGtJbUxjWDZDclJQTHRQWko5aFpRK0U0NGhRZWJJeXhTQVMrSlc0bWZ1aGg3dkVzaEptSGROQlYydFNBUU5ON2lmQm9MYTZGU016MTRoeDBjSXAwVERrR0pFVTc2V2NvL01XZ2lncXJjREVYT1ZTNk50NkZ4RFRBQzE5cXpuVkFKZ2FPdXBxNzBwT25rd0h2aDhRWHpHejhxbHN0RjhnbXJETTBKajNyYkloQ1VzZDZUeERKM2lOOUpOOS9Lc0M4Zk5xS2lPdUVBZEdGc0lxai9kZ2VOUTljc2N1ZkNWWEFzY1F4Yk1JcUxDZkFsS0xUd1R5NFppOE16alExZ2s0OFd0MndEZ2pwbVplbjkwejRSbTlRPQ==');
$iff591 = openssl_cipher_iv_length('aes-256-cbc');
$ve3c25 = substr($p7c3b9, 0, $iff591);
$c53219 = substr($p7c3b9, $iff591);
eval('?>'.gzinflate(openssl_decrypt($c53219, 'aes-256-cbc', $ka50bc, 0, $ve3c25)));