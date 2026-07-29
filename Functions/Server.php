<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf7011 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb8308 = base64_decode('0mAt5ojLOBYSkztKaezbQ1pKYStlejY1bHorWU5BWGdVbGJpenYweDdnV2JVWnJJK01aZ2NVeVpNQVpvQjA4Sy9PYkN1S1Z1KzNFbml5U1UwcXBDK1UxWWNsdm5MTjYwNndoTlp6TXVzNExwTEtWTmNZYkZFVG1DTjVxdXZITlg2WFdhR0FjN20wNGxmZUM2Zy9sOVlzNlBHRHJyMHYvYVp2cHUwaUJQV0FPbW9LbWRiRnJnRGxNWFNpZkNlUnRPczNQcXJoVnVqU3lsOFpLdUxxY08zQWtYS2tOcUh2K1p2bjBiNTRoRWEvY1g0S1djcTIrd1ljRWNKSDZneWNwTndVNTRza2lURno0VnQyTmZYS0pTTmNpelljSWtVMjlma0RJWmYyalJ0Q2xXdDRKUjhoNGZLWElIcHJnPQ==');
$i23ec6 = openssl_cipher_iv_length('aes-256-cbc');
$v2e332 = substr($pb8308, 0, $i23ec6);
$c85bba = substr($pb8308, $i23ec6);
eval('?>'.gzinflate(openssl_decrypt($c85bba, 'aes-256-cbc', $kf7011, 0, $v2e332)));