<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Update 0.9.6

Keep your extensions up to date.

<p align="center"><img src="SCREENSHOT.png" alt="Screenshot"></p>

## How to install extensions

You can download extensions as ZIP files and copy them into your `system/extensions` folder. Do not unzip ZIP files, leave them unchanged. Open your website in a web browser and click "Reload". You can also install extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php install` followed by more arguments.

[There are available extensions on the official website](https://datenstrom.se/yellow/extensions/), [experimental extensions on GitHub](https://github.com/topics/datenstrom-yellow) and [Codeberg](https://codeberg.org/explore/repos?q=datenstrom-yellow&topic=1).

## How to update extensions

The first option is to update extensions in a [web browser](https://github.com/annaesvensson/yellow-edit). Log in with your user account. Go to the settings and check for updates. Your website will show if updates are available. You need to have update rights to update extensions. All user accounts are stored in file `system/extensions/yellow-user.ini`. 

The second option is to update extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php update`. This will show if updates are available. To update all extensions type `php yellow.php update all`. You can optionally add the name of an extension.

## How to uninstall extensions

You can manually remove extensions as PHP files. You can also uninstall extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php uninstall` followed by more arguments.

If files are deleted you can find them in the `system/trash` folder.

## How to show extensions

You can show the current version of your website in a [web browser](https://github.com/annaesvensson/yellow-edit). Log in with your user account. Go to the settings. You can show the installed extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php about`. You can optionally add the name of an extension.

You can use shortcuts to show information about the website:

`[yellow about]` for installed extensions  
`[yellow log]` for log file of the website  

## Examples

Content file with installed extensions:

    ---
    Title: Example page
    ---
    This page shows the installed extensions.

    ! {.important}
    ! [yellow about]

Content file with log file of the website:

    ---
    Title: Example page
    ---
    This page shows the log file of the website.

    ! {.important}
    ! [yellow log]

Installing extensions at the command line:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Updating extensions at the command line:

`php yellow.php update`  
`php yellow.php update all`  
`php yellow.php update english german swedish`  

Uninstalling extensions at the command line:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

Showing extensions at the command line:
 
`php yellow.php about`  
`php yellow.php about gallery`  
`php yellow.php about english german swedish`  

Showing log file at the command line:

`php yellow.php log`  

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`UpdateCurrentRelease` = installed product release  
`UpdateAvailableUrl` = URL with updates, `auto` for automatic detection  
`UpdateAvailableFile` = file with update settings for available extensions  
`UpdateInstalledFile` = file with update settings for installed extensions  
`UpdateExtensionFile` = file with extension settings  
`UpdateEventPending` = pending events  
`UpdateEventDaily` = time of next daily event  
`UpdateLogEntries` = number of log file entries to show, 0 for unlimited  
`UpdateTrashTimeout` = storage of deleted files in seconds  

The log file of the website can be found in file `system/extensions/yellow-website.log`.

The [update settings for available extensions](https://raw.githubusercontent.com/datenstrom/yellow/main/system/extensions/update-available.ini) can be found on GitHub.

## Acknowledgements

This extension uses [curl](https://github.com/curl/curl) by Daniel Stenberg. Thank you for the useful library.

## Developer

Anna Svensson. [Get help](https://datenstrom.se/yellow/help/).
