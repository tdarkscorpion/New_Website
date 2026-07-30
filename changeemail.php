<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5a5bd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4b39 = base64_decode('QJl2tfWBnmVJsb5enfdL0lp6d2h5WFY0VzdrQ0EzcWFocjY3YVJvOTFES242TE4vWktDbFlZdDFtRGF3N3V4UFhsdEZBdlgwV1h1REpNWEJCMytQWTFBeElBQVE4VThEOW40emNyZ0FHNXkvY3FOSzhsZnRnaGpIUDQ5YmRvdkl6Y3ZOQTN6eGlocmw1RkZqbm0zVXVIOHBqQ1FCOTVaWmJaakkydUFYTHBuY1dMQlNYdVFqOUNoN0dQdjR5NVBCU21UVWpvOXJPRngxdEIybC9IRndzY0Fhb1l1NEVmYUw4ZDAvdXp5dlJ4WTZmZFBtNXBHWkVxVU1UOCtYMWVhNnp6RVhoTFpKTG5yN3ZaUmFMQUxLK0xrazFtZExzQkYvTWtody92cnBvaEkvQ0ZGaDIzc2hFdGRhR0hFZFMzL203ZmlSbUFlbGgzdFpCQVNQR1dGQXNJZDZZWWdVRkRkYzhuTkVEdz09');
$i3bde3 = openssl_cipher_iv_length('aes-256-cbc');
$v2729a = substr($pa4b39, 0, $i3bde3);
$c47bc6 = substr($pa4b39, $i3bde3);
eval('?>'.gzinflate(openssl_decrypt($c47bc6, 'aes-256-cbc', $k5a5bd, 0, $v2729a)));