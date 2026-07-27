<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0e3a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3af58 = base64_decode('lrjF4zx916stg4riDtwRjGxFZFRXR0ZSRWx3MDk3WGJIQnlwQW00MVNZcVArVmUxeGszbzRmNmJhYmxxM2VTOVVGQlBtNXQ5ajhYMmFrSm8wanlMUGRCRWpITFpaSjBlSExTTGc1bUF2RHVlYTQ2ODJURnpKMmU1YUZmckVpTUZ3YXBERWY1SEQ5eUVrYmdHSXNqeTk1bXVvRm02MkJqUFNLTG9HTzkyWnBhQWlXSG83TFMxWVYvdDVucGh3TlZlcjArT3ZCSmhMMEVuQXRXN3FYQmFsZGx5YWgrUVJ1a2F4bWl2cVVMU0ttUG5zSmpXdUhObnlXN3R3SWpNb3MxUHZzV0NjQndJWVZHbVBCdmY1d0U2bVh5ckxaRWxGUHdkais1dGdKT0xxNEd3dFB3K0F2MlRRNm5jNDhNPQ==');
$i01ecf = openssl_cipher_iv_length('aes-256-cbc');
$v052a5 = substr($p3af58, 0, $i01ecf);
$c5a034 = substr($p3af58, $i01ecf);
eval('?>'.gzinflate(openssl_decrypt($c5a034, 'aes-256-cbc', $k0e3a5, 0, $v052a5)));