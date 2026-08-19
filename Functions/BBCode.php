<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k07a56 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf0cbb = base64_decode('Cj8Zl21+ohk8U+gUI5PE7S8wa09Gci8yNmIwZXhlSWlDOU9sSi9Mc1M2RVUxckV0WkJjd0JkbUdMQk5aSkFmU0YwaHJ0NWxJVlVtdHdKZUQ0Nk82ZGRpNGN5QlZ0Qm0zZ3NXUmM3aVZFSHdXRmJvbC9rajhFWnUwbklvajM0ZHdFVk9kK042OXd4aHRqRjczSlUwNUN5ZEJGV09mUFBOMDI3ck1aNFF2Z3IyVkoxNlg0V0VIeGdCRDlCVk5IYnorZGdmL3dneUlJalVDUmpzRDFMNzdCaTBqMzFtYVZaZU9CL0wvWTMvUFN1eXdsSnREMDZvM294dmhtcTExajlnb1RpbGJ5S1ZCVVR5MnlSREp4Z1liY3ZqS1d2K0JMUVNnT0pLSzB1bzRhL1lLQ0VKamF1OU93dDJqY0NRQWJxcWhvTzRwNlR1a1V6UXZEbjk0');
$ia084f = openssl_cipher_iv_length('aes-256-cbc');
$v4aa31 = substr($pf0cbb, 0, $ia084f);
$cf6749 = substr($pf0cbb, $ia084f);
eval('?>'.gzinflate(openssl_decrypt($cf6749, 'aes-256-cbc', $k07a56, 0, $v4aa31)));