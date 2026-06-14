<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k01d3c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a27e = base64_decode('Y28pkPyo3xzD5gxdpi2nSld2VExpb2R6a1p1VDFHY3BMR2dsbHJzSjVXVWhkemRxcHp3bk5xYjZzYmNZenIyTGJmTkZMMXhhK1N6a2RxdEFWbW5NSEpmU1lBS2dnVnZTbEdIME1TTHVERldXQnRYSFVhQ05acVFuWkFFK29VckFBa3h4bS9ZbEM2RzJGblFOT04zR1B4U2pjdExDWWRrRHRtM3FFSjBzcnJ1T0hYZUNzTTNjSnNISjhJUTQ0M3lSU3lFc3I4QXRtRE5WUVR6ZEZPYkxkZlZnNk8wNEt0MVZ5Y2JMOG14RmVaRUhMN3BTcVUvQ1Fzc2kxRlVFdG56V0JJVmRsRURIcGEvMkxHd0NxZURhTklGN0RWNjAyZWx0bURGWmpCSU9Ka28rMnYvWmhCSzNXYUZUbGEwPQ==');
$if6eb3 = openssl_cipher_iv_length('aes-256-cbc');
$v09c53 = substr($p5a27e, 0, $if6eb3);
$ca0fe6 = substr($p5a27e, $if6eb3);
eval('?>'.gzinflate(openssl_decrypt($ca0fe6, 'aes-256-cbc', $k01d3c, 0, $v09c53)));