<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k38987 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2d158 = base64_decode('o6QuKtl4J3uyZLhIXDONjStIeGg5a1RtNCs3VWg0UU5rRnJlNjFqU0dtdjJndEdhdm51Y1c5SHUvV01lZStnVXp1RklVa0dUOEtCU2M0QmRVN2ZXQXpYb2ZCd2QzRDNsWDc3bktON0Nlc0lvRDNaY0xnSithbDd5Zmo4bkxwY1NIUGExWkhNT1JucTI1dEFYVEFJNGN0RHJRNTd0VU91NGlWMVJSQS9pWW5kUjQvNUpvNm9Ed1ozanlJWFV0eUFpblFTV1VGZC8yUWY2VkNud0t3NFpYY29PdEdsUDl0eGRLME9RektqTzM0OXJVVE8wQWErSTRYZUlId3BLamdYZXg5TTIyODJhTWdEK2FXY3Y=');
$i2701a = openssl_cipher_iv_length('aes-256-cbc');
$v8d69f = substr($p2d158, 0, $i2701a);
$cbad19 = substr($p2d158, $i2701a);
eval('?>'.gzinflate(openssl_decrypt($cbad19, 'aes-256-cbc', $k38987, 0, $v8d69f)));