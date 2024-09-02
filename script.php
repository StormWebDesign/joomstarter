<?php

defined('_JEXEC') or die;

// The class name must match the "element" property in the extensions table of the database,
// or the field "name" in the xml file EXACTLY or the script will not run.
class joomstarterInstallerScript
{
    public function install($parent)
    {
       // Access the manifest object safely
       $manifest = $parent->getManifest();

       if ($manifest && $manifest->version) {
           // Ensure the manifest version is available and convert to string
           $version = (string) $manifest->version;
           echo '<p>The template has been installed to the latest version: ' . htmlspecialchars($version) . '</p>';
       } else {
           echo '<p>Unable to determine the template version from the manifest.</p>';
       }
    }

    public function uninstall($parent)
    {
        echo '<p>This is the uninstall message called from script.php.</p>';
    }

    public function update($parent)
    {
        // Access the manifest object safely
        $manifest = $parent->getManifest();

        if ($manifest && $manifest->version) {
            // Ensure the manifest version is available and convert to string
            $version = (string) $manifest->version;
            echo '<p>The template has been updated to the latest version: ' . htmlspecialchars($version) . '</p>';
        } else {
            echo '<p>Unable to determine the template version from the manifest.</p>';
        }
    }
}
