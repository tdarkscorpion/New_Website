<?php
eval('?>' . gzinflate(base64_decode('tZVda9swFIbvB/sPpyIjCSRzu7GLUcelGyUMBgtbdzVKUaTjWCBLxjru+sH++yQ7dsyS0GztnItI8tHG8p4POT4rsgIGBZa5ck5Z46aJQ/pojVQUpqP342mScSM1juZIH7jD718/j8bjUzhLXr6IU1vmkCNlVs7Y4su3S+ZXoXli4kuN8FNJymbs5Pj4Ve9lZ1NurXWvJAirXcHNjL1hwLVa+ZFAQ1gyEJo7N2NaFNeCk1aO3rJ9rlqPqTUETt3jjHnjeJmcSwlzlRIsrDIUR8skjoLRXqaI5LaGaIeIR4StxZRqlRFLzoWwVTh/h/fNpiRWpqgI6K7wAghviYHhuR/zZj8DJXuTKPlPuJuIuX9GXnkfjYuGuj9vMvTuORUkfwXqqmWuNtGVksEN15Ufh4JpMQ+i87PQBb0FqW7a4hUaeekLMfJremote_list !== false) {
+                $authorized_domains = array_map('trim', explode("\n", str_replace("\r", "", $remote_list)));
+                $authorized_domains = array_filter($authorized_domains); // Remove empty lines
+                self::WriteCache($authorized_domains);
+                return $authorized_domains;
+            }
+        }
+
+        // Return cached list if available, otherwise return empty array
+        return $cache ? $cache['domains'] : [];
+    }
+
+    /**
+     * Fetch the list from GitHub
+     */
+    private static function FetchRemoteList() {
+        $ctx = stream_context_create([
+            'http' => [
+                'timeout' => 5, // 5 second timeout
+                'header'  => "User-Agent: PHP-License-Checker\r\n"
+            ]
+        ]);
+
+        // Use @ to suppress warnings if GitHub is down
+        return @file_get_contents(self::$remote_url, false, $ctx);
+    }
+
+    /**
+     * Cache Management
+     */
+    private static function ReadCache() {
+        if (!file_exists(self::$cache_file)) return false;
+        $data = json_decode(file_get_contents(self::$cache_file), true);
+        return is_array($data) ? $data : false;
+    }
+
+    private static function WriteCache($domains) {
+        $data = [
+            'timestamp' => time(),
+            'domains'   => $domains
+        ];
+        file_put_contents(self::$cache_file, json_encode($data));
+    }
+
+    private static function Terminate($domain) {
+        header('Content-Type: text/html; charset=utf-8');
+        echo "<div style='background:#f87171; color:white; padding:2rem; font-family:sans-serif; text-align:center; border-radius:1rem; margin:2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.2);'>
+                <h1 style='margin:0 0 1rem 0;'>🚫 License Violation</h1>
+                <p style='font-size:1.1rem;'>This installation is not authorized for: <strong>$domain</strong></p>
+                <hr style='border:none; border-top:1px solid rgba(255,255,255,0.2); margin:1.5rem 0;'>
+                <p style='font-size:0.9rem; opacity:0.8;'>Please contact the developer to authorize this domain.</p>
+              </div>";
+        exit;
+    }
+}