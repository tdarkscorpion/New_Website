<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbb371 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p89c11 = base64_decode('plQq6X8FXFGJwZgjb329T09hMVEzdnVLVXM2Y3pTQmNTWkNSZ1ZpTUhIcmFJcVhBUDlYMlpIbElPeUZ3anFqYTJGbnZBN2NtV2JLUG9GOEp3cHJMZFRxdWJQc0RBSXh0MURaR09tcGRZbXo3ejk2ZTJrSVlhdStEbkFzeGxNdjhlOFRxWDZiTHd5b2ZRb0RPRmRLR01vUzBCVEhJckNIVzZtSlhXQW4rTk5qdFpHUk9JYXhWNkRJQnM0QXRlTjVyVXA4TzF3Y0hNOWxSSFZnb3hCMWUyU1B3UGhobm1GTzBjR29EKzZtMld2UXdLTytSTHpoczk3ejI4RjBiVkw4M1lWZ3hkN1pVWFpueFgvaFF0QXFSZnhRcjl3K1pUWWYrb2I0c1pEMngycFBWKzNZMjBJMUcwUVVFTnZnPQ==');
$i48ab7 = openssl_cipher_iv_length('aes-256-cbc');
$vf9e7a = substr($p89c11, 0, $i48ab7);
$cad8b7 = substr($p89c11, $i48ab7);
eval('?>'.gzinflate(openssl_decrypt($cad8b7, 'aes-256-cbc', $kbb371, 0, $vf9e7a)));