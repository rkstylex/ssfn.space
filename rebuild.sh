#!/bin/bash
RED='\033[0;31m'
NC='\033[0m' # No Color
echo "========================================"
echo -e "${RED} ===== W A R N I N G ====="
echo -e "${NC}========================================"
read -p "This script will remove all assets in public/build and public/media folders. Are you sure to continue? y/n ? : " CONT

if [ "$CONT" = "y" ]; then
   echo -e "${RED} Removing public/build folder"
   echo -e "${RED} Removing public/media folder"
  rm -rf public/build
  echo -e "${RED} Rebuilding in progress please wait"
  yarn build
  echo -e "${RED} BUILD SUCCESSFULL"
else
   echo 'Operation terminated.'
   exit 1
fi