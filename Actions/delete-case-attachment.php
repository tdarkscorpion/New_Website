<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc7c26 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7dca4 = base64_decode('y69xtB8qEDUMyOe1Hv50clZQUmlxMXliSW9NUFRDT3ZnZzRsQ1ZWZCtLeTVPNklENDR6clJvTkRCM3pRczN3MjIvS0tMOEV5OUVucXhiOEhMK29tZDZhaXNmdFlRVTlrNFVRaUZaRlhqMVVVVm85TWNiaVlqa3U1dTlBaEM4YTh1Skh4RklWajFDUS9mYkVmMFRZL3B1SjkxYmRmeTFqOTMwcVhDQmtjVlRpU2lkR1luajdBaUJqVHRzM3YyY2JBWVRXT3hFZEZnNEFiOXI2NDlNNml2ZXcwdUVTd05CRi85UUM4QVJCSEhOUkx4cDh2a2NCdHpRT3pTeWYrSWdCTnZ1Smg5cGN4M3RwZEJPeVBjd1Z6dUdhVjFXTGZjZzQvZWJXUW1DdEZwRjREUEpYR1J5QWdUT0VWazRhTXhvMzRXa3luNWgzVDFJbEhPQlZG');
$id28e5 = openssl_cipher_iv_length('aes-256-cbc');
$v585f5 = substr($p7dca4, 0, $id28e5);
$c4286a = substr($p7dca4, $id28e5);
eval('?>'.gzinflate(openssl_decrypt($c4286a, 'aes-256-cbc', $kc7c26, 0, $v585f5)));