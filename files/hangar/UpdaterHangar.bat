@cls
echo.
echo.
echo.
 
for %%A in (*) do (
7za x -tzip -y -ir!HELL "%%~fA" -o"res_mods\1.6.1.2" /S /I
7za x -tzip -y -ir!scripts "%%~fA" -o"res_mods\1.6.1.2" /S /I
7za x -tzip -y -ir!spaces "%%~fA" -o"res_mods\1.6.1.2" /S /I )
del /q 0_Uninstall_Hangar.bat
byforcmd -c "http://wotbyfor.github.io/files/hangar/0_Install_Hangar.bat" -P /
byforcmd -c "http://wotbyfor.github.io/files/hangar/0_Uninstall_Hangar.bat" -P /
@Echo off
 


Color 0A
@cls
echo.
echo.
echo.
@echo    �������������������������������������������������������������������������ͻ
@echo    �                                                                         �
@echo    �                    ��⠭���� ������ �����襭�                           �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                          �������� ������ ����                           �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �������������������������������������������������������������������������ͼ
PAUSE


del /q UpdaterHangar.bat

exit
stop
exit
@stop