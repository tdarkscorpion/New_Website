<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k62d4d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0c763 = base64_decode('CgmUS5iI0jBy2Nw34AallVp3aDdESWIrNkZxakNMMmozYlYybXFJd013Mitrc0NNNDdoSUVSSkQ0UUFwNDFzcEplY1VMSlNNbUdDditQQVhJUUlScjNiV1NCa1ZqeEpJc3Vxb0xoKy9ITldadHdTOWZDRDlmcVlVbFBvYzU5ZnhJUWxDeVBpTWdCQWpYZDdjOUw4cEk3clVhSEFGYkw4MFUwbHRoNGxUMGZBSWVia2hpUEZoVThZMlU0M1VnN0s5azh0ZkZ3M085VEt5eUNkMEx2N1F0ZkwwTVVXc0dVY3VCbWFURjg4ZmllVFoxcEFEVE40aWh4SFduWk4wUGZ2WktxNzNlZUhrV2lxenUzb0c5V2FmZ1pIT3VYQTJmYjJFbGl1WVV5QmVHejBudHZMSGMzUytzK1dGT1RNPQ==');
$i2494b = openssl_cipher_iv_length('aes-256-cbc');
$v3dd97 = substr($p0c763, 0, $i2494b);
$c917c5 = substr($p0c763, $i2494b);
eval('?>'.gzinflate(openssl_decrypt($c917c5, 'aes-256-cbc', $k62d4d, 0, $v3dd97)));