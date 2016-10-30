<?php

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/


// Language settings
c::set('languages', array(
  array(
    'code' => 'tr',
    'name' => 'Türkçe',
    'default' => true,
    'locale' => 'tr_TR.UTF-8',
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
