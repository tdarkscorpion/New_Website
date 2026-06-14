<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k75db9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p88bfd = base64_decode('U0Sww+OMN5eqY6xdQ8ZI51F6MnJTcCtETXM2aWNCVEhRbFpXYWVMcHE3alk1UzFVcGFjNDMxVFJaZlduNGRZL09DcXRZTkdYOFE2bmY1K2VObGxuMHgreVNwb1NHRStPWTFJUlJ3dXloa0pnRHRYMlZRaDVXQjRhMVZIeGtJMlJncjV6SlZadlFPK2RzaDlsenJRMzZRS3hBWGwxK1dqcnVtSU1KS1RTYmNpY1RtdW9TTDhJamRNQ3Q4ODNIbVZJUTcrWlNMb21xWlFGN1BKMTZjTkplNXllYU9zVEpKT2NTd0hkLzAra0ZVSnRpUGgxTmRDdkFyZ1BJckxNb2toSC95cS82SXhBNjNmVUJEY3laUURHc1BVZXNka2JEOWVVRmlTZTRPU2UzdWdtdytqT0tuSFhRNGdvOG1ncUV6L3V1ekxBQnE0dUI4amFUak1qVnVzTGxxQ1Jkd1JYc21JYzlKZVRIQT09');
$i0749d = openssl_cipher_iv_length('aes-256-cbc');
$va3bac = substr($p88bfd, 0, $i0749d);
$cf1047 = substr($p88bfd, $i0749d);
eval('?>'.gzinflate(openssl_decrypt($cf1047, 'aes-256-cbc', $k75db9, 0, $va3bac)));