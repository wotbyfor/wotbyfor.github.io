@Echo off
 
:m1
Echo "������� ��஢�� ०��
Echo.
Echo 1 - ��
Echo 2 - ���


echo.
Set /p choice="��� ����� "
if not defined choice goto m1

if "%choice%"=="1" (start ByForMOD\on.bat)
if "%choice%"=="1" (start ByForMOD\MemoryClean.vbs)
if "%choice%"=="1" (start ByForMOD\off.bat)
if "%choice%"=="1" (exit)



if "%choice%"=="2" (exit)


start explorer.exe
@stop
exit




