#!/bin/sh

# Change to the project directory (replace with the correct path)
cd /home/tmuac1/public_html/main.tmu.ac.in

# Pull the latest changes from GitHub
git pull origin main

# Clear Cache
php artisan optimize:clear
