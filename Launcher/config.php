<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8935d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p92f50 = base64_decode('jwISK1Pty8TaWIMGdeOKPzY1cVpKVzRZdjA3Lzg4ZitOdThzNnFiZ2Ixa09Ic2t0UlZ1dWtTbEpEaHRhUzRlU3dtVlNkMFZPSmRhVVdoNTBmOXExMERiQm5FaW93UzNqNjQ5aWI2MEtlUEhaVWgvaGRzS0tzZGUvNWxiYlVTVFYyK3N6MDJwL2ovNHlNRjZXalBOckZudmU5UDRJbGlleS90N0tJNVdQOVo3MTNHeUFqSzFNTWd2VTlTWFRJaWUxSW42NENCWURIbHZkb0NwblhucnBwYVN3ZDQ0MjdrdUE5TlRncTVmK2NSREZ1MXVpaC9oQVdNWE1BcU5PcnoxRzgvdDl3ZE5GRzlKZ25JbUJITVFwMmtHeU1MUmFSMldCeXduakxpSVppdVpwMzhuOVhsWjlYbTRLWmY0PQ==');
$i42cac = openssl_cipher_iv_length('aes-256-cbc');
$v8dfbe = substr($p92f50, 0, $i42cac);
$cada96 = substr($p92f50, $i42cac);
eval('?>'.gzinflate(openssl_decrypt($cada96, 'aes-256-cbc', $k8935d, 0, $v8dfbe)));