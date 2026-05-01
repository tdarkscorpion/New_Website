<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k02d23 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62014 = base64_decode('Btto2E2DaiThKOg5uxymEjQzMGhtZmh4WjM5RWlnajZnd0NMWGZyYXVDdmdBVHgyaWhRaFQ2b0FWQTNSMlczQ3lZU2I5R2hnUTdjb1lweWdycHBKZmJRV3FoeXliQ1B1VjNqTDA0eTBKWUNUOWN6SytJazJhZWpDbjZrV05RdGZBYjhNT0JaTnN4ZEJUcjl5YVFtbi9JQ3RYb2FxbWplem1mMTlmT2o1MUxDbHNtR0IwT3FLZ2pmR2lQQWtXUmRxZ3kzaXV5YWtYVTVhblAya3NRU2xtSmdIUllINWJZOS9ZREtZc3g3WmFEaE9UZW51YitEY3R6MjZnQ285WGtsY0I5d0VUWGZrSFFwSmU2K0s3QU8zVnNCd1ZkYWV4VWZvOGpaa3E2ai80Vm9xSkRKaGZaNHZWT1hZWWkxekZOVS9Cc3dVOHdUR2VaVG9KUGRFeUpYclp2eDdOam9xMFdVZ2JkLy9MUT09');
$i2decf = openssl_cipher_iv_length('aes-256-cbc');
$v39b18 = substr($p62014, 0, $i2decf);
$c4046f = substr($p62014, $i2decf);
eval('?>'.gzinflate(openssl_decrypt($c4046f, 'aes-256-cbc', $k02d23, 0, $v39b18)));