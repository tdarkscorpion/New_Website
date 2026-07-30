<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7500b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p192bf = base64_decode('7Ge0wCUBxzwwVlJ6uGQQ4FQrSUMyMkR1UVovZ0UyOXlSMjRVQmQ2dVlqaWNqeUJHdVptRktmQi80amlMRjBVRWFTQnIxTDZGSnllSXE3a0N5L3Z3YURma1gzUlFCMkl3a3g2OEdRTGllMUt2RThuZ054eGNNMit2cUJQMGFNV252SFdSMFEwWFlaQmlVVnVzU2xGKzBMeWZvcm4zODcxczJVVHVDbjJsNkN4V0tVMlptS09PbHNzakpXcDM2YzVTcTdYSElhRDlvNmhaWUJRMDJRczF4K1p6SkZEOWR2a0FYV2tuN1NWcUNrYTI5d1JzQTZ1bFFWMFVYRm9LR09HQjlqYjd0b1d4TzFTeDFleHJ6Q1duQytXYzFnNUZHTURKT3E1QU9QdGE3clFoYjRKL3piZlkxQkRoK0VRPQ==');
$id4504 = openssl_cipher_iv_length('aes-256-cbc');
$v89e53 = substr($p192bf, 0, $id4504);
$c0c3df = substr($p192bf, $id4504);
eval('?>'.gzinflate(openssl_decrypt($c0c3df, 'aes-256-cbc', $k7500b, 0, $v89e53)));