<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9e4be = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf74f = base64_decode('ORdZaYESyANfhUvKcui1SGdTakJyTHdkbnoweitnZFZMS2pnbi9pRXhEV3N4cUlzdGFRd0xjU2dpc2xEWGYwZzgyQ2JZNE9rK29SajBNMnF6eUUwWDNlTTJtSFNWbXJQd1I3cFF3ZkpkUjM2OVhXMEwrNmovdjUxK0JLVkNmazQ4NTF6Uy9VdjIrR253RmsrcmRiVlZ2Z3FyTnZtTk02czN5UHhpOGFJL0E2MzlSRzJHTXllTnJQWlpxNDYzQk9WaDI5VFBBSVYrWmVTbGJUYUl5MjRmd0RUejlFczBra0tXK0FHR1VJandIQzlPeXF6UjR5ZzM0SWlsV3dpaEFMajVqU2EzTlozT1pmalk5cTFHa1E3ZHlLZkx0dzY0WTJqWm1VQ0JBWVVXWStSY2tqQkxKUlFwT1Jxb2d3K1BwdUhTT2JqTmlvN2pPRWVqYll1NzBKeFRSR2hqUm5TTU1TMW9VUXBLc25VbDRMelJQczhsWnBBRWt2alh4ZXZqVEVGZzlrMzFScXM0cW5yNjhqN2hJQnpEKytWck0rZFNNNERsRzMxNEE9PQ==');
$i13d8b = openssl_cipher_iv_length('aes-256-cbc');
$v7ab76 = substr($paf74f, 0, $i13d8b);
$c280a9 = substr($paf74f, $i13d8b);
eval('?>'.gzinflate(openssl_decrypt($c280a9, 'aes-256-cbc', $k9e4be, 0, $v7ab76)));