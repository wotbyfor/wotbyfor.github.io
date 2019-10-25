del /q wg_patcher.bat
@Echo off
 @cls
echo.
echo.
echo.
@echo    г=========================================================================┐
@echo    │                                                                         │
@echo    │                       Установка завершена!                              │
@echo    │                                                                         │
@echo    │ 1 - Уменьшить разрешение экрана?                                        │
@echo    │                                                                         │
@echo    │                                                                         │
@echo    │ 2 - Запустить игру DirextX9?                                            │
@echo    │                                                                         │
@echo    │                                                                         │
@echo    │ 3 - Завершить установку                                                 │
@echo    │                                                                         │
@echo    │                                                                         │
@echo    L=========================================================================-
:m1
Echo "Установка завершена!
Echo.
Echo 1 - Уменьшить разрешение экрана?
Echo 2 - Запустить игру DirextX9?
Echo 3 - Завершить установку

echo.
Set /p choice="ВАШ ВЫБОР "
if not defined choice goto m1

if "%choice%"=="1" (start ByForMOD_breaking_options.bat)
if "%choice%"=="1" (del /f /s /q install.bat )
if "%choice%"=="2" (exit)
if "%choice%"=="2" (stop)

if "%choice%"=="2" (start WorldOfTanksDX9.bat)
if "%choice%"=="2" (del /f /s /q install.bat )
if "%choice%"=="2" (del /f /s /q byforcmd.bat )
if "%choice%"=="2" (del /f /s /q ByForMOD_breaking_options.bat )
if "%choice%"=="2" (del /f /s /q qb_buforcmd_unpack.bat )
if "%choice%"=="2" (start https://vk.com/topic-164047579_39948413)
if "%choice%"=="2" (exit)
if "%choice%"=="2" (stop)

if "%choice%"=="3" (del /f /s /q install.bat )
if "%choice%"=="3" (del /f /s /q byforcmd.bat )
if "%choice%"=="3" (del /f /s /q ByForMOD_breaking_options.bat )
if "%choice%"=="3" (del /f /s /q qb_buforcmd_unpack.bat )
if "%choice%"=="3" (start https://vk.com/topic-164047579_39948413)
if "%choice%"=="3" (exit)
if "%choice%"=="3" (stop)

@stop
stop
exit