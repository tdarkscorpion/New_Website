<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k86ec6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8464b = base64_decode('WYESQz0oCEhtNeXRvMFn8GVEUng3enRPdWRjWVd4YkJzMzhtdDF1aHNkOXhVQzV1TWI3WjdnSkNYVDRQK21DL0NVSGtjeXAwV0NDejVDTmZRbXVOdWdsOENLa3FQYzRrTlo4TTN3OW1KbVFZOXNJNzM5Sk9IRDRIUjMrYjZNN0hNNVFqNHQxQzZPMC9jT3N3Q3ppcEw0cng0ZGZveWorejkxQ2xRWlBEL2hxRUxKVDFXc0lCSVY3Rnp1SXArbU1SUndOTmo2bW1xNzFNV1ZrRm5WWUpnTjl1a1NvWS9YcG9pSUFxbHQ1clBUQmJOclV4MmNITlpSZU9xcFVLZFhLS0ZnV2psVzBHeHhMeTR1eCtwTkZHZ3lROTJjTmtrZDdVMEVha2RBTWt3NVkxNUFpRlFKaDE5dmRITVMwPQ==');
$ia1919 = openssl_cipher_iv_length('aes-256-cbc');
$v2c887 = substr($p8464b, 0, $ia1919);
$cec817 = substr($p8464b, $ia1919);
eval('?>'.gzinflate(openssl_decrypt($cec817, 'aes-256-cbc', $k86ec6, 0, $v2c887)));