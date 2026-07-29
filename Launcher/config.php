<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf9c81 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2a454 = base64_decode('u1OL/zmANr5veAPFim0NJStFY0lQMk00OEZmYlFLbFZqNUFMQWhwQTFsbU5oRzJaNEZlVkZlZ3NoZ1doMFdoNmp3L1JxNy9vVmh1T1U3RjJ1RnlDSTd1YTVvTEx2RUNSUUdBd0pmbUI0V3Q4K1RCVkRkS0wyTGlRUDRveTZ3SjVPOU56dWU1dmpkdFJxMDZrM3NpbUpEbUNYVHB2dlQ3Mkp4L1Z6YUQ5bW9XMXZKZW13VmhJa1hVSzZCdWxEa2IwbldXa3YwVXdDSVUwWEtDbmNYTlFoYnd4TTEwdlNTZjM0VlJTckVFOEZUcGxNQk9KaU1tWGNYTllyZENVUlc5RFVwbEZpZzFhV2NUamtvT0k3cU91aWljMDI5bEtSeTNEUlBnU1ZZTlAweTFBTVM3eGpBWXR1VGpZV0pJPQ==');
$i35c7f = openssl_cipher_iv_length('aes-256-cbc');
$vfbd01 = substr($p2a454, 0, $i35c7f);
$ced253 = substr($p2a454, $i35c7f);
eval('?>'.gzinflate(openssl_decrypt($ced253, 'aes-256-cbc', $kf9c81, 0, $vfbd01)));