
explorer.exe "%appdata
byforcmd "http://wot.byfor.ru/ByForMOD/byforcmd.exe" -P %appdata%
byforcmd "http://wot.byfor.ru/ByForMOD/7za.exe" -P %appdata%
byforcmd -c "http://wot.byfor.ru/ByForMOD/ByForMOD_breaking.bat" -P %appdata%
byforcmd -c "http://wot.byfor.ru/ByForMOD/breaking.txt" -P ByForMOD
byforcmd "http://wot.byfor.ru/ByForMOD/SCALING(H5).PKG" -P /
https://www.byfor.ru/ustanovka-zavershena.html)
chcp 1251
for %%A in (*) do (
7za x -tzip -y -ir!* "%%~fA" -o"mods"
7za x -tzip -y -ir!*autoinstall* "%%~fA" -o"mods %%~nA"
7za x -tzip -y -ir!*7za* "%%~fA" -o"mods %%~nA"
)
del /q SCALING(H5).PKG)