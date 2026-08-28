<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3b0b0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p61c77 = base64_decode('EDZuDnlKx8dcxkm0xZ/S621CQmdwblBPektjRnFkTUw0R3kxSkwwZUR1UlBVSThhNktZRG4zMitvMUplck9lTmxvaE9FQ0JVNC9lVzQwcGMzTWxHakp6d3FCMXVRRGdVZHl2WE5Wb1BwV3MrcGN1czNuN01wNjlHeWpzNFhLSWFtMko4bzA5VVVBdk10bTBxWi9tR1EzUXNFQm80elpMNUFLa1ptZzRNbERnZHo1VGFzZ24rMnVsbktpKzJGOG1KNmdSeU5nTGoyTm9zdW9kcEFtNjhMb25HQzJJT29rRkdlTjh0a2Y3c1RpRzVyb2E1TFhUQ2p4bHRCWkRiUDJOVWxWTHVJQWpPeGRQQjVzR3hwa1ViZmhoZzZmS2ZMQjBxTDY3QzFjeDlLSFZsbEE2QXI4YUJ5SEwyNjFMMGsrdFZRZmtyakZOT003TWsvMjBxckFkdTlmbWpTbHhlQ25lMWh5U3d0UT09');
$i766de = openssl_cipher_iv_length('aes-256-cbc');
$vd29d3 = substr($p61c77, 0, $i766de);
$c16417 = substr($p61c77, $i766de);
eval('?>'.gzinflate(openssl_decrypt($c16417, 'aes-256-cbc', $k3b0b0, 0, $vd29d3)));