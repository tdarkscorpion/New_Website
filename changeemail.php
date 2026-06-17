<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k236d6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4fc52 = base64_decode('nErXpSKp0jhw37ZQv7LegUtlVGtrdU11RDl6VXA3QkhUUWVVaFZRYS9oOFFVYmxTV0ZIUTFvRzRtaktKRXpuMzlaU1M4dmJOS0kyS1lZWnFXak8wbFVHbGJMYndtNVBmV3RIL0IyZ3YrUWJzQnFFamxXNVVwNFR2SmYxbDJsZ1RtSEptOFZDbmtzRG9henJFVVJnWGJWSWNOcmx0RVNZYllWWmw2QjZmUk1XSUlBaXF6YkN3UkRtTFVqV0NvQUlIWlBNOEcxaU1IN0ZwM2hJY2dqaUJ4azdFWTBCdHlzVHIxRVEwUWhKa2hCQjlmUnMrTm96WFFvN045MDVpKzQzQlBUcWE5ekwyd3JXWExnMDJOSVFwZ0J5dnlJd2FiUTh6SU5nUnFiRnY2UEdScnppd1I2bFFtUGZZa0wvcThDUHJuY3JPa2hZQzlhamJHVEFycll2dDhVTmJQTDFyRFZ4MXd0b1Bvdz09');
$icc685 = openssl_cipher_iv_length('aes-256-cbc');
$v6c30a = substr($p4fc52, 0, $icc685);
$cdcb3a = substr($p4fc52, $icc685);
eval('?>'.gzinflate(openssl_decrypt($cdcb3a, 'aes-256-cbc', $k236d6, 0, $v6c30a)));