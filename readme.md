<p align="right"><a href="readme-de.md">Deutsch</a> &nbsp; <a href="readme.md">English</a> &nbsp; <a href="readme-sv.md">Svenska</a></p>

# Update 0.9.8

Keep your extensions up to date.

<p align="center"><img src="screenshot.png" alt="Screenshot"></p>

## How to install extensions

You can download extensions as ZIP files and copy them into your `system/extensions` folder. Do not unzip ZIP files, leave them unchanged. Open your website in a web browser and click "Reload". You can also install extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php install` followed by more arguments.

There are [extensions on the official website](https://datenstrom.se/yellow/extensions/), [GitHub](https://github.com/topics/datenstrom-yellow) or [Codeberg](https://codeberg.org/explore/repos?q=datenstrom-yellow&topic=1).

## How to update extensions

The first option is to update extensions in a [web browser](https://github.com/annaesvensson/yellow-edit). Log in with your user account. Go to the settings and check for updates. Your website will show if updates are available. You need to have update rights to update extensions. All user accounts are stored in file `system/extensions/yellow-user.ini`. 

The second option is to update extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php update`. This will show if updates are available. To update all extensions type `php yellow.php update all`. You can optionally add the name of an extension.

The third option is to update extensions manually. Download extensions as ZIP files and copy them into your `system/extensions` folder. Do not unzip ZIP files, leave them unchanged. Open your website in a web browser and click "Reload". This is the recommended way to update experimental extensions.

## How to uninstall extensions

You can manually remove extensions as PHP files. You can also uninstall extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php uninstall` followed by more arguments.

If files are deleted you can find them in the `system/trash` folder.

## How to show extensions

You can show the current version of your website in a [web browser](https://github.com/annaesvensson/yellow-edit). Log in with your user account. Go to the settings. You can show the installed extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php about`. You can optionally add the name of an extension.

You can use the `[about]` shortcut to show installed extension.

## Examples

Content file with installed extensions:

    ---
    Title: Example page
    ---
    This page shows the installed extensions.

    [about]

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

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`UpdateCurrentRelease` = installed product release  
`UpdateAvailableUrl` = URL with updates, `auto` for automatic detection  
`UpdateAvailableFile` = file with update settings for available extensions  
`UpdateInstalledFile` = file with update settings for installed extensions  
`UpdateExtensionFile` = file with extension settings  
`UpdateEventPending` = pending events  
`UpdateEventDaily` = time of next daily event  
`UpdateTrashTimeout` = storage of deleted files in seconds  

The following files are important for the update mechanism:

`system/extensions/update-available.ini` = [file with update settings](https://raw.githubusercontent.com/datenstrom/yellow/main/system/extensions/update-available.ini) for available extensions  
`system/extensions/update-installed.ini` = file with update settings for installed extensions  
`system/extensions/yellow-website.log` = log file of the website  

## Acknowledgements

This extension uses [curl](https://github.com/curl/curl) by Daniel Stenberg. Thank you for the useful library.

## Developer

Anna Svensson. [Get help](https://datenstrom.se/yellow/help/).
