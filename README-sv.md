<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Update 0.8.85

Håll din webbplats uppdaterad.

<p align="center"><img src="update-screenshot.png?raw=true" alt="Skärmdump"></p>

## Hur man uppdaterar en webbplats

Det första alternativet är att uppdatera din webbplats i en [webbläsare](https://github.com/annaesvensson/yellow-edit/tree/main/README-sv.md). Logga in med ditt användarkonto. Gå till inställningarna och leta efter uppdateringar. Din webbplats kommer att visas om uppdateringar är tillgängliga. Du måste ha uppdateringsrättigheter för att uppdatera en webbplats. Alla användarkonton lagras i filen `system/extensions/yellow-user.ini`.

Det andra alternativet är att uppdatera din webbplats på [kommandoraden](https://github.com/annaesvensson/yellow-command/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php update`. Detta kommer att visa om det finns uppdateringar tillgängliga. För att uppdatera din webbplats skriv `php yellow.php update all`. Du kan eventuellt lägga till namnet på ett tillägg.

Om filer raderas kan du hitta dem i `system/trash` mappen. 

## Hur man lägga till tillägg

Du kan ladda ner och lägga till tillägg som ZIP-filer. Du kan också lägga till tillägg på [kommandoraden](https://github.com/annaesvensson/yellow-command/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php install` följt av fler argument.

## Hur man ta bort tillägg

Du kan manuellt ta bort tillägg som PHP-filer. Du kan också lägga till tillägg på [kommandoraden](https://github.com/annaesvensson/yellow-command/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php uninstall` följt av fler argument.

## Hur man visar aktuella versionen

Du kan visa den aktuella versionen av din webbplats i en [webbläsare](https://github.com/annaesvensson/yellow-edit/tree/main/README-sv.md). Logga in med ditt användarkonto. Gå till inställningarna. Du kan också visa den aktuella versionen på [kommandoraden](https://github.com/annaesvensson/yellow-command/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php about`.

Du kan använda förkortningar för att visa information om webbplatsen:

`[yellow about]` för aktuell version  
`[yellow release]` för aktuell produktutgåva  
`[yellow log]` för senaste poster i loggfilen  

## Exempel

Innehållsfil med aktuell version:

    ---
    Title: Exempelsida
    ---
    Den här sidan visar aktuella versionen.

    ! [yellow about]

Innehållsfil med aktuell produktutgåva:

    ---
    Title: Exempelsida
    ---
    Den här sidan visar aktuella produktutgåvan.

    ! [yellow release]

Innehållsfil med loggfil:

    ---
    Title: Exempelsida
    ---
    Den här sidan visar de senaste posterna i loggfilen.

    ! [yellow log]

Visa aktuell version på kommandoraden:
 
`php yellow.php about`

Visa uppdateringar på kommandoraden:
 
`php yellow.php update`  

Uppdatera webbplats på kommandoraden:
 
`php yellow.php update all`  

Lägga till tillägg på kommandoraden:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Ta bort tillägg på kommandoraden:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`UpdateExtensionUrl` = repository med tilläg  
`UpdateExtensionFile` = fil med tilläggsinställningar  
`UpdateLatestFile` = fil med senaste uppdateringsinställningar  
`UpdateCurrentFile` = fil med aktuella uppdateringsinställningar  
`UpdateCurrentRelease` = för närvarande installerad produktversion  
`UpdateEventPending` = väntande händelser  
`UpdateEventDaily` = tid för nästa dagliga händelse  
`UpdateTrashTimeout` = lagring av raderade filer i sekunder  

Loggfilen finns i filen `system/extensions/yellow-website.log`.

## Installation

[Ladda ner tillägg](https://github.com/annaesvensson/yellow-update/archive/main.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
