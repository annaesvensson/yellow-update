<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Update 0.9.6

Håll dina tillägg uppdaterade.

<p align="center"><img src="SCREENSHOT.png" alt="Skärmdump"></p>

## Hur man installerar tillägg

Du kan ladda ner tillägg som ZIP-filer och kopiera dem till din `system/extensions` mapp. Packa inte upp ZIP-filer, lämna dem oförändrade. Öppna din webbplats i en webbläsare och klicka på "Ladda om". Du kan också installera tillägg på [kommandoraden](https://github.com/annaesvensson/yellow-core/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php install` följt av fler argument.

[Det finns tillgängliga tillägg på officiella webbplatsen](https://datenstrom.se/sv/yellow/extensions/), [experimentella tillägg på GitHub](https://github.com/topics/datenstrom-yellow) och [Codeberg](https://codeberg.org/explore/repos?q=datenstrom-yellow&topic=1).

## Hur man uppdaterar tillägg

Det första alternativet är att uppdatera tillägg i en [webbläsare](https://github.com/annaesvensson/yellow-edit/tree/main/README-sv.md). Logga in med ditt användarkonto. Gå till inställningarna och leta efter uppdateringar. Din webbplats kommer att visas om uppdateringar är tillgängliga. Du måste ha uppdateringsrättigheter för att uppdatera tillägg. Alla användarkonton lagras i filen `system/extensions/yellow-user.ini`.

Det andra alternativet är att uppdatera tillägg på [kommandoraden](https://github.com/annaesvensson/yellow-core/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php update`. Detta kommer att visa om det finns uppdateringar tillgängliga. För att uppdatera alla tillägg skriv `php yellow.php update all`. Du kan valfritt lägga till namnet på ett tillägg.

## Hur man avinstallerar tillägg

Du kan manuellt ta bort tillägg som PHP-filer. Du kan också avinstallera tillägg på [kommandoraden](https://github.com/annaesvensson/yellow-core/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php uninstall` följt av fler argument.

Om filer raderas kan du hitta dem i `system/trash` mappen. 

## Hur man visar tillägg

Du kan visa den aktuella versionen av din webbplats i en [webbläsare](https://github.com/annaesvensson/yellow-edit/tree/main/README-sv.md). Logga in med ditt användarkonto. Gå till inställningarna. Du kan visa de installerade tilläggen på [kommandoraden](https://github.com/annaesvensson/yellow-core/tree/main/README-sv.md). Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php about`. Du kan valfritt lägga till namnet på ett tillägg.

Du kan använda förkortningar för att visa information om webbplatsen:

`[yellow about]` för installerade tillägg  
`[yellow log]` för webbplatsens loggfil 

## Exempel

Innehållsfil med installerade tillägg:

    ---
    Title: Exempelsida
    ---
    Den här sidan visar de installerade tilläggen.

    ! {.important}
    ! [yellow about]

Innehållsfil med webbplatsens loggfil:

    ---
    Title: Exempelsida
    ---
    Den här sidan visar webbplatsens loggfil.

    ! {.important}
    ! [yellow log]

Installera tillägg på kommandoraden:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Uppdatera tillägg på kommandoraden:
 
`php yellow.php update`  
`php yellow.php update all`  
`php yellow.php update english german swedish`  

Avinstallera tillägg på kommandoraden:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

Visa tillägg på kommandoraden:
 
`php yellow.php about`  
`php yellow.php about gallery`  
`php yellow.php about english german swedish`  

Visa loggfil på kommandoraden:

`php yellow.php log`  

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`UpdateCurrentRelease` = installerad produktversion  
`UpdateAvailableUrl` = URL med uppdateringar, `auto` för automatisk detektering  
`UpdateAvailableFile` = fil med uppdateringsinställningar för tillgängliga tillägg  
`UpdateInstalledFile` = fil med uppdateringsinställningar för installerade tillägg  
`UpdateExtensionFile` = fil med tilläggsinställningar  
`UpdateEventPending` = väntande händelser  
`UpdateEventDaily` = tid för nästa dagliga händelse  
`UpdateLogEntries ` = antal loggfil inlägg att visa, 0 för obegränsad  
`UpdateTrashTimeout` = lagring av raderade filer i sekunder  

Webbplatsens loggfil finns i filen `system/extensions/yellow-website.log`.

[Uppdateringsinställningarna för tillgängliga tillägg ](https://raw.githubusercontent.com/datenstrom/yellow/main/system/extensions/update-available.ini) finns på GitHub.

## Tack

Detta tillägg använder [curl](https://github.com/curl/curl) av Daniel Stenberg. Tack för det användbara biblioteket.

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
