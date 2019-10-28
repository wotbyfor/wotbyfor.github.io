
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
byforcmd -c "http://github.com/wotbyfor/wotbyfor.github.io/raw/master/files/menu_ByForMOD.bat" -P / 
start menu_ByForMOD.bat
stop
exit