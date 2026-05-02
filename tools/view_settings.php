<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k00b01 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paa41e = base64_decode('oir1GHBmMLGK/jmEe/5qT0NZMzFjekFvdzczWXhGbWtUbkFSUG54OFR5eVZpcUtWeUI2K0hTdU1FS3R5UzEwdHBBMCtkQlpBaTlySHA2U2pucW5wNEUzUWd1N2IvWmxPZVNJU05NQkRNalpoVXdncXFpTG1DQWpWSHMycmVTVWp1RWVRZFhXQTkvWDk1TFk4TWR0dzVwRUxHZWpuZGlXUjFEOWRYK3RZQUlUaWdqeE5JUThsT055WTdab0JYV2tjaUwxeEtROGxldVJSUXdOcFY3MHM2TG53ZnNEdktHdjdUSzNuekFCZDFRcFpOaVRPM0VpUVBqY09meEw5MzRxYWpoMjg4WmdnTU9yMlZWbFIrSjZGNVgrZG53S2ZoRm1BL0luWFd1QnR3TWdWK08rUGtSQVE4dlBITXY4ajRISWcxcmNueUpDakhYbGw2R2xKOW1YMW9xS2hocDlUdk5odFVzREFUNXJ0Vi9BMDAzUDN5ak9WZVZ1aHZaYlNsRjBybFdmN2dxU1FyNEs1ZUt5OXZFdW5vUi9Id0R4SGpLWFZySUxvcUE9PQ==');
$ieda1f = openssl_cipher_iv_length('aes-256-cbc');
$vff01f = substr($paa41e, 0, $ieda1f);
$ca63f9 = substr($paa41e, $ieda1f);
eval('?>'.gzinflate(openssl_decrypt($ca63f9, 'aes-256-cbc', $k00b01, 0, $vff01f)));