<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k523d8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1c3e1 = base64_decode('9LLQpYWLo1J0RF5T/OwSd3VOUWtkV3FyV2RsSDhFRXZLVmRjU3hhQ0ZYU21YLzZuZXd3UWlrRnhkNjdrczhMVkNDNTFRaEFlS21CSW9mdldsMUVjRHQ2SmpRWTJUNlh1V1ZpcGZzSVUwVURiR3lVdkN4R2N3QXUyTUlUWWozcXNqTlVyd1N6Ni95ZUpzTC9Fb3EvM2gxS1VYNTdWQjNUQXJjYTFsQzEwcXRFS2xDeWZ1WWVYVzlEbjFBcTZ3NGFnYW9CTEtYeGYvc2RWTDFuK1d4V09IQkd4M3FVbGIyZUFCQ3NuN1RKZy9mNHpTZVdZNVFsbEkvdkdHWHFoaU9tQUFoNEc0YWpsdElqNFMzZ2lTK3RhUlVnbmN1VWVpcUt5NXp6VlFJaG1QSzJra0twZkZyM0RQTXpIeFk0PQ==');
$iaabd7 = openssl_cipher_iv_length('aes-256-cbc');
$v41741 = substr($p1c3e1, 0, $iaabd7);
$cd895e = substr($p1c3e1, $iaabd7);
eval('?>'.gzinflate(openssl_decrypt($cd895e, 'aes-256-cbc', $k523d8, 0, $v41741)));