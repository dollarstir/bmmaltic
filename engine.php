

<?php

require_once 'loader/autoloader.php';
$router = new Router([
    /* Welcome to Yolk RouteEngine
     ***************************************************************
     * the ('/migration') route should be commented out  in production mode.
     * To avoid destruction of database
     *
     * use it in Development mode to build your database tables
     *************************************************************
     * NB :  ('/') - indicate the default page that loads
     * changet he this rounte destination to your default website homepage file after installation successful
     * eg : new Route(
        '/',
        function ($context) {
            return Viewer::view('mainfiles/index.php', $context);
        }
    ),
    ************************************************************************************
     */

    new Route(
        '/migration',
        function ($context) {
            return Viewer::view('storage/database.php', $context);
        }
    ),

    new Route(
        '/',
        function ($context) {
            return Viewer::view('main.php', $context);
        }
    ),
    
       new Route(
        '/home',
        function ($context) {
            return Viewer::view('main.php', $context);
        }
    ),
    
       new Route(
        '/services',
        function ($context) {
            return Viewer::view('service.php', $context);
        }
    ),
    
       new Route(
        '/aboutus',
        function ($context) {
            return Viewer::view('about.php', $context);
        }
    ),
    
       new Route(
        '/contactus',
        function ($context) {
            return Viewer::view('contact.php', $context);
        }
    ),
    
    
    new Route(
        '/sitemap',
        function ($context) {
            return Viewer::view('sitemap.xml', $context);
        }
    ),
]);
$router->launch();
