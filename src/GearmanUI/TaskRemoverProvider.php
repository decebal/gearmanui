<?php

namespace GearmanUI;

class TaskRemoverProvider implements \Silex\ServiceProviderInterface
{

    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param \Silex\Application $app An Application instance
     */
    public function register(\Silex\Application $app)
    {
        $app['gearman.task.remover'] = $app->share(function() use($app){
            return new \GearmanUI\Gearman\Task\Remover($app['gearmanui.servers']);
        });
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(\Silex\Application $app)
    {

    }
}