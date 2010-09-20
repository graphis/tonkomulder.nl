<?php
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('default', '(<language>)(/)(<action>(/<id>))',
    array('language' => $langs_abr,
        'controller' => 'page',
        'action' => 'get'))
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'get',
        'id'         => 'welcome',
        'language' => $default_lang,
    ));

/*Route::set('login', '(<language>)(/)login(/<action>(/<id>))',
    array('language' => $langs_abr,
        'action' => 'login|logout'))
    ->defaults(array(
        'controller' => 'login',
        'action' => 'login',
        'language' => $default_lang,
    ));
 */
Route::set('page', '(<language>)(/)page(/<action>(/<id>))',
    array('language' => $langs_abr,
        'action' => 'get'))
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'get',
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
