<?php
$route = [];

//System
$route['/'] = ['Page', 'index'];

//page
$route['/login'] = ['Page', 'login'];
//page
$route['/backend'] = ['Page', 'backend'];

//api
$route['/api/login'] = ['User', 'login'];
