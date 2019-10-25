del /q ByForMOD_installation_completion.bat
@echo off
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
@echo    ║                                                                         ║
@echo    ╚═════════════════════════════════════════════════════════════════════════╝
start /high WorldOfTanks -clientGraphicsAPI d3d9
set process=WorldOfTanks.exe -clientGraphicsAPI d3d9
start /wait ByForMOD\on.bat
goto checker
:check
cls
echo Process %process% is still running...
:checker
tasklist /FI "IMAGENAME eq %process%" /NH | findstr /i "%process%">nul
if %errorLevel% == 0 goto :check
rem процесс WorldOfTanks.exe был завершен, можно запускать следующий файл
ByForMOD\off.bat
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
@echo    ║                                  1                                      ║
@echo    ╚═════════════════════════════════════════════════════════════════════════╝
pause
stop
exit
