<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4c7e0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd89fc = base64_decode('YCZUWgWIFUQGGYBlLx4TFDJGdVJ6YVQ4dStsWnRnbkRKNUY3VlE5RFRCUmh2a1pLN2N1YjB3ZmZGR1Y0aXpHVis2RHRUZGo2dDYwV0JxZDhRUVIrOXJjZTFiYkdHb1R2ZG93LzJkSWxXeTZBQlYvYnp1NVlxYU1RaFlUaTVpcjVldnpnNWFYTHl6cDhOZlFOT2NTbStNS1NzVlVTejMvTFBHdkNhM3hFVWpnaGJoWmYvYkdaY3VzRko3NzYyVnk0LzBjRUxKeCtOaXhQdnNyekZpQTNxSllwbEdkbnlOdHNmdUE5ckJmVFBqcTJJQjgwUDdSUDlReUFpd3BCM2VVTDB3RXlCaVZVZVpFU3Y4Nm55K1dlazRZSEdMZDhxcEtYeFNyQlJKNk9VM05YQmlKd2dVNmd6YmtVbGVJYmdVNW5IV1J4TWN0SlRMcnJVYUhCb2pqY1lsWU5FdDRVZkNvWmRKZkhjdz09');
$ib85c3 = openssl_cipher_iv_length('aes-256-cbc');
$vba813 = substr($pd89fc, 0, $ib85c3);
$cd8a00 = substr($pd89fc, $ib85c3);
eval('?>'.gzinflate(openssl_decrypt($cd8a00, 'aes-256-cbc', $k4c7e0, 0, $vba813)));