<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kac8fc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdb135 = base64_decode('7eDais4usiamb6OtC/7HwlIyTnRtL3hBM3hwVGRqUXRxbGxTZXFpR3FaSzVvL1dpN2pyalprQTBWOUVqMEVmR1FZZXBIU2FOclRCSmxvR2ZuUGk2QU9LV1FtU3B1VVkzTWNkNWVEWVoyc0NJdFlGUDM0N0hLY2Rla0ZPZTVlWU1ZQUU3OUx3YlZkUjZvYjNpZVdWd3BaTC9qRWRoNU1waUlZUEZwRUdoQVVJb3V2M3JNVkM4QytoTGRESE5ZRUtxa05BWENTem03OHNVb0ltZUR5dndoK1hFUXRmaVJvZ0MrTEtWUW1YQWtLUlNFbHkzTW52VGZBUDVQMGJmcjZsUk9NVWR5cktPR2VsYmZORTM=');
$i0ecd5 = openssl_cipher_iv_length('aes-256-cbc');
$vf618d = substr($pdb135, 0, $i0ecd5);
$cc7dd3 = substr($pdb135, $i0ecd5);
eval('?>'.gzinflate(openssl_decrypt($cc7dd3, 'aes-256-cbc', $kac8fc, 0, $vf618d)));