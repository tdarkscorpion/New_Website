<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60583 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb9763 = base64_decode('MwcsJTX+fUqPNu7vsylOuVdaVGZST01pNzZzZ3poT2dKSnltb1FPQm8yK21pdjNzelRidlUxSy9RTklXcThteTFwd0doMS9iOFArT0VGbGNSbTV1SjFYZExzbjAyWmlOaDRBc0dSdldSeXhrcTh2ZXVodFpWK3Zhczl6OFdvZktjTitLVG5QMGNzTUlFMDlvNHFBU2tUcVoyUmdRYU8xZ0tXeHM3KzNvbzdvcGdLQ1VENittNWNjdkFMcGJ1ODIzY01UemExN3d1MkxpanFHc1BWMGs3QlFWU1pQdUtIbTUvOGhFU1Nrdk4zTitKY1hWNU1PTmtoMC8vVElGb1lGMmN4TnJ1aFFPRlJsQ09iQ0ZxdFJhMktrVjl5OS9qNkxDbjFCU1BRV0tQSmVqS3ZmdnBoeW9TOXFBWU5OclBlQUw1YzNubXBJejBwWVkyZmw5aDEzQmNEWUZqbGcwM0kyS0pyTUJ0QUpWU0xWRmtYeHNQMXNON2FESnIrQjB3TVRXbnVuNkcwUWowVEEzR0tYQnpEdG9DcjA1cWtGNEtGWDVqNDgvNTlud0w4bEQrNDJtb2RLR1BFSlhad2IxYyt3aWw1aWlPU0l4T3haSFk5S04=');
$if23e4 = openssl_cipher_iv_length('aes-256-cbc');
$v3e1d6 = substr($pb9763, 0, $if23e4);
$cacce2 = substr($pb9763, $if23e4);
eval('?>'.gzinflate(openssl_decrypt($cacce2, 'aes-256-cbc', $k60583, 0, $v3e1d6)));