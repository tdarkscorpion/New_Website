<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1fd97 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p18209 = base64_decode('sT7v/azD9q6m/zIRjZesJks2TGxaVEpHVUU3YzN6RThoZFJ5SXlMaU0vYVMzR3AxYitOcEJLMXUwdk1XcG5PU0hZN3pRbk9DM1M0VzEwajQvNlRHT2o0VzB6ODluY0NnTExiMUNmSDlETFJ1aUc2WWsvaW5ieDFVemkybC9mSUVDVlRyaU00NTRKOFc4dFJzd1kvUVlRZStkY0trVXBLcnNjWDVFQ3FkazE3eXd6WmZVUHhuak5OQUpEUktHL2xsWFpIMFl5amh1UDZKMjArUEpVVkErdGcwY2xycUs1VmRoSnBQVWVNbFpuT2FxeU1aQlJSbzdRMHNlWkhBbkpHWHRWdCtzSlpHUC9teUUzM0ZMQURmMGVrSlMwY0N0eDF0RVlSSTJwbkwwTTZnMXBqOFI1VlVKT2VaYUNrPQ==');
$i4f309 = openssl_cipher_iv_length('aes-256-cbc');
$v34d0e = substr($p18209, 0, $i4f309);
$c026be = substr($p18209, $i4f309);
eval('?>'.gzinflate(openssl_decrypt($c026be, 'aes-256-cbc', $k1fd97, 0, $v34d0e)));