@echo off
echo Configuring database for MySQL...

REM Update .env file for MySQL
powershell -Command "(Get-Content .env) -replace 'DB_CONNECTION=sqlite', 'DB_CONNECTION=mysql' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace '# DB_HOST=127.0.0.1', 'DB_HOST=127.0.0.1' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace '# DB_PORT=3306', 'DB_PORT=3306' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace '# DB_DATABASE=laravel', 'DB_DATABASE=nashet' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace '# DB_USERNAME=root', 'DB_USERNAME=root' | Set-Content .env"
powershell -Command "(Get-Content .env) -replace '# DB_PASSWORD=', 'DB_PASSWORD=' | Set-Content .env"

echo Database configuration updated!
echo.
echo Please create a database named 'nashet' in MySQL, then run:
echo php artisan migrate:fresh --seed
echo.
pause
