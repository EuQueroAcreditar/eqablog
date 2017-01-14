#!/bin/bash
bower install
chmod 777 -R app
composer install
wiredep -s app/view/template.php
