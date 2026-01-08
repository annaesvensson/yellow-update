<p align="right"><a href="readme-de.md">Deutsch</a> &nbsp; <a href="readme.md">English</a> &nbsp; <a href="readme-sv.md">Svenska</a></p>

# Update 0.9.8

Erweiterungen auf dem neusten Stand halten.

<p align="center"><img src="screenshot.png" alt="Bildschirmfoto"></p>

## Wie man Erweiterungen installiert

Du kannst Erweiterungen als ZIP-Dateien herunterladen und in dein `system/extensions`-Verzeichnis kopieren. Entpacke die ZIP-Dateien nicht, sondern lasse sie unverändert. Öffnen deine Webseite im Webbrowser und klicke auf "Neu laden". Du kannst Erweiterungen auch in der [Befehlszeile](https://github.com/annaesvensson/yellow-core/tree/main/readme-de.md) installieren. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php install` gefolgt von weiteren Argumenten.

Es gibt [Erweiterungen auf der offiziellen Webseite](https://datenstrom.se/de/yellow/extensions/), [GitHub](https://github.com/topics/datenstrom-yellow) oder [Codeberg](https://codeberg.org/explore/repos?q=datenstrom-yellow&topic=1).

## Wie man Erweiterungen aktualisiert

Die erste Möglichkeit besteht darin, Erweiterungen im [Webbrowser](https://github.com/annaesvensson/yellow-edit/tree/main/readme-de.md) zu aktualisieren. Melde dich mit deinem Benutzerkonto an. Gehe in die Einstellungen und suche nach Aktualisierungen. Deine Webseite zeigt an, ob Aktualisierungen verfügbar sind. Du benötigst Update-Rechte, um Erweiterungen zu aktualisieren. Alle Benutzerkonten werden in der Datei `system/extensions/yellow-user.ini` gespeichert.

Die zweite Möglichkeit besteht darin, Erweiterungen in der [Befehlszeile](https://github.com/annaesvensson/yellow-core/tree/main/readme-de.md) zu aktualisieren. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php update`. Das zeigt an ob Aktualisierungen verfügbar sind. Zum Aktualisieren aller Erweiterungen gib ein `php yellow.php update all`. Du kannst wahlweise den Namen einer Erweiterung angeben.

## Wie man Erweiterungen deinstalliert

Du kannst Erweiterungen als PHP-Dateien manuell entfernen. Du kannst Erweiterungen auch in der [Befehlszeile](https://github.com/annaesvensson/yellow-core/tree/main/readme-de.md) deinstallieren. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php uninstall` gefolgt von weiteren Argumenten.

Falls Dateien gelöscht werden, kannst du sie im `system/trash`-Verzeichnis wiederfinden.

## Wie man Erweiterungen anzeigt

Du kannst die aktuelle Version deiner Webseite im [Webbrowser](https://github.com/annaesvensson/yellow-edit/tree/main/readme-de.md) anzeigen. Melde dich mit deinem Benutzerkonto an. Gehe in die Einstellungen. Du kannst die installierten Erweiterungen in der [Befehlszeile](https://github.com/annaesvensson/yellow-core/tree/main/readme-de.md) anzeigen. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php about`. Du kannst wahlweise den Namen einer Erweiterung angeben.

Du kannst die `[about]`-Abkürzungen verwenden, um installierte Erweiterungen anzuzeigen.

## Beispiele

Inhaltsdatei mit installierten Erweiterungen:

    ---
    Title: Beispiel-Seite
    ---
    Diese Seite zeigt die installierten Erweiterungen.

    [about]

Erweiterungen in der Befehlszeile installieren:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Erweiterungen in der Befehlszeile aktualisieren:
 
`php yellow.php update`  
`php yellow.php update all`  
`php yellow.php update english german swedish`  

Erweiterungen in der Befehlszeile deinstallieren:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

Erweiterungen in der Befehlszeile anzeigen:
 
`php yellow.php about`  
`php yellow.php about gallery`  
`php yellow.php about english german swedish`   

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`UpdateCurrentRelease` = installierte Produktversion  
`UpdateAvailableUrl` = URL mit Aktualisierungen, `auto` für automatische Erkennung  
`UpdateAvailableFile` = Datei mit Aktualisierungseinstellungen für verfügbare Erweiterungen  
`UpdateInstalledFile` = Datei mit Aktualisierungseinstellungen für installierte Erweiterungen  
`UpdateExtensionFile` = Datei mit Erweiterungseinstellungen  
`UpdateEventPending` = ausstehende Ereignisse  
`UpdateEventDaily` = Zeitpunkt des nächsten täglichen Ereignisses  
`UpdateTrashTimeout` = Speicherung von gelöschten Dateien in Sekunden  

Die folgenden Einstellungen sind wichtig für den Aktualisieriungsmechanismus:

`system/extensions/update-available.ini` = [Datei mit Aktualisierungseinstellungen](https://raw.githubusercontent.com/datenstrom/yellow/main/system/extensions/update-available.ini) für verfügbare Erweiterungen  
`system/extensions/update-installed.ini` = Datei mit Aktualisierungseinstellungen für installierte Erweiterungen  
`system/extensions/yellow-website.log` = Logdatei der Webseite  

## Danksagung

Diese Erweiterung verwendet [curl](https://github.com/curl/curl) von Daniel Stenberg. Danke für die nützliche Bibliothek.

## Entwickler

Anna Svensson. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
