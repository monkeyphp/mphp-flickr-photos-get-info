


[![Build Status](https://travis-ci.org/monkeyphp/mphp-flickr-photos-get-info.png)](https://travis-ci.org/monkeyphp/mphp-flickr-photos-get-info)



vendor/bin/phpcs -i
vendor/bin/phpcs -pvw  --standard=PSR1 --report=full --report-file=./coding_standard ./src

php -f ./vendor/apigen/apigen/apigen.php -- --source ./src --destination ./docs/ --php "no" --todo "yes" --source-code "yes" --main "MphpFlickrPhotosGetInfo" --title "MphpFlickrPhotosGetInfo"
