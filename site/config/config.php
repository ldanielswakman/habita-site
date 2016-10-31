<?php

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

$locale_tr = array(
  LC_COLLATE  => 'tr_TR.utf8',
  LC_MONETARY => 'tr_TR.utf8',
  LC_NUMERIC  => 'tr_TR.utf8',
  LC_TIME     => 'tr_TR.utf8',
  LC_MESSAGES => 'tr_TR.utf8',
  LC_CTYPE    => 'en_US.utf8'
);

// Language settings
c::set('languages', array(
  array(
    'code' => 'tr',
    'name' => 'Türkçe',
    'default' => true,
    'locale' => $locale_tr,
    'url' => '/',
  ),
  array(
    'code' => 'en',
    'name' => 'English',
    'locale' => 'en_US.UTF-8',
    'url' => '/en',
  ),
));



// Configure date handling
c::set('date.handler','strftime');


// Automatic Language detection
// c::set('language.detect', true); 


// Caching
c::set('cache', true);

c::set('cache.ignore', array(
  'home',
  'page',
  'membership-options'
));
