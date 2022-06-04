<?php


add_action("admin_menu", function () {
  add_menu_page(
   __('Delux Mobile App Builder', 'textdomain'),
   'Delux Mobile App Builder',
   'manage_options',
   'delux_mobile_app',
   function (){
   	include dmaPluginPath .  "admin/pages/defaults-page.php";
   },
   '',
   2
  );

  add_submenu_page(
    'delux_mobile_app',
    'Homepage Settings',
    'Homepage Settings',
    'manage_options',
    "dma_hompage_settings",
    function (){
   	include dmaPluginPath . 'admin/pages/homepage-settings.php';
   }
  );

  add_submenu_page(
    'delux_mobile_app',
    'Splash Screen',
    'Splash Screen',
    'manage_options',
    "dma_splash_screen",
    function (){
   	include dmaPluginPath . 'admin/pages/splash-screen.php';
   }
  );

  add_submenu_page(
    'delux_mobile_app',
    'General Settings',
    'General Settings',
    'manage_options',
    "dma_general_settings",
    function (){
   	include dmaPluginPath . 'admin/pages/general-settings.php';
   }
  );

  add_submenu_page(
    'delux_mobile_app',
    'How To Use',
    'How To Use',
    'manage_options',
    "dma_how_to_use",
    function (){
   	include dmaPluginPath . 'admin/pages/how-to-use.php';
   }
  );

});
