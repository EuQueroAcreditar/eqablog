#!/bin/bash
bower install
chmod 777 -R .
composer intall
wiredep -s app/view/template.php
