<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdfaab = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1bc3d = base64_decode('YzUKouM+3pKsttwIQZPda0NZQ3o1QjdSWVEwMXBpYVdwSEFsSEk0Ri9YMWlKQnh1SnRPRk1FY1BGT1JsUS9sNE1uMGxhWHdMSDU0UmdRWUg3VjVJeVp0aDBRTGlWeTl5bG5IVmNVaGhjdmMxUDk2R2VVcE1WYWVZcHZRbzZSd1VqQ0VCZm1CVnQ5d3NsK01IVG9uN2Fsb2xuQ0x1VWdnK2NGQmtPT2hJOE9EVTJzeHhyOUlJYXlvZzJiSjE2Vys1T1lXeG5JS0tZdlBSTnBJSm5wcGNOWHhXY2hlSWdjSW8rd3VDYk9YWUJvdnpWYTlaNy91Z1Fra1JXOGdya0V6UE0zd2plaGR4VjdHc2FMeUYwanBIUFdiWUV3UUxhUGQzN3dSdEFtM0txcmE3RC93NUdmKzhXNUpoVzVjPQ==');
$i060cc = openssl_cipher_iv_length('aes-256-cbc');
$vc5e94 = substr($p1bc3d, 0, $i060cc);
$c80912 = substr($p1bc3d, $i060cc);
eval('?>'.gzinflate(openssl_decrypt($c80912, 'aes-256-cbc', $kdfaab, 0, $vc5e94)));