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

<?php
//add_option();
//update_option();
//delete_option();
?>

<?php
//creating a top-level menu

add_action('admin_menu', 'tds_create_menu');

function tds_create_menu () {

  //variables used used by add_menu_page
  $page_title_for_toplevel_menu = 'TestDataSupplier';
  $menu_title_for_toplevel_menu = 'TestDataSupplier';
  $capability_for_TDS = 'administrator';
  function function_for_TDS() {
    //will be implemented
  }
  $handle = '__FILE__';
  //$icon_for_TDS;

  //create main menu
  add_menu_page($page_title_for_toplevel_menu,
                $menu_title_for_toplevel_menu,
                $capability_for_TDS,
                'function_for_TDS',
                $handle
                //$icon_for_TDS,
                 );
/*
  //create submenu items
  add_submenu_page(__FILE__, 
                   'Upload Test Users', 
                   'Upload Users', 
                   'administrator', 
                   __FILE__.'_upload_users', 
                   'tds_upload_users');

  add_submenu_page(__FILE__, 
                   'Upload Test Posts', 
                   'Upload Posts', 
                   'administrator', 
                   __FILE__.'_upload_posts', 
                   'tds_upload_posts');

  add_submenu_page(__FILE__, 
                   'Upload Test Pages', 
                   'Upload Pages', 
                   'administrator', 
                   __FILE__.'_upload_pages', 
                   'tds_upload_pages');

  add_submenu_page(__FILE__, 
                   'Upload Test Comments', 
                   'Upload Comments', 
                   'administrator', 
                   __FILE__.'_upload_comments', 
                   'tds_upload_comments');

  add_submenu_page(__FILE__, 
                   'Upload Test Links', 
                   'Upload Links', 
                   'administrator', 
                   __FILE__.'_upload_links', 
                   'tds_upload_links');
*/

}

?>

<?php



?>
