<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6e879 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p89398 = base64_decode('a7542N7URe5zQKAvdqZ1P0tpNGFtK3ZoSnZIUlpYd0ZoWUpuQUpsQng4VkVncXpvbklGamxxci9ocWNzSzBaa01UNEVhODduQnZOSjMxQWJnMnBRWGdYT2dZelM2V0hxcDg4WWkzVGVtRTdlVmVwMU5xM3NWK1hBMmFnMlVJaTk1U0hjaUQ5RExPN3lUdGI4V0NSRmowN295cWRrK09Jakp4eHJLUGM2YXV0dlk5aWoxampscUZJUjYwRmlhZ3JScDJiTHp4U2VkTWJNVlRvMW50L0pjZG5BTldBaDFsaEZmNTYzWVlqRzRBUlNYdkJKaEppcHdDUW0wNE1CV0poYTUvM3A1WTdRbEdzMjFJOEFpQVcyeTlPZXpYUW1Kd1J3ZkVrNFlkYmRJMXdxNnZ1UC81eWl0Slk2enJ6bGFqRStGc3M5SzMwUkFXMzRHcHZwYjYvdVd1QW5PRXo2UHZoWU1pOEpSTkxlZk40RE5XQzlFRUErcHlJUzB4bmRRdzNKVmRkb25GQm9mRXoxcmM5SURicTM0Y3BoSHUxNit1RklrVXhZamc9PQ==');
$ie5d2e = openssl_cipher_iv_length('aes-256-cbc');
$vea160 = substr($p89398, 0, $ie5d2e);
$c26236 = substr($p89398, $ie5d2e);
eval('?>'.gzinflate(openssl_decrypt($c26236, 'aes-256-cbc', $k6e879, 0, $vea160)));