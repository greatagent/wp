:: wwqgtxx-wallproxy.bat
:: Main Batch File
   
@echo off
title wwqgtxx-wallproxy

:: genhash.inc.bat
:: Step1 - Try to generate hash table until success

echo Generating hash table...

:try
del hash.dat
if %PROCESSOR_ARCHITECTURE%==x86 (
	utility\md5deep.exe -rl . > hash.dat
) else (
	utility\md5deep64.exe -rl . > hash.dat
)

if not exist hash.dat (
	echo "FAIL TO GENERATE HASH FILE! RETRY..."
	sleep 1 
	goto try
)


for %%a in (hash.dat) do (
	set length=%%~za
)

if "%length%"=="0" (
	echo "FAIL TO GENERATE HASH FILE! RETRY... "
	sleep 1 
	goto try
) 

:: update.inc.bat
:: Step2 - Clean up hash file and do update

echo Checking for update...
utility\php\php.exe cleanhash.php
utility\php\php.exe updategc.php
utility\sleep.exe -m 1000

:: miscellaneous.inc.bat
:: Step4 - Old file cleanup

utility\php\php.exe miscellaneous.php

utility\sleep.exe -m 1000

:: startwallproxy.inc.bat
:: Step6 - Start WallProxy

echo Starting WallProxy...
start wallproxy-local\python.exe



:: startfirefox.inc.bat
:: Step5 - Start Firefox
echo Starting FirefoxPortable...
utility\php\php.exe firefox.inc.php
utility\sleep.exe -m 1000
