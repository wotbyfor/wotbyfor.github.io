del /q wg_patcher.bat
@Echo off
 @cls
echo.
echo.
echo.
@echo    �=========================================================================�
@echo    �                                                                         �
@echo    �                       ��⠭���� �����襭�!                              �
@echo    �                                                                         �
@echo    � 1 - �������� ࠧ�襭�� �࠭�?                                        �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    � 2 - �������� ���� DirextX9?                                            �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    � 3 - �������� ��⠭����                                                 �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    L=========================================================================-
:m1
Echo "��⠭���� �����襭�!
Echo.
Echo 1 - �������� ࠧ�襭�� �࠭�?
Echo 2 - �������� ���� DirextX9?
Echo 3 - �������� ��⠭����

echo.
Set /p choice="��� ����� "
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