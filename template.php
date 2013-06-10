<?php

/**
 * @file template.php
 */

function stsllcbootstrap_process_page(&$vars) {
  // Add theme settings
  $vars['brandingpath'] = theme_get_setting('stsllcbootstrap_brandingpath');
}