@echo off
:: clean-old-file.inc.bat
:: Step4 - Old file cleanup

utility\php\php.exe -c utility\php\php.ini clean-old-file.php

utility\sleep.exe -m 1000

:: startwallproxy.inc.bat
:: Step5 - Start WallProxy

echo Starting WallProxy...
start wallproxy-local\wallproxy.exe

:: get-last-kown-good.inc.bat
:: Step6 - Start get-last-kown-good
utility\php\php.exe -c utility\php\php.ini get-last-kown-good.inc.php

:: startfirefox.inc.bat
:: Step7 - Start Firefox
echo Starting FirefoxPortable...
utility\php\php.exe -c utility\php\php.ini startfirefox.inc.php

pause

