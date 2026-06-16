<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3b867 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pce954 = base64_decode('pynWMye4uflVg3pLeDge9WdnYWRhWllTRzMxN3N1STQ2eUg1VThDam5FK25lZVo4WEJpSWVFdXVWSHgxYW5VUGE0OCt0MHRHd2QyOEhmRWlEUmlYcExQbSswUjU3cTZ4Q2ZqVW1kQUEwcllyai9zMkh3dGY0SDNySk9iUHpIS0h2RlV4V3FBZllBOFlDTTJaempXYjNwS3A2dHZseEZ3VXRqSWI5cy9pbmlHWjZGTHJuS0YzQ1JsdXE3b0J6WHloQnNLd0NseHo5L1dLbmdRUE5wNWtsWTJJT3dQc2RlVFRDcUhKM0pSMXlWRlo0Vkx2Q0YwUlBEazJMS2VjSHYraUxTWDJuK1VSTmVPUWVia0ExV0d2bEhjdHovaTFIdnVCNFhzak00QnJsK0lwZUhmUFFBMmVqa2Z5eXhXcC9jNmNjWjJld0xIS3RKZmY5TE1OUkRmUlVDZHpvbm9BdjRYVjBLYTF6QT09');
$i6dceb = openssl_cipher_iv_length('aes-256-cbc');
$va5ba4 = substr($pce954, 0, $i6dceb);
$c5b894 = substr($pce954, $i6dceb);
eval('?>'.gzinflate(openssl_decrypt($c5b894, 'aes-256-cbc', $k3b867, 0, $va5ba4)));