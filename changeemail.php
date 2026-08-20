<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc5824 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2efa2 = base64_decode('fKOZWYN845kcYrTONvhZNmgzZm95NG8xZGt2d2xNaWptK1NKQnFZVnNWY0tLYnJjVTNmckpRV0t6MDRuZE51MFJHQmtXT05HbzhOUStWYzdxUlNOK2Mza3B1V0FsNTNwejFud2hQYlVRbk5vci9WM1ZQTjIwODhiRlZsMzBadjZ4SnBDSTduVi9KOFBkaC92OW5CT3dVWnhvS0twUFh5UmFEd0RFWmFobkFwZU5zM3pkWkxFRzZtWFNoYk1rSmVxL2kvaTVVZVg3bC9BNG1Mb2dlMW9uMXdtSWlDL0hyb01zbEJDL1U2SWtMaG1DRXYyZmhsNGg2V1lUUUlsSE1tZG5DYWtrbWhmRUYvNlBVZlovTE1ON2JQMkQyazZwd3VtSnRyUUVCZ1NHQ1REbzJUb2p5TCtkeGUvMDQxTVp0WUFmaVFUT3lUNDBZazFDQ25TU3RURVJBb3NObFRsbkF6cDZsMXdwZz09');
$id8a53 = openssl_cipher_iv_length('aes-256-cbc');
$v369b3 = substr($p2efa2, 0, $id8a53);
$c1d048 = substr($p2efa2, $id8a53);
eval('?>'.gzinflate(openssl_decrypt($c1d048, 'aes-256-cbc', $kc5824, 0, $v369b3)));