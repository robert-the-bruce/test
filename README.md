# Projekt

## Setup


## Software

### XAMPP Version 7.1.27 / 7.2.16 / 7.3.3

https://www.apachefriends.org/de/download.html

* PHP 7.1.27 , 7.2.16 , 7.3.3
* Apache 2.4.38
* MariaDB 10.1.38
* Perl 5.16.3
* OpenSSL 1.0.2r (UNIX only)
* phpMyAdmin 4.8.5

XAMPP dient in erster Linie hierfür, um schnell und problemlos einen Testserver zum laufen zu bringen.

Es sollte vermieden werden dieses für einen öffentlichen Server zu verwenden, da er bezüglich der Sicherheit bewusst abgespeckt ist und für solche Zwecke nicht gedacht wurde.


### PHPSTORM


https://www.jetbrains.com/phpstorm/download/#section=windows

Version: 2019.1
Build: 191.6183.95
Released: March 28, 2019

Sehr bekannte IDE für PHP Projekte.
PhpStorm ist meine Wahl beim Umsetzen von Webseiten. Dabei ist es viel mehr als ein einfacher Text-Editor – PhpStorm hilft bei wiederkehrenden Aufgaben, hat alle Zusammenhänge im Blick und korrigiert Schreibfehler. Ein starkes Werkzeug, das das Entwickeln und Debuggen von Webseiten mit vielen Funktionen unterstützt.

### XDEBUG

https://w3guy.com/xdebug-xampp-phpstorm/

* Öffnen Sie die php.ini (zu finden unter C:\path-to-xampp\php) zur Bearbeitung.
* Suchen Sie nach[XDebug] und entfernen Sie alle seine Einträge.

``` php
zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
xdebug.profiler_append = 0
xdebug.profiler_enable = 1
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir = "C:\xampp\tmp"
xdebug.profiler_output_name = "cachegrind.out.%t-%s"
xdebug.remote_enable = 0
xdebug.remote_handler = "dbgp"
xdebug.remote_host = "127.0.0.1"
xdebug.trace_output_dir = "C:\xampp\tmp"
```

* Sie müssen den Apache an dieser Stelle neu starten.
* Auf PhpStorm öffnen Sie die Einstellungen, indem Sie Datei > Einstellungen oder Strg + Alt + S wählen und dann auf das PHP-Menü klicken.
* Wählen Sie auf der PHP-Seite Ihre PHP-Installation aus der Dropdown-Liste Interpreter und klicken Sie auf die Schaltfläche Durchsuchen PhpStorm Durchsuchen neben dem Feld.
* Das Dialogfeld Interpreters wird geöffnet und zeigt die Version der ausgewählten PHP-Installation und Xdebug und deren Version an. Wenn Debugger: Nicht installiert wird angezeigt, klicken Sie stattdessen auf das Reload-Symbol in der Nähe des PHP-Eingabefeldes.

* Klicken Sie auf die Schaltflächen Apply und Ok und Sie sollten bereit sein.


### VISUAL STUDIO CODE

https://code.visualstudio.com/

### MYSQL WORKBENCH

Ich habe mich für MQSQL Workbench entschieden weil es meiner Meinung nach zum erstellen eines ERM
und zur Umsetzung von Projekten sehr gut geeignet ist.

https://dev.mysql.com/downloads/workbench/

https://downloads.mysql.com/archives/workbench/

MySQL Workbench ist ein Modellierungswerkzeug, mit dem MySQL-Datenbanken grafisch entworfen und erstellt werden können. Es bietet auch Module für die Verwaltung von MySQL-Server-Instanzen und Module für die Entwicklung von Abfragen, mit denen Sie SQL-Abfragen ausführen können.

### Notepad++

Notepad++ hervorragendes Tool kennt jedes Format
https://notepad-plus-plus.org/download/v7.6.5.html

### Chrome

Einer der bekanntesten Browser neben Firefox.
https://www.google.de/chrome/?brand=CHBD&gclid=Cj0KCQjw1pblBRDSARIsACfUG10CVN7ly1XlvLYCkCuiCN_3NE4DOKGFwImHP_QGakVSOk9fvtLGqywaAjtLEALw_wcB&gclsrc=aw.ds