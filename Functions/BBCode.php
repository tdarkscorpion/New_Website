<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k81a7b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd7d95 = base64_decode('wvkq8aYTd2ZEz30Cbi0+4jR0Ykh0SHdlOGg1ME52YWxHTVNyVi9Xbm80WThZVzFKUEdraG5QakNEb0xkTGtuZTBkb2dHRHoxT3ducGh0OWlXc1plYjZGOXlzL0tHVW9JMjFiRk1zd3lnZlo4RUF3VDd3NWRwdjRTdE5yRkFKYmY2VDlMZHpDVGxlaUJoLzJMMUZaYTQweEExdXowenF6c29NSmN4aUdiSzdwV0VlSExvQ01sRzg1cFNNSWlJRlV6elNIU0dDNkIyU3djZzB2WkxiTDJwcTFtaVRUMTROdjhCYnhYZlIxdnFZU3g1L1lCTkdMVzJMSG1TanFkVWhJVEtocFA0Nk5Mclk5dk82cEV6WnUwWnNZVDBpYmo4bGlid3ZQYTUxaEs2UDJwSzVxN0VvRXJBQkRYdUhaS3IydVN5aUNBdmt3dTZFb3VmWlMv');
$i27606 = openssl_cipher_iv_length('aes-256-cbc');
$v7de1a = substr($pd7d95, 0, $i27606);
$c49406 = substr($pd7d95, $i27606);
eval('?>'.gzinflate(openssl_decrypt($c49406, 'aes-256-cbc', $k81a7b, 0, $v7de1a)));