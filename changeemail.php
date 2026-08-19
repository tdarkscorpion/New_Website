<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfbbd9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe3e1b = base64_decode('Pm7xUZMG0H+gtiJf5GrENWdHbzcvZ3Jzdnh6Q2N5STF3R1ljZUhTQ0l0Q0hFOWFmK1l3YW5kRXlZWHcrL0wwYjVuc1JEUUl0UFpQbUx1US9XL01jMFUxTUhIZ0V5bWVKcWx0YTVleDRqZmllZmNod1M1aVlKMGxIYWUwVisya3FPamZuTWFmUlFoQWlrcHl2MDIwRzFFSGRvaEtoZm1wQkZma05zd3IzUGpiWVNCL3Q4bnY3VGFtL0x5cEozRjFGQURybjhZNFNFR1lUYlh4SGRQcEFEcVIvZmc2UXpTWXpEQWdUc21TL0tLN2hLSVZoN2t5K1VJeGtMSnBrQ2NkTzJ4dWlkZDZyNjFGMFdocUVROGk5K21hQ2M4bDM0WVlTVGkrYjlJaDd2TEVpYTcreXBnUTRab1pKTmVMMzF5VGg3NkxyK2tvS0RJbkVreDRNV2d5N281VFdYb01mU2k2bGxPTHVvQT09');
$if509b = openssl_cipher_iv_length('aes-256-cbc');
$v0590e = substr($pe3e1b, 0, $if509b);
$cc5788 = substr($pe3e1b, $if509b);
eval('?>'.gzinflate(openssl_decrypt($cc5788, 'aes-256-cbc', $kfbbd9, 0, $v0590e)));