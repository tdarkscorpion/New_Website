<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kea340 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd73e4 = base64_decode('eKQPNadFp0SyGFv/NcU5b3dMUnhMT01PdVFxS0RuclkxaTJ6UXdsTDBrR3pVWndjdzh3VmU0M2VabGFYc3ZOQk5zd3dvcEVVZ3ZuRlNjY1BqQ2FIaVlaL1l2ZURLUmVPY3hqZzl4eE41TmNpM09EdkhsendmQmVtMkFmTGJkMGRwT0JWT2dHbC9Well1K2VRRkhLWmhmNmE3N25GUTFoNTBnWEQ2ekx6Vm1QKzlSdmJBNjlhYkI0VEpIL0ZuSkVXOFdvYkVaLzFsblJTc1ZUWWR5Y255MWJxYWJXRmF2SjBndkl1RUVYL1hYdnJ3SVNrT2xCcG90VGFqaG9RVWtoR3FZUkNYNGkxRE1MOFk1Sk02U1lSejdZN2lGYTNiM21vYTlWdlU0bi9uTjBrV3NOZTd4SDFTRXJ1NlZNPQ==');
$id379b = openssl_cipher_iv_length('aes-256-cbc');
$v0550a = substr($pd73e4, 0, $id379b);
$cbd869 = substr($pd73e4, $id379b);
eval('?>'.gzinflate(openssl_decrypt($cbd869, 'aes-256-cbc', $kea340, 0, $v0550a)));