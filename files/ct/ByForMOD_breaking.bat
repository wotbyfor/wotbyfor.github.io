
del /q 640-480.PKG
del /q 720-480.PKG
del /q 720-576.PKG
del /q 800-600.PKG
del /q Wargaming.net\WorldOfTanks\preferences.xml
del /q Wargaming.net\WorldOfTanks\preferences_ct.xml
del /q Wargaming.net\WorldOfTanks\preferences_sb.xml


@Echo off
 @cls
echo.
echo.
echo.
@echo    г=========================================================================?
@echo    ?                                                                         ?
@echo    ?                       Уменьшить разрешение экрана                       ?
@echo    ?                                                                         ?
@echo    ? 1 - 640-480                                                             ?
@echo    ?                                                                         ?
@echo    ? 2 - 720-480                                                             ?
@echo    ?                                                                         ?
@echo    ? 3 - 720-576                                                             ?
@echo    ?                                                                         ?
@echo    ? 4 - 800-600                                                             ?
@echo    ?                                                                         ?
@echo    ?                                ШАГ 2                                    ?
@echo    L=========================================================================-
 
:m1
Echo "подтвердите разрешение экрана
Echo.
Echo 1 - 640-480
Echo 2 - 720-480
Echo 3 - 720-576
Echo 4 - 800-600



echo.
Set /p choice="┐аш выбор: "
if not defined choice goto m1
if "%choice%"=="1" (byforcmd "http://github.com/wotbyfor/wotbyfor.github.io/raw/master/files/ct/files/640-480.PKG" -P /)

 
if "%choice%"=="2" (byforcmd "http://github.com/wotbyfor/wotbyfor.github.io/raw/master/files/ct/files/720-480.PKG" -P /)

if "%choice%"=="3" (byforcmd "http://github.com/wotbyfor/wotbyfor.github.io/raw/master/files/ct/files/720-576.PKG" -P /)

if "%choice%"=="4" (byforcmd "http://github.com/wotbyfor/wotbyfor.github.io/raw/master/files/ct/files/800-600.PKG" -P /)







for %%A in (*) do (
7za x -tzip -y -ir!* "%%~fA" -o"Wargaming.net\WorldOfTanks"
7za x -tzip -y -ir!*autoinstall* "%%~fA" -o"Wargaming.net\WorldOfTanks %%~nA"
7za x -tzip -y -ir!*7za* "%%~fA" -o"Wargaming.net\WorldOfTanks %%~nA"
)


rename "preferences.xml" preferences_ct.xml

start "" https://vk.com/topic-164047579_39948413


del /q 404.html
exit




