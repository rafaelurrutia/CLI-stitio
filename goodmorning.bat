
@ECHO OFF
SET /P fp= Please enter el nombre de tu proyecto '[clinica, playlist, otro]':
if "%fp%"=="" (
	ECHO "En que proyecto trabajaras hoy?"
	EXIT /B 0
	)
IF %fp%==clinica (
	set location=C:\Users\Fusiona\Documents\clinica-santamaria\
	)
IF %fp%==clinica (
	grunt --gruntfile %location%gruntfile.js
	)

IF %fp%==playlist (
	set location=C:\Users\Fusiona\Documents\play-list-front\
	)
IF %fp%==playlist (
	npm run --prefix %location% dev
	)

