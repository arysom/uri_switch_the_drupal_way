<?php
/**
 * @file
 * additional settings.
 */
//...
switch ($env['env_name']) {
  // Production specific settings
  case 'production':

    //ADOBE LAUNCH
    $config['my_example.settings']['adobe_launch_tool'] = 'https://assets.adobedtm.com/4444.min.js';
  break;
}

