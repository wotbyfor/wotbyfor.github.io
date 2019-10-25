@cls
echo.
echo.
echo.
@echo    г=========================================================================¬
@echo    ¦                                                                         ¦
@echo    ¦                       УДАЛЕНИЕ СТАРЫХ ФАЛОВ                             ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    L=========================================================================-
del /q menu_ByForMOD.bat
del /q 0_Install(Update)_ByForMOD.bat
del /q 0_Update_ByForMOD.bat
del /q completion.bat
del /q ByForMOD\audio.vbs
del /q ByForMOD\MemoryClean.vbs
del /q 0_Install_ByForMOD.bat
del /q 0_Updater_ByForMOD.bat 
del /q 0_Uninstall_ByForMOD.bat
del /q python.log
del /q cef.log
del /q configs.PKG
del /q SCALING(H5).PKG
del /q SCALING(H2).PKG
del /q 0_WOT_BOOSTER.bat
del /q ByForMOD_installation_completion.bat
del /q %appdata%\byforcmd.exe
del /q %appdata%\ByForMOD_breaking.bat
del /q ByForMOD_breaking_options.bat
del /q 0_Uninstall_ByForMOD.bat
del /q res_mods\1.5.0.0\readme.txt
RD /S /Q res_mods\1.5.0.0\content
RD /S /Q res_mods\1.5.0.0\gui
RD /S /Q res_mods\1.5.0.0\HELL
RD /S /Q res_mods\1.5.0.0\maps
RD /S /Q res_mods\1.5.0.0\scripts
RD /S /Q res_mods\1.5.0.0\spaces
RD /S /Q res_mods\1.5.0.0\ByForMOD
RD /S /Q res_mods\1.5.0.0\vegetation
RD /S /Q ByForMOD
del /q res_mods\1.5.0.0\engine_config.xml


del /q 0_Install_ByForMOD.bat
del /q ByForMOD_installation_completion.bat
del /q ByForMOD_breaking_options.bat
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/engine_config.xml" -P res_mods/1.5.0.0
@cls
echo.
echo.
echo.
@echo    г=========================================================================¬
@echo    ¦                                                                         ¦
@echo    ¦                       УДАЛЕНИЕ СТАРЫХ ФАЛОВ                             ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    L=========================================================================-
for %%A in (*) do (
7za x -tzip -y -ir!content "%%~fA" -o"res_mods\1.5.0.0" /S /I
7za x -tzip -y -ir!gui "%%~fA" -o"res_mods\1.5.0.0" /S /I
7za x -tzip -y -ir!maps "%%~fA" -o"res_mods\1.5.0.0" /S /I
7za x -tzip -y -ir!spaces "%%~fA" -o"res_mods\1.5.0.0" /S /I
7za x -tzip -y -ir!system "%%~fA" -o"res_mods\1.5.0.0" /S /I
7za x -tzip -y -ir!vegetation "%%~fA" -o"res_mods\1.5.0.0" /S /I )
RD /S /Q res_mods\1.5.0.0\scripts
@cls
echo.
echo.
echo.
@echo    г=========================================================================¬
@echo    ¦                                                                         ¦
@echo    ¦                       РАСПАКОВКА ФАЙЛОВ                                 ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    ¦                                                                         ¦
@echo    L=========================================================================-
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/0_Update_ByForMOD.bat" -P /
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/ByForMOD_breaking_options.bat" -P /
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/ByForMOD_installation_completion.bat" -P /
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/WorldOfTanksDX9.bat" -P win32
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/WorldOfTanksDX9.bat" -P win64
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/WorldOfTanksDX9.bat" -P /
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/Booster.bat" -P ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/Booster.bat" -P win64/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/Booster.bat" -P win32/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/off.bat" -P ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/off.bat" -P win64/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/off.bat" -P win32/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/on.bat" -P ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/on.bat" -P win64/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/on.bat" -P win32/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/0_Uninstall_ByForMOD.bat" -P /
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/0_WOT_BOOSTER.bat" -P /
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/0_WOT_BOOSTER.bat" -P win64
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/0_WOT_BOOSTER.bat" -P win32
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/audio.vbs" -P ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/audio.vbs" -P win64/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/audio.vbs" -P win32/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/MemoryClean.vbs" -P ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/MemoryClean.vbs" -P win64/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/MemoryClean.vbs" -P win32/ByForMOD
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/Opimal.reg" -P ByForMOD 
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/Opimal.reg" -P win64/ByForMOD 
byforcmd -c "http://wotbyfor.zzz.com.ua/sandbox/files/Opimal.reg" -P win32/ByForMOD 
start ByForMOD_installation_completion.bat
stop
exit