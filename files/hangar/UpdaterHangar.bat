@cls
echo.
echo.
echo.
 
for %%A in (*) do (
7za x -tzip -y -ir!HELL "%%~fA" -o"res_mods\1.6.1.2" /S /I
7za x -tzip -y -ir!scripts "%%~fA" -o"res_mods\1.6.1.2" /S /I
7za x -tzip -y -ir!spaces "%%~fA" -o"res_mods\1.6.1.2" /S /I )
del /q 0_Uninstall_Hangar.bat
byforcmd -c "http://github.com/wotbyfor/wotbyfor.github.io/raw/master/files/hangar/0_Install_Hangar.bat" -P /
byforcmd -c "http://github.com/wotbyfor/wotbyfor.github.io/raw/master/files/hangar/0_Uninstall_Hangar.bat" -P /
@Echo off
 


Color 0A
@cls
echo.
echo.
echo.
@echo    浜様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様�
@echo    �                                                                         �
@echo    �                    �痰���→� ������ ��▲琥キ�                           �
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
@echo    藩様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様様�
PAUSE


del /q UpdaterHangar.bat

exit
stop
exit
@stop