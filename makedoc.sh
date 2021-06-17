#!/bin/sh

mkdir -p ./reports
mkdir -p ./documents/apigen

if [ -z "$1" ]; then
    apigen generate \
    --title 'Onmipay Common API documentation' \
    --source ./src \
    --destination ./documents/apigen

#
# Left here for further expansion, ignore this for the time being.
#
elif [ "$1" = "common" ]; then
    apigen generate \
    --title 'Compay Common API documentation' \
    --source ./src/Compay/Common \
    --destination ./documents/apigen
fi
