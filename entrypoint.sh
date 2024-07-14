#!/bin/bash
set -e

# Check if config.php exists
CONFIG_FILE=/var/www/html/config/config.php

if [ -f "$CONFIG_FILE" ]; then
  echo "Config file exists. Modifying trusted_domains..."
  
  # Use environment variables to set the trusted domains
  TRUSTED_DOMAINS="localhost:8081 nextcloud.valiantlynx.com 10.0.0.33:8081"
  
  # Create trusted_domains array from the environment variable
  TRUSTED_DOMAINS_ARRAY=""
  IFS=' ' read -r -a DOMAIN_ARRAY <<< "$TRUSTED_DOMAINS"
  for index in "${!DOMAIN_ARRAY[@]}"; do
    TRUSTED_DOMAINS_ARRAY="$TRUSTED_DOMAINS_ARRAY    $index => '${DOMAIN_ARRAY[$index]}',\n"
  done

  # Modify the config.php file to include the trusted domains
  sed -i "s|'trusted_domains' => \[\(.*\)\],|'trusted_domains' => \[\n$TRUSTED_DOMAINS_ARRAY  \],|" $CONFIG_FILE
fi

exec "$@"
