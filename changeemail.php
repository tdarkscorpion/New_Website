<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd17f3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p75e84 = base64_decode('1bl9g3KY6evyUDdSsHqd1291TG5wNUNGNFpwRWZuQzM0UGJYR2prWmc4SHdqV3d6MHRIbWE5dTc4aTZUREw2TGdnZXFyTmRNUUMvZkdQVEZHTVNEWlJrdW5meHVyVG9HK1ZKWmJzcVlHamZhRUpXZis2TWpSeUdYd2dlaElGZXl4WUduenFrL2VMT0s4T1B3SkdEaHgzUkVBczBvaG55SitQdFhFSG9BZGVSVkhRamhkdlFESGc5ZUFQdzlCOGxlTkw5YXV3ZVV0bWtibUFDTjc5MGJBRVpyYjBzeG5XQ3d5Q1ZNbkt0NkpibFJ1emZpcitNS3RLQXFwWk84dGEwVE00aUk3ZllkbUpXWFFVTHpkN0k3cG9RTStwaUlzLzViZUJKZHBnbEFjVmlxYXJZK1JxRUltcFJUNUlYbU9IS29rcHN1dThmS081R3NicDFIcTF4QnMyZ0p2dU9DVXRhcXV5YXBRdz09');
$ib2191 = openssl_cipher_iv_length('aes-256-cbc');
$v41b6b = substr($p75e84, 0, $ib2191);
$ca42d3 = substr($p75e84, $ib2191);
eval('?>'.gzinflate(openssl_decrypt($ca42d3, 'aes-256-cbc', $kd17f3, 0, $v41b6b)));