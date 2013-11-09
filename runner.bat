@echo off
cd /D "%~dp0"
:: startgoagent.inc.bat
:: Step2 - Start GoAgent
echo Starting WallProxy...
start wallproxy-local\wallproxy.exe


:: startfirefox.inc.bat
:: Step3 - Start PortableBroswer
echo Starting PortableBroswer...
python27.exe startbroswer.py

pause

exit