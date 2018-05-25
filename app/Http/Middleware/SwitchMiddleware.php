<?php


namespace App\Http\Middleware;

/**
 * Class SwitchMiddleware
 *
 * @package App\Http\Middleware
 */
class SwitchMiddleware
{

    /**
     * @param $request
     * @param $next
     *
     * @return mixed
     */
    public function handle($request, $next)
    {
        $config = app('config');
        $db = app('db');
        $db->purge('mysql');

        $config->set('database.connections.mysql.database', 'test_2');

        $db->reconnect('mysql');

        return $next($request);
    }
}