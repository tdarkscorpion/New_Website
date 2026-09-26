<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0a8e6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe8668 = base64_decode('MegG1/aVSbRxaArpbORXqXJ0L2ROTlMvK20vNVNTeDE3VG5lM3ZncnNCOTlkNzJzQm4wL1JMcnFmT0hNVitwUmwzOGZFTk9rNWJUUTFDdVpIS1dEd2hBUnBvaHJLaTJKbDZQRnZzNXJJU0VBbnhLZExCNDBqYU1pV0o3VEFzVXQyTkR6WEprMGlwKzBxdmc1NWlnMXd2Q0thUmpJRDV2bng1Z2RyYlNTTmZOb1NWUnNnY2RZejlLTmd5c3VCdDRQTjR2cVRwTm5UQXQxSWNUL0ozN3ZFQlRxZGZEeDVtd0FySUpjS1o3QWxpMk5ERkJLSnVqeTVRcDM3RW9CR21jVGNXSjZjdG84NmRTS0MySFBUUXdwL0VRNkNUc2IvVnM2cWk2ZmJrYWFTdTFNOHdPZlg5YXJUYUpuY0JZPQ==');
$i167b2 = openssl_cipher_iv_length('aes-256-cbc');
$v6ba05 = substr($pe8668, 0, $i167b2);
$c497ad = substr($pe8668, $i167b2);
eval('?>'.gzinflate(openssl_decrypt($c497ad, 'aes-256-cbc', $k0a8e6, 0, $v6ba05)));