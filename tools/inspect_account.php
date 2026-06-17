<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb50b5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6ec49 = base64_decode('CFxnwJz6EWY8Mm/RRmbbMjR0SENBM1ZhSFNOT01WeEF3clk4TU5PMng0TUp6ZzJoK0pnWnpQUk1ZOUN4dVNJZmREa3oyWUk2UHBwT3JXc1IvaHVMV0xINk4vUVBuU25HOGZUTytaYjhPOG8rMy8reW5TOHhZV0ZHQmt6bFpBSVBpc1c1Nm1VdkZVall0bUMreVE2N3VhTTVJdnF4dmdjY0M0VzFIbGRxY2ZheWc2K3BZaUYxMGF4SFNIOXFMZEZYUXNvdld5cTl6cUE5L1hsZg==');
$ie0e1d = openssl_cipher_iv_length('aes-256-cbc');
$v464f1 = substr($p6ec49, 0, $ie0e1d);
$caee65 = substr($p6ec49, $ie0e1d);
eval('?>'.gzinflate(openssl_decrypt($caee65, 'aes-256-cbc', $kb50b5, 0, $v464f1)));