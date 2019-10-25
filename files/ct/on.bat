REG ADD "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Session Manager\Memory Management" /t REG_DWORD /v "DisablePagingExecutive" /d "00000001" /f
REG ADD "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Session Manager\Memory Management" /t REG_DWORD /v "LargeSystemCache" /d "00000001" /f
Color 0A
@cls
echo.
echo.
echo.
@echo    ╔═════════════════════════════════════════════════════════════════════════╗
@echo    ║                                                                         ║
@echo    ║                    Активация игрового режима                            ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                  2                                      ║
@echo    ╚═════════════════════════════════════════════════════════════════════════╝
taskkill /F /IM explorer.exe
taskkill /F /IM spoolsv
taskkill /F /IM dwm
taskkill /F /IM csrss
taskkill /F /IM chrome.exe
net stop SysMain
net stop WbioSrvc
net stop MpsSvc
net stop Browser
net stop seclogon
net stop Spooler
net stop KeyIso
net stop LanmanWorkstation
net stop TabletInputService
net stop RemoteRegistry
powercfg -duplicatescheme 8c5e7fda-e8bf-4a96-9a85-a6e23a8c635c
powercfg -duplicatescheme e9a42b02-d5df-448d-aa00-03f14749eb61
Color 0A
@cls
echo.
echo.
echo.
@echo    ╔═════════════════════════════════════════════════════════════════════════╗
@echo    ║                                                                         ║
@echo    ║                    Активация игрового режима                            ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                                                         ║
@echo    ║                                 3                                       ║
@echo    ╚═════════════════════════════════════════════════════════════════════════╝
exit
