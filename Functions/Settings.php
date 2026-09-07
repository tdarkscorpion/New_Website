<?php

       
$loadedSettings = array();
try {
    $db = Connection('db_misc');
    if ($db) {
        $settings = $db->query('SELECT * FROM t_settings')->fetchAll(PDO::FETCH_ASSOC);
        if ($settings) {
            foreach ($settings as $_setting) $loadedSettings[$_setting['setting']] = $_setting;
        }
    }
} catch (Exception $e) {
    // Database connection failed or offline; continue with empty settings
}

       function GetSettingValue ( $setting , $parseType = null ) {
              global $loadedSettings ;
              $data = $loadedSettings ;
              if ( ! is_null ( $parseType ) ) {
                     if ( $parseType === 'Bool' ) {
                            if ( $data [ $setting ] [ 'value' ] === "true" ) return true ;
                            if ( $data [ $setting ] [ 'value' ] === "false" ) return false ;
                     }
              }
              return isset($data[$setting]['value']) ? $data[$setting]['value'] : null;
       }

        function SetSettingValue ( $setting , $value ) {
               global $loadedSettings ;
               $db = Connection ( 'db_misc' ) ;
               
               // Use INSERT ... ON DUPLICATE KEY UPDATE to ensure setting is created if missing
               $query = $db->prepare ( 'INSERT INTO t_settings (setting, value, title, `use`) 
                                       VALUES (:setting, :value, :title, :use) 
                                       ON DUPLICATE KEY UPDATE value = :value2' ) ;
               
               $title = isset($loadedSettings[$setting]['title']) ? $loadedSettings[$setting]['title'] : $setting;
               $use = isset($loadedSettings[$setting]['use']) ? $loadedSettings[$setting]['use'] : 'Input';
               
               $success = $query->execute ( array ( 
                      ':setting' => $setting, 
                      ':value' => $value,
                      ':title' => $title,
                      ':use' => $use,
                      ':value2' => $value
               ) ) ;
               
               if ($success) {
                      $loadedSettings[$setting]['value'] = $value;
                      $loadedSettings[$setting]['setting'] = $setting;
                      $loadedSettings[$setting]['title'] = $title;
                      $loadedSettings[$setting]['use'] = $use;
               }
               return $success;
        }

       function SettingValueEqualsWith ( $setting , $eqWith ) {
              return GetSettingValue ( $setting ) === $eqWith ;
       }

       function GetWebsiteOption($option) {
              try {
                     $db = Connection('db_misc');
                     if (!$db) return null;
                     $query = $db->prepare('SELECT option_value FROM t_website_options WHERE option_name = ?');
                     $query->execute([$option]);
                     $rows = $query->fetchAll(PDO::FETCH_ASSOC);
                     if (empty($rows)) return null;
                     $last = end($rows);
                     return $last['option_value'];
              } catch (Throwable $e) {
                     return null;
              }
       }

       function SetWebsiteOption($option, $value) {
              try {
                     $db = Connection('db_misc');
                     if (!$db) return false;
                     $db->exec("CREATE TABLE IF NOT EXISTS t_website_options (option_name VARCHAR(255) PRIMARY KEY, option_value TEXT)");
                     $ins = $db->prepare('INSERT INTO t_website_options (option_name, option_value) VALUES (?, ?)');
                     return $ins->execute([$option, (string)$value]);
              } catch (Exception $e) {
                     return false;
              }
       }