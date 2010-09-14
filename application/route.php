<?php
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('default', '(<language>)(/)(<action>(/<id>))',
    array('language' => $langs_abr,
        'action' => 'index'))
    ->defaults(array(
        'controller' => 'welcome',
        'action'     => 'index',
        'language' => $default_lang,
    ));
