@Echo off
 
:m1
Echo "�몫���� ��஢�� ०��
Echo.
Color 0A
@cls
echo.
echo.
echo.
@echo    �������������������������������������������������������������������������ͻ
@echo    �                                                                         �
@echo    �                    �몫���� ��஢�� ०��                              �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �������������������������������������������������������������������������ͼ
PAUSE
start explorer.exe
start spoolsv.exe
start dwm.exe
start csrss.exe
net start SysMain
net start WbioSrvc
net start MpsSvc
net start Browser
net start seclogon
net start Spooler
powercfg -restoredefaultschemes
@stop
exit




