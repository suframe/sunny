<?php

namespace suframe\sunny;

use suframe\sunny\command\Sunny as SunnyCommand;

class Service extends \think\Service
{

    /**
     * 注册服务
     */
    public function register()
    {
        if (!$this->app->runningInConsole()) {
            return true;
        }
        $this->commands(SunnyCommand::class);
    }

}
