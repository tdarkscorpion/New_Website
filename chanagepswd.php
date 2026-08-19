<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k37cbe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe43c6 = base64_decode('Hz0K6TMtUJNG6sDoUobyPHhtUWtPSkZISHBRdFJqeFN4SDBRRmFPNlBKbTlvYmROb01WaVFIZ3IyMnRpditYOXlEWnZnS0VER1VFUTRqSFlleW9MemkzTjg5ZldJY2Z4ZzRoZGdQTTdZSkhvRTZNVTFxZktQbFBpRllTOUFZd05NRW9zTnhWa2ZlejdzNnNGNXJPNUlRa2dMNnEzRTIxQk9VTHIzZzVYYXlCZ2ZYcWFEdVJJRzI5UFR1R3ZMQTUzZTJOT2k3WlVjVlkwZEVENXRNcEFUaUtjVWU0dzFsN3FPeXlVdnNGa0FzU1ZBSThuSk42OWl2UlY2YmcwS1hpNE9TREhlRGdoQmhwMkw4ZWhtcEE1SEYwTGRyc2orYVF6UmxUcUZEWWovV2RNQnZEUHJ3YUhVSDFodWpuWFl1TVhUMmJET1o1eUNhT3RNTEUvdHZQZzdiV0dpc2hReFBWSHlLQVlOdz09');
$i6f59f = openssl_cipher_iv_length('aes-256-cbc');
$v8a066 = substr($pe43c6, 0, $i6f59f);
$c9af4a = substr($pe43c6, $i6f59f);
eval('?>'.gzinflate(openssl_decrypt($c9af4a, 'aes-256-cbc', $k37cbe, 0, $v8a066)));