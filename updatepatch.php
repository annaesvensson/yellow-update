<?php
// Update extension, https://github.com/annaesvensson/yellow-update

class YellowUpdatePatch {
    const VERSION = "0.8.22";
    public $yellow;                 // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        if ($action=="patch") {
            $this->checkDatenstromYellow0815();
            $this->checkDatenstromYellow0816();
            $this->checkDatenstromYellow0817();
            $this->checkDatenstromYellow0818();
            $this->checkDatenstromYellow0819();
            $this->checkDatenstromYellow0820();
            $this->checkDatenstromYellow0821();
            $this->checkDatenstromYellow0822();
        }
    }
    
    // Check patches for Datenstrom Yellow 0.8.15
    public function checkDatenstromYellow0815() {
        $patch = false;
        if (is_dir("system/settings/")) {
            $fileNameSource = "system/settings/system.ini";
            $fileNameDestination = "system/extensions/yellow-system.ini";
            if (is_file($fileNameSource)) {
                $fileData = $fileDataNew = $this->yellow->toolbox->readFile($fileNameSource);
                $fileDataNew = str_replace("language.ini", "yellow-language.ini", $fileDataNew);
                $fileDataNew = str_replace("user.ini", "yellow-user.ini", $fileDataNew);
                if (!$this->yellow->toolbox->createFile($fileNameDestination, $fileDataNew)) {
                    $this->yellow->toolbox->log("error", "Can't write file '$fileNameDestination'!");
                }
            }
            $fileNameSource = "system/settings/language.ini";
            $fileNameDestination = "system/extensions/yellow-language.ini";
            if (is_file($fileNameSource) && !$this->yellow->toolbox->copyFile($fileNameSource, $fileNameDestination)) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileNameDestination'!");
            }
            $fileNameSource = "system/settings/user.ini";
            $fileNameDestination = "system/extensions/yellow-user.ini";
            if (is_file($fileNameSource) && !$this->yellow->toolbox->copyFile($fileNameSource, $fileNameDestination)) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileNameDestination'!");
            }
            if (!$this->yellow->toolbox->deleteDirectory("system/settings/", $this->yellow->system->get("coreTrashDirectory"))) {
                $this->yellow->toolbox->log("error", "Can't delete directory 'system/settings/'!");
            }
            $this->yellow->system->load("system/extensions/yellow-system.ini");
            $this->yellow->system->set("coreSystemFile", "yellow-system.ini");
            $this->yellow->system->set("coreContentDirectory", "content/");
            $this->yellow->system->set("coreMediaDirectory", $this->yellow->lookup->findMediaDirectory("coreMediaLocation"));
            $this->yellow->system->set("coreSystemDirectory", "system/");
            $this->yellow->system->set("coreCacheDirectory", "system/cache/");
            $this->yellow->system->set("coreExtensionDirectory", "system/extensions/");
            $this->yellow->system->set("coreLayoutDirectory", "system/layouts/");
            $this->yellow->system->set("coreThemeDirectory", "system/themes/");
            $this->yellow->system->set("coreTrashDirectory", "system/trash/");
            list($pathInstall, $pathRoot, $pathHome) = $this->yellow->lookup->findFileSystemInformation();
            $this->yellow->system->set("coreServerInstallDirectory", $pathInstall);
            $this->yellow->system->set("coreServerRootDirectory", $pathRoot);
            $this->yellow->system->set("coreServerHomeDirectory", $pathHome);
            date_default_timezone_set($this->yellow->system->get("coreServerTimezone"));
            $this->yellow->language->load("system/extensions/yellow-language.ini");
            $this->yellow->user->load("system/extensions/yellow-user.ini");
            $patch = true;
        }
        $path = $this->yellow->system->get("coreLayoutDirectory");
        foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.html$/", true, false) as $entry) {
            $key = str_replace("pages", "", $this->yellow->lookup->normaliseName(basename($entry), true, true));
            $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
            $fileDataNew = str_replace("text->getHtml(", "language->getTextHtml(", $fileDataNew);
            $fileDataNew = str_replace("yellow->page->getPages()", "yellow->page->getPages(\"$key\")", $fileDataNew);
            $fileDataNew = str_replace("\$page = \$this->yellow->content->shared(\"header\")", "\$page = null", $fileDataNew);
            $fileDataNew = str_replace("\$page = \$this->yellow->content->shared(\"footer\")", "\$page = null", $fileDataNew);
            $fileDataNew = str_replace("\$page = \$this->yellow->content->shared(\"sidebar\")", "\$page = null", $fileDataNew);
            $fileDataNew = str_replace("\$this->yellow->content->shared(\"sidebar\")", "\$this->yellow->page->isPage(\"sidebar\")", $fileDataNew);
            $fileDataNew = str_replace("php if (\$page = null)", "php /* Remove this line */ if (\$page = null)", $fileDataNew);
            if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                $this->yellow->toolbox->log("error", "Can't write file '$entry'!");
            }
            if ($fileData!=$fileDataNew) $patch = true;
        }
        if ($patch) $this->yellow->toolbox->log("info", "Apply patches for Datenstrom Yellow 0.8.15");
    }
        
    // Check patches for Datenstrom Yellow 0.8.16
    public function checkDatenstromYellow0816() {
        $patch = false;
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($this->yellow->system->isExisting("coreServerTimezone")) {
            date_default_timezone_set($this->yellow->system->get("coreServerTimezone"));
            $coreTimezone = $this->yellow->system->get("coreServerTimezone");
            if (!$this->yellow->system->save($fileName, array("coreTimezone" => $coreTimezone))) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileName'!");
            }
            $patch = true;
        }
        if ($this->yellow->system->isExisting("updateNotification")) {
            $updateEventPending = $this->yellow->system->get("updateNotification");
            $settings = array("updateCurrentRelease" => "0.8.16", "updateEventPending" => $updateEventPending);
            if (!$this->yellow->system->save($fileName, $settings)) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileName'!");
            }
            $patch = true;
        }
        if ($patch) $this->yellow->toolbox->log("info", "Apply patches for Datenstrom Yellow 0.8.16");
    }

    // Check patches for Datenstrom Yellow 0.8.17
    public function checkDatenstromYellow0817() {
        $patch = false;
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($this->yellow->system->get("galleryStyle")=="photoswipe") {
            if (!$this->yellow->system->save($fileName, array("galleryStyle" => "zoom"))) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileName'!");
            }
            $patch = true;
        }
        if ($this->yellow->system->get("sliderStyle")=="flickity") {
            if (!$this->yellow->system->save($fileName, array("sliderStyle" => "loop"))) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileName'!");
            }
            $patch = true;
        }
        if ($this->yellow->system->isExisting("blogLocation")) {
            $blogStartLocation = $this->yellow->system->get("blogLocation");
            if (!$this->yellow->system->save($fileName, array("blogStartLocation" => $blogStartLocation))) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileName'!");
            }
            $patch = true;
        }
        if ($this->yellow->system->isExisting("wikiLocation")) {
            $wikiStartLocation = $this->yellow->system->get("wikiLocation");
            if (!$this->yellow->system->save($fileName, array("wikiStartLocation" => $wikiStartLocation))) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileName'!");
            }
            $patch = true;
        }
        if ($patch) $this->yellow->toolbox->log("info", "Apply patches for Datenstrom Yellow 0.8.17");
    }

    // Check patches for Datenstrom Yellow 0.8.18
    public function checkDatenstromYellow0818() {
        $patch = false;
        if ($this->yellow->system->isExisting("blogPagesMax") || $this->yellow->system->isExisting("wikiPagesMax")) {
            $path = $this->yellow->system->get("coreContentDirectory");
            foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.(md|txt)$/", true, false) as $entry) {
                $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                $fileDataNew = str_replace("[blogarchive", "[blogmonths", $fileDataNew);
                $fileDataNew = preg_replace("/Layout: blogpages/i", "Layout: blog-start", $fileDataNew);
                $fileDataNew = preg_replace("/Layout: wikipages/i", "Layout: wiki-start", $fileDataNew);
                if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                    $this->yellow->toolbox->log("error", "Can't write file '$entry'!");
                }
                if ($fileData!=$fileDataNew) $patch = true;
            }
            $path = $this->yellow->system->get("coreLayoutDirectory");
            foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.html$/", true, false) as $entry) {
                $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                $fileDataNew = str_replace("yellow->page->getPage(\"blog\")", "yellow->page->getPage(\"blogStart\")", $fileDataNew);
                $fileDataNew = str_replace("yellow->page->getPage(\"wiki\")", "yellow->page->getPage(\"wikiStart\")", $fileDataNew);
                if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                    $this->yellow->toolbox->log("error", "Can't write file '$entry'!");
                }
                if ($fileData!=$fileDataNew) $patch = true;
            }
        }
        if ($patch) $this->yellow->toolbox->log("info", "Apply patches for Datenstrom Yellow 0.8.18");
    }

    // Check patches for Datenstrom Yellow 0.8.19
    public function checkDatenstromYellow0819() {
        $patch = false;
        $fileNameOld = $this->yellow->system->get("coreExtensionDirectory")."yellow.log";
        $fileNameNew = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreWebsiteFile");
        if (is_file($fileNameOld)) {
            $fileDataOld = $this->yellow->toolbox->readFile($fileNameOld);
            $fileDataNew = $this->yellow->toolbox->readFile($fileNameNew);
            if (!$this->yellow->toolbox->deleteFile($fileNameOld, $this->yellow->system->get("coreTrashDirectory"))) {
                $this->yellow->toolbox->log("error", "Can't delete file '$fileNameOld'!");
            } elseif (!$this->yellow->toolbox->createFile($fileNameNew, $fileDataOld.$fileDataNew)) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileNameNew'!");
            }
            $patch = true;
        }
        if ($patch) $this->yellow->toolbox->log("info", "Apply patches for Datenstrom Yellow 0.8.19");
    }
    
    // Check patches for Datenstrom Yellow 0.8.20
    public function checkDatenstromYellow0820() {
        $patch = false;
        if ($this->yellow->system->isExisting("galleryStyle") || $this->yellow->system->isExisting("sliderStyle")) {
            $path = $this->yellow->system->get("coreContentDirectory");
            foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.(md|txt)$/", true, false) as $entry) {
                $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                $fileDataNew = preg_replace("/\[gallery\s+(\S+)\s+(zoom|simple)/i", "[gallery $1 name $2", $fileDataNew);
                $fileDataNew = preg_replace("/\[gallery\s+(\S+)\s+(\-)\s+([\d\.\%]+)/i", "[gallery $1 name zoom $3", $fileDataNew);
                $fileDataNew = preg_replace("/\[slider\s+(\S+)\s+(loop|fade|slide)/i", "[slider $1 name $2", $fileDataNew);
                $fileDataNew = preg_replace("/\[slider\s+(\S+)\s+(\-)\s+([\d\.\%]+)/i", "[slider $1 name loop $3", $fileDataNew);
                if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                    $this->yellow->toolbox->log("error", "Can't write file '$entry'!");
                }
                if ($fileData!=$fileDataNew) $patch = true;
            }
        }
        if ($patch) $this->yellow->toolbox->log("info", "Apply patches for Datenstrom Yellow 0.8.20");
    }
    
    // Check patches for Datenstrom Yellow 0.8.21
    public function checkDatenstromYellow0821() {
        $patch = false;
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($this->yellow->system->isExisting("coreStaticUrl")) {
            $commandStaticUrl = $this->yellow->system->get("coreStaticUrl");
            if (!$this->yellow->system->save($fileName, array("commandStaticUrl" => $commandStaticUrl))) {
                $this->yellow->toolbox->log("error", "Can't write file '$fileName'!");
            }
            $patch = true;
        }
        if ($this->yellow->system->isExisting("blogEntriesMax")) {
            $path = $this->yellow->system->get("coreContentDirectory");
            foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.(md|txt)$/", true, false) as $entry) {
                $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                $fileDataNew = str_replace("[blogchanges", "[blogpages", $fileDataNew);
                if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                    $this->yellow->toolbox->log("error", "Can't write file '$entry'!");
                }
                if ($fileData!=$fileDataNew) $patch = true;
            }
        }
        $path = $this->yellow->system->get("coreLayoutDirectory");
        foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.html$/", true, false) as $entry) {
            $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
            $fileDataNew = str_replace("yellow->toolbox->normaliseArguments(", "yellow->lookup->normaliseArguments(", $fileDataNew);
            if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                $this->yellow->toolbox->log("error", "Can't write file '$entry'!");
            }
            if ($fileData!=$fileDataNew) $patch = true;
        }
        if ($patch) $this->yellow->toolbox->log("info", "Apply patches for Datenstrom Yellow 0.8.21");
    }
    
    // Check patches for Datenstrom Yellow 0.8.22
    public function checkDatenstromYellow0822() {
        $patch = false;
        $path = $this->yellow->system->get("coreLayoutDirectory");
        foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.html$/", true, false) as $entry) {
            $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
            $fileDataNew = str_replace("yellow->page->getContent(", "yellow->page->getContentHtml(", $fileDataNew);
            $fileDataNew = str_replace("yellow->page->getExtra(", "yellow->page->getExtraHtml(", $fileDataNew);
            if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                $this->yellow->toolbox->log("error", "Can't write file '$entry'!");
            }
            if ($fileData!=$fileDataNew) $patch = true;
        }
        if ($patch) $this->yellow->toolbox->log("info", "Apply patches for Datenstrom Yellow 0.8.22");
    }
}
