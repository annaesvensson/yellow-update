<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Update 0.8.96

Keep your website up to date.

<p align="center"><img src="SCREENSHOT.png?raw=true" alt="Screenshot"></p>

## How to install extensions

You can download extensions as ZIP files and copy them into your `system/extensions` folder. Right click if you use Safari. You can also install extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php install` followed by more arguments.

## How to uninstall extensions

You can manually remove extensions as PHP files. You can also uninstall extensions at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php uninstall` followed by more arguments.

## How to show extensions

You can show the current version of your website in a [web browser](https://github.com/annaesvensson/yellow-edit). Log in with your user account. Go to the settings. You can also show the current version at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php about`. 

You can use shortcuts to show information about the website:

`[yellow about]` for installed extensions  
`[yellow release]` for current product release  
`[yellow log]` for latest entries in log file  

## How to update a website

The first option is to update your website in a [web browser](https://github.com/annaesvensson/yellow-edit). Log in with your user account. Go to the settings and check for updates. Your website will show if updates are available. You need to have update rights to update a website. All user accounts are stored in file `system/extensions/yellow-user.ini`. 

The second option is to update your website at the [command line](https://github.com/annaesvensson/yellow-core). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php update`. This will show if updates are available. To update your website type `php yellow.php update all`. You can optionally add the name of an extension. 

If files are deleted you can find them in the `system/trash` folder.

## Examples

Content file with installed extensions:

    ---
    Title: Example page
    ---
    This page shows the installed extensions.

    ! [yellow about]

Content file with current product release:

    ---
    Title: Example page
    ---
    This page shows the current product release.

    ! [yellow release]

Content file with log file:

    ---
    Title: Example page
    ---
    This page shows the latest entries in log file.

    ! [yellow log]

Installing extensions at the command line:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Uninstalling extensions at the command line:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

Showing extensions at the command line:
 
`php yellow.php about`  
`php yellow.php about gallery`  
`php yellow.php about english german swedish`  

Showing updates at the command line:

`php yellow.php update`

Updating website at the command line:
 
`php yellow.php update all`  

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`UpdateCurrentRelease` = currently installed product release  
`UpdateLatestUrl` = URL with updates, `auto` for automatic detection  
`UpdateLatestFile` = file with latest update settings  
`UpdateCurrentFile` = file with current update settings  
`UpdateExtensionFile` = file with extension settings  
`UpdateEventPending` = pending events  
`UpdateEventDaily` = time of next daily event  
`UpdateTrashTimeout` = storage of deleted files in seconds  

The log file can be found in file `system/extensions/yellow-website.log`.

## Acknowledgements

This extension uses [curl](https://github.com/curl/curl) by Daniel Stenberg. Thank you for the useful library.

## Developer

Anna Svensson. [Get help](https://datenstrom.se/yellow/help/).
