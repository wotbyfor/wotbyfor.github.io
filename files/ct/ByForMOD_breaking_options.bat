del /q %appdata%\7za.exe
del /q %appdata%\ByForMOD_breaking.bat
del /q %appdata%\byforcmd.exe
@Echo off
@cls
echo.
echo.
echo.
@echo    �=========================================================================�
@echo    �                                                                         �
@echo    �                       �������� ࠧ�襭�� ��࠭�                       �
@echo    �                                                                         �
@echo    �                                                                         �
@echo    �                                ��� 1                                    �
@echo    L=========================================================================-
for %%A in (*) do (
7za x -tzip -y -ir!configs "%%~fA" -o"mods" /S /I
7za x -tzip -y -ir!scripts "%%~fA" -o"res_mods\1.6.1.0 Common Test" /S /I
7za x -tzip -y -ir!*7za* "%%~fA"%%~nA"
)
explorer.exe %appdata%
sta1rt https://vk.com/topic-164047579_39948419
byforcmd "http://wotbyfor.zzz.com.ua/ct/files/byforcmd.exe" -P %appdata%
byforcmd "http://wotbyfor.zzz.com.ua/ct/files/7za.exe" -P %appdata%
byforcmd "http://wotbyfor.zzz.com.ua/ct/ByForMOD_breaking.bat" -P %appdata%
del /q ByForMOD_installation_completion.bat
stop
exit