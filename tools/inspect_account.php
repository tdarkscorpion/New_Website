<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8cbbf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1c61d = base64_decode('DexJg33WXkrLFivHfu7fa1NCRWVhTUhUU05sUDdpb2xaNUlrbktEaU1yK2h6dVFUaDE2NU9TWHg5SFl6RWZHSGZ4S3oyUGQwSUxIU0ltNE0vWm5zMDh1b3F0aTAyTGxDQVJDcmFMVlNFSGdWQ2JjTFB1VlpyVFdNbWx1K2lLa2hiZHN0a25wZEZVdzdRUTJTRDVRNWROZ2FZdkllSUZ5SVdEVTVHT2FrMnpGNENsVVIwOW5yZkR3ajNybEFoWTZxOUs4OWEwN0k5MEIrNzM3RA==');
$i1f446 = openssl_cipher_iv_length('aes-256-cbc');
$ve0df0 = substr($p1c61d, 0, $i1f446);
$c8249f = substr($p1c61d, $i1f446);
eval('?>'.gzinflate(openssl_decrypt($c8249f, 'aes-256-cbc', $k8cbbf, 0, $ve0df0)));