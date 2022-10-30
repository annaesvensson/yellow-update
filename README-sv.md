<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Update 0.8.88

Håll din webbplats uppdaterad.

<p align="center"><img src="update-screenshot.png?raw=true" alt="Skärmdump"></p>

## Hur man lägger till tillägg

Du kan ladda ner tillägg som ZIP-filer och kopiera dem till din `system/extensions` mapp. Högerklicka om du använder Safari. Du kan också lägga till tillägg på [kommandoraden](https://github.com/annaesvensson/yellow-command/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php install` följt av fler argument.

## Hur man tar bort tillägg

Du kan manuellt ta bort tillägg som PHP-filer. Du kan också lägga till tillägg på [kommandoraden](https://github.com/annaesvensson/yellow-command/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php uninstall` följt av fler argument.

## Hur man visar tillägg

Du kan visa den aktuella versionen av din webbplats i en [webbläsare](https://github.com/annaesvensson/yellow-edit/tree/main/README-sv.md). Logga in med ditt användarkonto. Gå till inställningarna. Du kan också visa den aktuella versionen på [kommandoraden](https://github.com/annaesvensson/yellow-command/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php about`.

Du kan använda förkortningar för att visa information om webbplatsen:

`[yellow about]` för installerade tillägg  
`[yellow release]` för aktuell produktutgåva  
`[yellow log]` för senaste poster i loggfilen  

## Hur man uppdaterar en webbplats

Det första alternativet är att uppdatera din webbplats i en [webbläsare](https://github.com/annaesvensson/yellow-edit/tree/main/README-sv.md). Logga in med ditt användarkonto. Gå till inställningarna och leta efter uppdateringar. Din webbplats kommer att visas om uppdateringar är tillgängliga. Du måste ha uppdateringsrättigheter för att uppdatera en webbplats. Alla användarkonton lagras i filen `system/extensions/yellow-user.ini`.

Det andra alternativet är att uppdatera din webbplats på [kommandoraden](https://github.com/annaesvensson/yellow-command/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php update`. Detta kommer att visa om det finns uppdateringar tillgängliga. För att uppdatera din webbplats skriv `php yellow.php update all`. Du kan eventuellt lägga till namnet på ett tillägg.

Om filer raderas kan du hitta dem i `system/trash` mappen. 

## Exempel

Innehållsfil med installerade tillägg:

    ---
    Title: Exempelsida
    ---
    Den här sidan visar installerade tillägg.

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

Lägga till tillägg på kommandoraden:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Ta bort tillägg på kommandoraden:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

Visa tillägg på kommandoraden:
 
`php yellow.php about`  
`php yellow.php about gallery`  
`php yellow.php about english german swedish`  

Visa uppdateringar på kommandoraden:
 
`php yellow.php update`  

Uppdatera webbplats på kommandoraden:
 
`php yellow.php update all`  

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

[Ladda ner tillägg](https://github.com/annaesvensson/yellow-update/archive/main.zip) och kopiera ZIP-fil till din `system/extensions` mapp. [Läs mer om tillägg](#hur-man-lägga-till-tillägg).

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
