<?php

return [
/*
 * These are the routes for your backend
 * This file contains your application
 * backenend, admin pages routes
 */
    ['GET', '', function () {
        return 'This is the backend front page!';
    }],


    ['GET', '/users', ['Backend\UserController', 'index']],
    ['GET', '/users/register', ['Backend\UserController', 'create']],
    ['POST', '/users/register', ['Backend\UserController', 'store']],
    ['GET', '/users/delete/{ID}', ['Backend\UserController', 'destroy']],

    ['GET', '/content', ['Backend\ContentController', 'index']],
    ['GET', '/content/create', ['Backend\ContentController', 'create']],
    ['POST', '/content/create', ['Backend\ContentController', 'store']],
    ['GET', '/content/{ID}', ['Backend\ContentController', 'select']],
    ['GET', '/content/delete/{ID}', ['Backend\ContentController', 'destroy']],

    ['GET', '/login', ['Backend\AuthController', 'index']],
    ['POST', '/login', ['Backend\AuthController', 'store']],
    ['GET', '/logout', ['Backend\AuthController', 'logout']],
];
