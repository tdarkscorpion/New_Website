<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k71e71 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p84ecd = base64_decode('cScQ3GkNfYzyG+VuFzs1mk1KSDlvaUJkdWhtT2twbWs0TkY3VEo3N0NUcjFDc25aZFJwRFd1TVJjM21zbUo0Tzh6aDY1NVU0MUZ3SnNlWnNQWk5vdXRPNDBTam5mMUtNSE8vOEhleFc3SnZIK29nMVQ4M0tSUm8zTnNPd3V4R2doMWh4T0dhNlIvcHJuU1pKSDUvYkZkWjVpK09PMEtxZGR5MGQwUTF3cGZ4ZVpFd1c1ZTN3VWp6STNKUFBxelB4UEx2YjdTNXFMSFVYMHA5bkdYWVNCVmQwVjF5aEFORjFPT1FndytzSG95ZXEvdWpKeXB3SVJhSERseVlvYk5xZGxqUElsNHhBQXVHN0ZaUnhHbTlHQVhxbnRYbUZOOFBOMTZxd0lNUEUxNU5wb2htaitpaG5GOEhnWDlubDYwTWJnd2NnSTdXQkxZb2wzWXAvSWp2Smt4VGRzK1FlSVo0cExKZ2dnUT09');
$i0f3b8 = openssl_cipher_iv_length('aes-256-cbc');
$v3ad68 = substr($p84ecd, 0, $i0f3b8);
$c83b06 = substr($p84ecd, $i0f3b8);
eval('?>'.gzinflate(openssl_decrypt($c83b06, 'aes-256-cbc', $k71e71, 0, $v3ad68)));