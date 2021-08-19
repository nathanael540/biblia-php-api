<?php

/**
 * Solion: An extensible micro-framework.
 *
 * @copyright   Copyright (c) 2011, Mike Cao <mike@mikecao.com>
 * @license     MIT, http://solionphp.com/license
 */

/**
 * The Solion class is a static representation of the framework.
 *
 * Core.
 * @method  static void start() Starts the framework.
 * @method  static void path($path) Adds a path for autoloading classes.
 * @method  static void stop() Stops the framework and sends a response.
 * @method  static void halt($code = 200, $message = '') Stop the framework with an optional status code and message.
 *
 * Routing.
 * @method  static void route($pattern, $callback, $modules) Maps a URL pattern to a callback.
 * @method  static \solion\net\Router router() Returns Router instance.
 *
 * Extending & Overriding.
 * @method  static void map($name, $callback) Creates a custom framework method.
 * @method  static void register($name, $class, array $params = array(), $callback = null) Registers a class to a framework method.
 *
 * Filtering.
 * @method  static void before($name, $callback) Adds a filter before a framework method.
 * @method  static void after($name, $callback) Adds a filter after a framework method.
 *
 * Variables.
 * @method  static void set($key, $value) Sets a variable.
 * @method  static mixed get($key) Gets a variable.
 * @method  static bool has($key) Checks if a variable is set.
 * @method  static void clear($key = null) Clears a variable.
 *
 * Views.
 * @method  static void render($file, array $data = null, $key = null) Renders a template file.
 * @method  static \solion\template\View view() Returns View instance.
 *
 * Request & Response.
 * @method  static \solion\net\Request request() Returns Request instance.
 * @method  static \solion\net\Response response() Returns Response instance.
 * @method  static void redirect($url, $code = 303) Redirects to another URL.
 * @method  static void json($data, $code = 200, $encode = true, $charset = "utf8", $encodeOption = 0, $encodeDepth = 512) Sends a JSON response.
 * @method  static void jsonp($data, $param = 'jsonp', $code = 200, $encode = true, $charset = "utf8", $encodeOption = 0, $encodeDepth = 512) Sends a JSONP response.
 * @method  static void error($exception) Sends an HTTP 500 response.
 * @method  static void notFound() Sends an HTTP 404 response.
 *
 * HTTP Caching.
 * @method  static void etag($id, $type = 'strong') Performs ETag HTTP caching.
 * @method  static void lastModified($time) Performs last modified HTTP caching.
 */
class Solion
{
    /**
     * Framework engine.
     *
     * @var \solion\Engine
     */
    private static $engine;

    // Don't allow object instantiation
    private function __construct()
    {
    }
    private function __destruct()
    {
    }
    private function __clone()
    {
    }

    /**
     * Handles calls to static methods.
     *
     * @param string $name Method name
     * @param array $params Method parameters
     * @return mixed Callback results
     * @throws \Exception
     */
    public static function __callStatic($name, $params)
    {
        $app = Solion::app();

        return \solion\core\Dispatcher::invokeMethod(array($app, $name), $params);
    }

    /**
     * @return \solion\Engine Application instance
     */
    public static function app()
    {
        static $initialized = false;

        if (!$initialized) {
            require_once __DIR__ . '/autoload.php';

            self::$engine = new \solion\Engine();

            $initialized = true;

            // Load our routes from root directory
            $routesDIR = dirname(__FILE__) . "/../routes";
            $routes = glob($routesDIR . '/{,*/,*/*/,*/*/*/}*.{php}', GLOB_BRACE);
            foreach ($routes as $route) {
                require $route;
            }
        }

        return self::$engine;
    }
}