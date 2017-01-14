#!/bin/bash
bower update
chmod 777 -R app
composer update
wiredep -s app/view/template.php
