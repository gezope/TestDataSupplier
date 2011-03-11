<?php
/*
Plugin Name: TestDataSupplier
Plugin URI: http://apricog.com
Description: This plugin enables you to supply lots of data for testing your WordPress without a big efford.
Version: 0.1alpha
Author: Apricog, WPMonks, gricso and gezope
Author URI: http://wpmonks.com
License: GPL2.0 licence
*/
?>

<?php
/*  Copyright 2011  Apricog  (email : admin@apricog.com, gricso@wpmonks.com, gezope@wpmonks.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>

<?php

register_activation_hook(__FILE__,'testdatasupplier_install');

function testdatasupplier_install () {
  //will be executed when installing the plugin
}

?>

<?php

register_deactivation_hook(__FILE__,'testdatasupplier_uninstall');

function testdatasupplier_uninstall() {
  //will be executed when uninstalling the plugin
}

?>

<?php

add_action('init', 'testdatasupplier_init');

function testdatasupplier_init(){
  //loading translations
  load_plugin_textdomain('testdatasupplier', false, plugin_basename(dirname(__FILE__).'/localization'));
}

?>
