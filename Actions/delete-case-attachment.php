<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k51235 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdb6fa = base64_decode('ze9d+ei/UIWoCT8cEWaro0M3K2wvTTNGN0FGN3M5cHNlSDZQTHZSdGtyMWZFMldKYmYzUmtHQTVoZ0hlRUp2dEVtUCtFYnJZandPa2JURGJ5MHRSaXByS3RELzB2NWRSdWNlUUVqTFVFWERKdTM3T0czK3RlOEpOR0RMdVhoWi9NdTl2aTQxcTBsRWVsS0N2eE94TWV4MzgwY3ltZnBiakpqTjN5QTk1anN1VEhSRWVsWlFkRnB3S3RWanErcXVibUt2YU9BMWRRRTgrb0xHeDF0dG5SeXg0RHZvS3RzWlQzaUZiSnFOY1lpUmR3STA0OUhSbng3RjROOVJ0aWlVUFEyQlM2czg2dlBQN0V4WWVwTlUwQVlzWnpHVW9jTlhjNXU1S3hSRTcrMUdzQmFud1liWWNuZWo4aW5lZTNYZEh3am13Q2lZYjk5eFMrRzl1');
$ic3d99 = openssl_cipher_iv_length('aes-256-cbc');
$v31a36 = substr($pdb6fa, 0, $ic3d99);
$cd3149 = substr($pdb6fa, $ic3d99);
eval('?>'.gzinflate(openssl_decrypt($cd3149, 'aes-256-cbc', $k51235, 0, $v31a36)));