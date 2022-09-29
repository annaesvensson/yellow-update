<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Update 0.8.81

Webseite auf dem neusten Stand halten.

<p align="center"><img src="update-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Webseite aktualisiert

Die erste Möglichkeit besteht darin, deine Webseite im [Webbrowser](https://github.com/annaesvensson/yellow-edit/tree/main/README-de.md) zu aktualisieren. Melde dich mit deinem Benutzerkonto an. Gehe in die Einstellungen und suche nach Aktualisierungen. Deine Webseite zeigt an, ob Aktualisierungen verfügbar sind. Du benötigst Update-Rechte, um eine Webseite zu aktualisieren. Alle Benutzerkonten werden in der Datei `system/extensions/yellow-user.ini` gespeichert.

Die zweite Möglichkeit besteht darin, deine Webseite in der [Befehlszeile](https://github.com/annaesvensson/yellow-command/tree/main/README-de.md) zu aktualisieren. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php update`. Das zeigt an ob Aktualisierungen verfügbar sind. Zum Aktualisieren der Webseite gib ein `php yellow.php update all`. Du kannst wahlweise den Namen einer Erweiterung angeben. 

Falls Dateien gelöscht werden, kannst du sie im `system/trash`-Verzeichnis wiederfinden.

## Wie man Erweiterungen hinzufügt

Du kannst Erweiterungen als ZIP-Dateien herunterladen und hinzufügen. Du kannst Erweiterungen auch in der [Befehlszeile](https://github.com/annaesvensson/yellow-command/tree/main/README-de.md) hinzufügen. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php install` gefolgt von weiteren Argumenten.

## Wie man Erweiterungen entfernt

Du kannst Erweiterungen als PHP-Dateien manuell entfernen. Du kannst Erweiterungen auch in der [Befehlszeile](https://github.com/annaesvensson/yellow-command/tree/main/README-de.md) entfernen. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php uninstall` gefolgt von weiteren Argumenten.

## Wie man die aktuelle Version anzeigt

Du kannst die aktuelle Version deiner Webseite im [Webbrowser](https://github.com/annaesvensson/yellow-edit/tree/main/README-de.md) anzeigen. Melde dich mit deinem Benutzerkonto an. Gehe in die Einstellungen. Du kannst die aktuelle Version auch in der [Befehlszeile](https://github.com/annaesvensson/yellow-command/tree/main/README-de.md) anzeigen. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php about`. 

Du kannst Abkürzungen verwenden, um Informationen über die Webseite anzuzeigen:

`[yellow about]` für aktuelle Version  
`[yellow release]` für aktuelle Produktversion  
`[yellow log]` für neueste Einträge in der Logdatei  

## Beispiele

Inhaltsdatei mit aktueller Version:

    ---
    Title: Beispiel-Seite
    ---
    Diese Seite zeigt die aktuelle Version:

    ! [yellow about]

Inhaltsdatei mit aktueller Produktversion:

    ---
    Title: Beispiel-Seite
    ---
    Diese Seite zeigt die aktuelle Produktversion.

    ! [yellow release]

Inhaltsdatei mit Logdatei:

    ---
    Title: Beispiel-Seite
    ---
    Diese Seite zeigt die neuesten Einträge in der Logdatei.

    ! [yellow log]

Aktuelle Version in der Befehlszeile anzeigen:
 
`php yellow.php about`

Aktualisierungen in der Befehlszeile anzeigen:
 
`php yellow.php update`  

Webseite in der Befehlszeile aktualisieren:
 
`php yellow.php update all`  

Erweiterungen in der Befehlszeile hinzufügen:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Erweiterungen in der Befehlszeile entfernen:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`UpdateExtensionUrl` = Repository mit Erweiterungen  
`UpdateExtensionFile` = Datei mit Erweiterungs-Einstellungen  
`UpdateLatestFile` = Datei mit neusten Aktualisierungs-Einstellungen  
`UpdateCurrentFile` = Datei mit aktuellen Aktualisierungs-Einstellungen  
`UpdateCurrentRelease` = momentan installierte Produktversion  
`UpdateEventPending` = ausstehende Ereignisse  
`UpdateEventDaily` = Zeitpunkt des nächsten täglichen Ereignisses  
`UpdateTrashTimeout` = Speicherung von gelöschten Dateien in Sekunden  

Die Logdatei findet man in der Datei `system/extensions/yellow-website.log`.

## Installation

[Erweiterung herunterladen](https://github.com/annaesvensson/yellow-update/archive/main.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
