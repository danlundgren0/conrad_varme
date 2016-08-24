<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "iconfont".
 *
 * Auto generated 12-08-2016 07:50
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Icon font',
  'description' => 'Support for fontawesome or a custom icon font. Allows to show an icon besides headers and to add icons via RTE. RTE feature based on code from ext:fontawesome.',
  'category' => 'misc',
  'author' => 'Pascal Mayer',
  'author_email' => 'typo3@bsdist.ch',
  'author_company' => '',
  'state' => 'beta',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '0.9.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-7.6.99',
    ),
    'conflicts' => 
    array (
      'fontawesome' => '',
    ),
    'suggests' => 
    array (
    ),
  ),
  'clearcacheonload' => true,
);

