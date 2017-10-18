@echo off
set PHPBIN=C:\PHP\php.exe
"%PHPBIN%" -d safe_mode=Off "C:\PHP\PHPUnit\phpunit-skelgen.phar" %*