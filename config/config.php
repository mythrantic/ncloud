<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocwp26ftrix0',
  'passwordsalt' => 'VvyZkK37v80ez7Izv3R3jZKTWWdVxx',
  'secret' => 'twznE6UMbsrWQcW1rjfWyGdK8zq5Grl1DImtJj1OSCoGDT8/',
  'trusted_domains' => 
  array (
    0 => 'localhost:8081',
    1 => 'nextcloud.valiantlynx.com',
    2 => '10.0.0.33:8081'
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '29.0.1.1',
  'overwrite.cli.url' => 'http://localhost:8081',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'password',
  'installed' => true,
);
