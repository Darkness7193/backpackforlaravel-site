<?php

// --------------------------------------------------------
// This is only a pointer file, not an actual language file
// --------------------------------------------------------
//
// If you've copied this file to your /resources/lang/vendor/backpack/
// folder, please delete it, it's no use there. You need to copy/publish the
// actual language file, from the package.

// If a langfile with the same name exists in the package, load that one
if (file_exists(__DIR__ . '/../../../../../settings/src/resources/lang/' . basename(__DIR__) . 'settings.php/' .basename(__FILE__))) {
    return include __DIR__ . '/../../../../../settings/src/resources/lang/' . basename(__DIR__) . 'settings.php/' .basename(__FILE__);
}

return [];
