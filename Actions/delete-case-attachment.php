<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc9230 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p01b38 = base64_decode('jVoFmpWbqtATWvzZu7Xuw3lGY3FPOEszem9DRmZsOGVKZGxjd3Y4ZHl0bE4xRlhXeVk3VDBmTHYrQ1ZPM1VWQ3ZYWDdSRHpvSWhwWkdqTVVnZ3oyWUkxLysvMGZRQzY0VTc5YTZ3cEI4Qzhmckx0WWZLdHRWYWo4eWJLcVRSSVMxc2JSTXdxME9MbEFad2tRbmJjZXFRUEdtNkRiRERZNzBVM2FscGwwL1VXL3YycDJCclVIU2t4S3NvQVVPeUJiZTRYRDZCekNyVHlwRm1tSVYrWFBuUXFCN2ZNNHpMNUhMV1NSRzZkTEI0SWt5OEFaNmRpdTVCb2dLRkRmcjdjRU9zWnBUMGkzVmtqTWhWYzdkZDdkV2o4ZklKU0Q0dmxwTGVCL1Q5SjhsVE8vaVBDM1g4ajhvTllLc0FURWNnTnNFTXZLYi8yQUJ3NUZqem9k');
$i62730 = openssl_cipher_iv_length('aes-256-cbc');
$v74196 = substr($p01b38, 0, $i62730);
$cd3bc9 = substr($p01b38, $i62730);
eval('?>'.gzinflate(openssl_decrypt($cd3bc9, 'aes-256-cbc', $kc9230, 0, $v74196)));