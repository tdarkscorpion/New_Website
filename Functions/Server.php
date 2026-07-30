<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k480ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5302b = base64_decode('fLNxDZ0bf4rmEp6RcZkLq3E3bVZvdG1lWkNjV0lmL2g0bmVRd3pvOS9OYVNGak9MTEJLUDZpZWQ5bWNOeURKSE9nVlAwSDVTN0w5RkxwcjdwTm90K1hVcFQ2YUlFcnlHeDk5aUMxUFFURm1YVE5ZSnBIbzFyVFJkT1Z5cTJ5bGhqZXpTd1kxSFh4MjVYRDUvcHNwVmNqOFdpNldvMXNoclF6cjlJQjVsMnZ4dHRlQW5UWmlwemZQWVpFaE1hMGxxYzRnZVBmc283Q1VSVHhncW55cmxoUHltMmRkWjA0TFhLZCtVOVNmZHpvdXljQ1g4bkpXQjZ2Q1hXZGE0bllpYmtBTkk2OThac2ZsWFJIZkt6V1VQdExMMlA1aWJpR3prMzRIVGtiSTdJVjIvZi9BcXIzTkMzaWJuWjZJPQ==');
$ic3cda = openssl_cipher_iv_length('aes-256-cbc');
$v0087d = substr($p5302b, 0, $ic3cda);
$c7d044 = substr($p5302b, $ic3cda);
eval('?>'.gzinflate(openssl_decrypt($c7d044, 'aes-256-cbc', $k480ae, 0, $v0087d)));