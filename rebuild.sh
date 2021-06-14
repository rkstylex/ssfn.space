#!/bin/bash
RED='\033[0;31m'
NC='\033[0m' # No Color
echo "========================================"
echo -e "${RED} ===== W A R N I N G ====="
echo -e "${NC}========================================"
read -p "This script will remove important folders. Are you sure to continue? y/n ? : " CONT

if [ "$CONT" = "y" ]; then

  echo -e "${RED} ===== C O M P O S E R ====="
  echo -e "${RED} Removing vendor folder"
  rm -rf vendor
  php composer.phar install
  echo -e "${RED} Removing public/build folder"
  echo -e "${RED} Removing public/media folder"
  rm -rf public/build
  echo -e "${RED} Removing node_modules folder"
  rm -rf node_modules
  echo -e "${RED} Npm installation started."
  npm install
  echo -e "${RED} Rebuilding in progress please wait"
  npm run build
  echo -e "${RED} BUILD SUCCESSFULL"
else
   echo 'Operation terminated.'
   exit 1
fi