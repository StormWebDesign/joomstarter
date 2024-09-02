<?php

defined ( '_JEXEC' ) or die;

//the class name must match the "element" property in the extensions table of the database, or the field "name" in the xml file EXACTLY or the script will not run
class joomstarterInstallerScript
{

    public function install($parent) 
    {
        // Access the manifest file
        $manifest = $parent->get('manifest');
        
        // Get the version element from the manifest
        $version = $manifest->version;
        
        echo '<p>The template has been installed with the latest version: ' . $version . '</p>';
    }

    public function uninstall($parent) 
    {
        echo '<p>The template has been uninstalled.</p>';
    }

    public function update($parent)
    {
        // Access the manifest file
        $manifest = $parent->get('manifest');
        
        // Get the version element from the manifest
        $version = $manifest->version;
        
        echo '<p>The template has been updated to the latest version: ' . $version . '</p>';
    }


}