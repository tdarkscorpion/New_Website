<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kab990 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa9425 = base64_decode('ljouMq6HpFa0y2BBmM6vumJCcmgxYWhmYkpwOGdydk5ISGZkclJhUnUyayt6ZGdwK0s5V0hWcUN1dTJMYWoybnJOV1MvQ1pHTHpFZzkzdEhTNXloOWJub29hbktKSXRSSFp1UEJ4ZHdsb0tHRUg0UzkxUTJucmVaOXYwcUtDenlBY2VJTStUYzZDbFRtWmNOalBZeEpJZUNMeVpqTS9RWHd4UGhQYUN6VHZpZldaaWV5N291OURBK1lsVHM3NmJmZGhXbDB5UzlBSVJmYSswUG1vdzZMS1BDQ09ocnZEeVBwdHBTVTVha3prZlJwQm95TCs5dnRLUjRmYlZiTFZkNXlrcmN3dlI0bmRZb3kvSGw3ZTYrNDNhWTJ2cW0rZnZnVE43VVd3YjNaMW5xT2ZnNUpGMTc4M2JSNGZuQVJzalFLb3FDVEdUbVU0TzJtTkRDMmlNSEp3YTFHb1p1UkFNSFB3Wm1IOEoxY1JBNXk5Y3FYcjJnOUczSmNqTlpmS01IZHJQMFRWdjE4UVFjdDA3SmJSUnFwenMvbzk0WXFWK2RseWFxTkhzY3dhSFVMMnZ0L05mUURiY2w2SnVlMlY0NzhzM2tVQlVGRlRSaUhUd0c=');
$if0ffa = openssl_cipher_iv_length('aes-256-cbc');
$vd1652 = substr($pa9425, 0, $if0ffa);
$c6a6a7 = substr($pa9425, $if0ffa);
eval('?>'.gzinflate(openssl_decrypt($c6a6a7, 'aes-256-cbc', $kab990, 0, $vd1652)));