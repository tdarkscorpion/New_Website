<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k78ca0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pab946 = base64_decode('AGSd+16XLYcwiPIS27mt+mR1eW5yMTd2bDF1WXN0Ry9pcHBzQnM0MTdrWHB6NGF0YzV0L1VFUmROUW5mRjcrSG40ZXhmLzV5eUMreFRJWmpJYXlBeHZIMi92NFZBYTNiMHFXaUdSNW50MWtzc2laWlVMeE5qd0haYnBWYmpiRUdmOU1hamJteFFoYng1K1lQTTVvZU5LK01EeVRhcjladWtPUE5SZHNKc3M0dWVxR3hxdSs2UFhXa0lGamVvSlpaOU1QNUI3ZmVyTnJPeGZLZkRmOGlSQWtXR091ZEkrVHFacjVCMEhJZ29NOVVoRm9YdTFqSDNYdkhFam95WHF0UGhxSldOQzdnVFA2SWdYNjRGYmp0eWZiWGJiajFDSHd0aWtWUDJOU0ZPM0gwUzdFQnR2M3RlU0xEeWNNPQ==');
$i281ec = openssl_cipher_iv_length('aes-256-cbc');
$v4a08d = substr($pab946, 0, $i281ec);
$c8b5f2 = substr($pab946, $i281ec);
eval('?>'.gzinflate(openssl_decrypt($c8b5f2, 'aes-256-cbc', $k78ca0, 0, $v4a08d)));