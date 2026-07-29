<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8ce76 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8acfd = base64_decode('8C38rTdlpTMi3bzUQra48FBOZG5rTm9ZaFI4WlQ5TmRnOEFkSy9uN0RQZDlydGJUb2QrNnRzdUVkWjhHejJya0s2dzZtZXpNbXl2MFRIeVlvZWRub0ZkK0M2TVE0ZkpCcVRIaFpVRkJEQXY1Qjk3SytocmFTbmM5VGM2VUF6VDlJbnE2bzVYSXlUWFppb2RDOEk5QWs4cnlyTzBVYk5qNUxmTnZ0akR1Nk41UU1oOVprV0tKazFpdTlOcURhVUM2KzFqbXk2MzNvNDlDVTVkSnBvbGhTUzZnc29nL25adkE1WW1hZFlzc0hHcjRuRWozaUljRENmMHRiY2dYWnIybnpldmQ2K0w0OGRWOU5UUDNCcm1kVW5HRTV2eUhGVFRScVdPOFhiRHNXWVhqYlo4cW0wUXV1NG5JL1liS1JBb1JpVFQwZVhPb1c1elpHd29n');
$i6a474 = openssl_cipher_iv_length('aes-256-cbc');
$v4f713 = substr($p8acfd, 0, $i6a474);
$c57371 = substr($p8acfd, $i6a474);
eval('?>'.gzinflate(openssl_decrypt($c57371, 'aes-256-cbc', $k8ce76, 0, $v4f713)));