#!/bin/bash
bower install
chmod 777 -R .
composer install
wiredep -s app/view/template.php
