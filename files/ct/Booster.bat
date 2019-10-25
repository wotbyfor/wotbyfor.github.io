@Echo off
 
:m1
Echo "Включить игровой режим
Echo.
Echo 1 - Да
Echo 2 - Нет


echo.
Set /p choice="ВАШ ВЫБОР "
if not defined choice goto m1

if "%choice%"=="1" (start ByForMOD\on.bat)
if "%choice%"=="1" (start ByForMOD\MemoryClean.vbs)
if "%choice%"=="1" (start ByForMOD\off.bat)
if "%choice%"=="1" (exit)



if "%choice%"=="2" (exit)


start explorer.exe
@stop
exit




