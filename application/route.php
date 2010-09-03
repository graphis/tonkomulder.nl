<?php
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('psy', 'psy/(<action>)')
    ->defaults(array(
                'controller' => 'psy',
                'action'     => 'index',
                ));
Route::set('default', '(<action>(/<id>))')
        ->defaults(array(
                    'controller' => 'welcome',
                    'action'     => 'index',
                    ));
