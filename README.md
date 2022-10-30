<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Update 0.8.87

Keep your website up to date.

<p align="center"><img src="update-screenshot.png?raw=true" alt="Screenshot"></p>

## How to update a website

The first option is to update your website in a [web browser](https://github.com/annaesvensson/yellow-edit). Log in with your user account. Go to the settings and check for updates. Your website will show if updates are available. You need to have update rights to update a website. All user accounts are stored in file `system/extensions/yellow-user.ini`. 

The second option is to update your website at the [command line](https://github.com/annaesvensson/yellow-command). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php update`. This will show if updates are available. To update your website type `php yellow.php update all`. You can optionally add the name of an extension. 

If files are deleted you can find them in the `system/trash` folder.

## How to add extensions

You can download and add extensions as ZIP-files. You can also add extensions at the [command line](https://github.com/annaesvensson/yellow-command). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php install` followed by more arguments.

## How to remove extensions

You can manually remove extensions as PHP-files. You can also remove extensions at the [command line](https://github.com/annaesvensson/yellow-command). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php uninstall` followed by more arguments.

## How to show the current version

You can show the current version of your website in a [web browser](https://github.com/annaesvensson/yellow-edit). Log in with your user account. Go to the settings. You can also show the current version at the [command line](https://github.com/annaesvensson/yellow-command). Open a terminal window. Go to your installation folder, where the file `yellow.php` is. Type `php yellow.php about`. 

You can use shortcuts to show information about the website:

`[yellow about]` for current version  
`[yellow release]` for current product release  
`[yellow log]` for latest entries in log file  

## Examples

Content file with current version:

    ---
    Title: Example page
    ---
    This page shows the current version.

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

Showing current version at the command line:
 
`php yellow.php about`

Showing updates at the command line:

`php yellow.php update`

Updating website at the command line:
 
`php yellow.php update all`  

Adding extensions at the command line:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Removing extensions at the command line:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`UpdateExtensionUrl` = repository with extensions  
`UpdateExtensionFile` = file with extension settings  
`UpdateLatestFile` = file with latest update settings  
`UpdateCurrentFile` = file with current update settings  
`UpdateCurrentRelease` = currently installed product release  
`UpdateEventPending` = pending events  
`UpdateEventDaily` = time of next daily event  
`UpdateTrashTimeout` = storage of deleted files in seconds  

The log file can be found in file `system/extensions/yellow-website.log`.

## Installation

[Download extension](https://github.com/annaesvensson/yellow-update/archive/main.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Anna Svensson. [Get help](https://datenstrom.se/yellow/help/).
