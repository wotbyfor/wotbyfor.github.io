@cls
echo.
echo.
echo.
@echo    £=========================================================================ø
@echo    ≥                                                                         ≥
@echo    ≥                       ìÑÄãÖçàÖ åéÑÄ                                     ≥
@echo    ≥                                                                         ≥
@echo    L=========================================================================-
RD /S /Q mods\configs\promod
RD /S /Q win32\ByForMOD
RD /S /Q win64\ByForMOD
RD /S /Q ByForMOD
RD /S /Q Reports_XFW
RD /S /Q res_mods\1.5.0.0\content
@cls
echo.
echo.
echo.
@echo    £=========================================================================ø
@echo    ≥                                                                         ≥
@echo    ≥                       ìÑÄãÖçàÖ åéÑÄ                                     ≥
@echo    ≥                                                                         ≥
@echo    L=========================================================================-
RD /S /Q res_mods\1.5.0.0\gui
RD /S /Q res_mods\1.5.0.0\system
RD /S /Q res_mods\1.5.0.0\maps
RD /S /Q res_mods\1.5.0.0\scripts
RD /S /Q res_mods\1.5.0.0\spaces
@cls
echo.
echo.
echo.
@echo    £=========================================================================ø
@echo    ≥                                                                         ≥
@echo    ≥                       ìÑÄãÖçàÖ åéÑÄ                                     ≥
@echo    ≥                                                                         ≥
@echo    L=========================================================================-
RD /S /Q res_mods\1.5.0.0\vegetation
RD /S /Q ByForMOD
del /q res_mods\1.5.0.0\engine_config.xml
del /q ByForMOD\audio.vbs
del /q 0_WOT_BOOSTER.bat
del /q win32\0_WOT_BOOSTER.bat
del /q win64\0_WOT_BOOSTER.bat
del /q packages.PKG
@cls
echo.
echo.
echo.
@echo    £=========================================================================ø
@echo    ≥                                                                         ≥
@echo    ≥                       ìÑÄãÖçàÖ åéÑÄ                                     ≥
@echo    ≥                                                                         ≥
@echo    L=========================================================================-
del /q 0_Install_ByForMOD.bat
del /q wg_patcher.bat
del /q completion.bat
del /q 1.5.0.0.PKG
del /q 1.5.1.1.PKG
del /q 1.5.0.0.PKG
del /q 7za.exe
del /q qb_buforcmd_unpack.bat
del /q python.log
del /q cef.log
del /q configs.PKG
@cls
echo.
echo.
echo.
@echo    £=========================================================================ø
@echo    ≥                                                                         ≥
@echo    ≥                       ìÑÄãÖçàÖ åéÑÄ                                     ≥
@echo    ≥                                                                         ≥
@echo    L=========================================================================-
del /q ByForMOD_installation_completion.bat
del /q %appdata%\byforcmd.exe
del /q %appdata%\7za.exe
del /q %appdata%\ByForMOD_breaking.bat
del /q ByForMOD_breaking_options.bat
del /q install.bat 
del /q 0_Update_ByForMOD.bat
del /q WorldOfTanksDX9.bat
del /q win32\WorldOfTanksDX9.bat
del /q win64\WorldOfTanksDX9.bat
del /q 0_ByForMOD_Version.bat
@cls
echo.
echo.
echo.
@echo    £=========================================================================ø
@echo    ≥                                                                         ≥
@echo    ≥                       ìÑÄãÖçàÖ åéÑÄ                                     ≥
@echo    ≥                                                                         ≥
@echo    L=========================================================================-
del /q SCALING(H5).PKG
del /q SCALING(H2).PKG
del /q 0_Install(Update)_ByForMOD.bat
del /q byforcmd.exe
@cls
echo.
echo.
echo.
@echo    £=========================================================================ø
@echo    ≥                                                                         ≥
@echo    ≥                       ìÑÄãÖçàÖ åéÑÄ                                     ≥
@echo    ≥                                                                         ≥
@echo    L=========================================================================-
del /q 0_Uninstall_ByForMOD.bat
stop
exit