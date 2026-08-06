<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kec6d3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2133b = base64_decode('33XaLV/A+7U3cIOSnqbPQVVZdDhEeWdHR1pRRUVwS2ZZa050MTJIMDlOMHZodG1ZYkt5a29ZQTlYQ2w4UDFDcFYzeWw0RzcyNUVQZDZRSHlxT2FKK1NPa2NGZEJsSGhrNi9leWM3UUgraHVqUWY3dWJ6NVpQYVFKOFoxb2xCQklUSGYzSUk3eThDL0lTZnE2ZlNTUmlRbTBJTUl3U0FnQ2tVRnlGMU5TMHhHcFFmRFliZmlHRzZmb2M4dXVPSnAwZkpVNmhnamZUcEFPODNxdEpydVNJUm50SFplSExDRzVycS9xaHdXMUlkRzM4cDRyVisxc2V2Ny9CN2wrS21pWlVSZjY5K29Ld00xM2I3ZlFSSFBpaFFVSERLczNuY3huU1dzUCtpaGNLOGN4cFJPVk5TNG9UT2pSR2FBPQ==');
$i0bbb2 = openssl_cipher_iv_length('aes-256-cbc');
$ve0a68 = substr($p2133b, 0, $i0bbb2);
$c5a5a8 = substr($p2133b, $i0bbb2);
eval('?>'.gzinflate(openssl_decrypt($c5a5a8, 'aes-256-cbc', $kec6d3, 0, $ve0a68)));