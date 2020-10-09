<?php


// Helper permettant de définir si un route et active ou non et ainsi appliquer la classe 'current-menu'
function isActiveMenu($routeName) {
    return Route::is($routeName) ? 'current-menu' : '';
}
