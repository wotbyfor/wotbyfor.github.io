del /q wg_patcher.bat
@Echo off
 @cls
echo.
echo.
echo.
@echo    £=========================================================================ø
@echo    ≥                                                                         ≥
@echo    ≥                       ì·‚†≠Æ¢®‚Ï(Æ°≠Æ¢®‚Ï ¨Æ§) Ç†Ë ¢Î°Æ‡?               ≥
@echo    ≥                                                                         ≥
@echo    ≥ 1 - World_of_Tanks_RU               [1.6.1.2]        ByForMOD v31.1     ≥ 
@echo    ≥                                                                         ≥
@echo    ≥ 2 - World_of_Tanks_RU  èêÖÑáÄÉêìáäÄ [1.6.1.3]        ByForMOD v31.1     ≥
@echo    ≥                                                                         ≥
@echo    ≥                                                                         ≥
@echo    ≥ 3 - World_of_Tanks_CT               [1.6.1.0]        ByForMOD v31       ≥
@echo    ≥                                                                         ≥
@echo    ≥ 4 - World_of_Tanks_Sandbox          [1.5.0.0]        ByForMOD v31       ≥                                                                 ≥
@echo    ≥                                                                         ≥
@echo    L=========================================================================-
:m1
Echo 
Echo.
Echo 1
Echo 2
Echo 3
Echo 4

echo.
Set /p choice="ÇÄò ÇõÅéê "
if not defined choice goto m1

if "%choice%"=="1" (byforcmd -c "http://wotbyfor.github.io/files/ru/wg_patcher.bat" -P / )
if "%choice%"=="1" (start wg_patcher.bat)
if "%choice%"=="1" (exit)
if "%choice%"=="1" (stop)

if "%choice%"=="2" (byforcmd -c "http://wotbyfor.github.io/files/runew/wg_patcher.bat" -P / )
if "%choice%"=="2" (start wg_patcher.bat)
if "%choice%"=="2" (exit)
if "%choice%"=="2" (stop)

if "%choice%"=="3" (byforcmd -c "http://wotbyfor.github.io/files/ct/wg_patcher.bat" -P / )
if "%choice%"=="3" (start wg_patcher.bat)
if "%choice%"=="3" (exit)
if "%choice%"=="3" (stop)

if "%choice%"=="4" (byforcmd -c "http://wotbyfor.github.io/files/sandbox/wg_patcher.bat" -P / )
if "%choice%"=="4" (start wg_patcher.bat)
if "%choice%"=="4" (exit)
if "%choice%"=="4" (stop)

@stop
stop
exit