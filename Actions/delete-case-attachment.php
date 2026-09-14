<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k18b59 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peea34 = base64_decode('Nv29WoL4c1oTSYuVLiw1TjdTM2pqdklXNWpuL3JxdnJYZHM1OXhVSkhTQWtBbnp0L21ia2pFb1I0RVVYdUsydU5xM0J6a01IWHNzZUxPMW4xWERGenVvSjYvYkpyenUyK3J2eG92TFlsR1dkSjVFWEFsbmJMMWxFNExhWlR5TzZqZkVOOCtPZFFqMlFaQWxHaDdzNTlCUko1a2tWM2tkdUZUVnF5VjZxMFo3RE9IYnpKYzhpeVpNRytJbUMvTnIraDNoZTJ6cmEzWjhTd204L1NKdzFtWXU0djFoUVNmelpzUmNReXcvWmh0bm9VWGdoOEliV0lFQWJVSUhmRmNEVlBWcTUydVZzRVgyS1IzM3hhVCtIcFFWcDlmd2pFRndrMzErbzZVTjh2QkNQbzU5Rm5hNEZ4RmJpbU1sUnFOWGFDVWRFU2NxbVV2K3I1RmRT');
$if7dba = openssl_cipher_iv_length('aes-256-cbc');
$v002c7 = substr($peea34, 0, $if7dba);
$c51887 = substr($peea34, $if7dba);
eval('?>'.gzinflate(openssl_decrypt($c51887, 'aes-256-cbc', $k18b59, 0, $v002c7)));