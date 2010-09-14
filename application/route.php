<?php
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('default', '(<language>)(/)(<action>(/<id>))',
    array('language' => $langs_abr,
        'controller' => 'welcome',
        'action' => 'index'))
    ->defaults(array(
        'controller' => 'welcome',
        'action'     => 'index',
        'language' => $default_lang,
    ));

Route::set('welcome', '(<language>)(/)welcome(/<action>(/<id>))',
    array('language' => $langs_abr,
        'action' => 'index'))
    ->defaults(array(
        'controller' => 'welcome',
        'action'     => 'index',
        'language' => $default_lang,
    ));

Route::set('cv', '(<language>)(/)cv(/<action>(/<id>))',
    array('language' => $langs_abr,
        'action' => 'index'))
    ->defaults(array(
        'controller' => 'cv',
        'action' => 'index',
        'language' => $default_lang,
    ));

Route::set('contact', '(<language>)(/)contact(/<action>(/<id>))',
    array('language' => $langs_abr,
        'action' => 'index'))
    ->defaults(array(
        'controller' => 'contact',
        'action' => 'index',
        'language' => $default_lang,
    ));
