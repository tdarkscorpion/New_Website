<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb6925 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p83ec3 = base64_decode('2vZK87GPA38JGEXE/mnx8m0xMjBOTFBDcmRzL1B3L0JwZTVtVGpmNFhMRGR4Ujg4RktNQmhpT0N4Q2d4QVVYdWFwMVdiMmduVnhZVUtNV3pwa3YxOURqTEFBV24xZ2JiQ2I3d0hGd0xTdm4zbHhISDlMUGtrWjIzNTg5QzRxOGpSdDJ2eS8vRkZDRDd4YytzeEkzN3lNcUpnK2RCNHNuT0pFN0NETHBObURxN2pMakorRnFKek9CeVJaYUN6ZDZ6Zi9OL0dNMFZVaU1sZE5zQ3g0aVFvT3pyajVPMGhJR0hxdE9qcXdIamRwT0pzOHk4ZGNFcVg0SGw0dDR5amVoOTFMVFQzRGdZK3BvYnZyQ3NsUUQzSjNWUzJOZHdobzJRYTNzVXAzeE1RMi9YQXFpbFJ3blZsd21BYWUrRWhDcFA0VkRVcm9zNlZkSE1KdzVo');
$ie3804 = openssl_cipher_iv_length('aes-256-cbc');
$v4ade6 = substr($p83ec3, 0, $ie3804);
$c76c36 = substr($p83ec3, $ie3804);
eval('?>'.gzinflate(openssl_decrypt($c76c36, 'aes-256-cbc', $kb6925, 0, $v4ade6)));