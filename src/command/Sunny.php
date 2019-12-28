<?php

namespace suframe\sunny\command;

use suframe\sunny\SunnySdk;
use think\console\Input;
use think\console\Command;
use think\console\Output;

/**
 * thinkphp ngrok内网穿透库命令
 */
class Sunny extends Command
{
    /**
     * The configs for this package.
     *
     * @var array
     */
    protected $config;

    public function configure()
    {
        $this->setName('sunny')
            ->setDescription('sunny-ngrok for ThinkPHP');
    }

    protected function execute(Input $input, Output $output)
    {
        $clientid = config('sunny.clientid');
        if($clientid){
            $sdk = new SunnySdk($clientid);
            $sdk->run();
        } else {
            $output->error('请先到config/sunny.php配置clientid，如果还没有申请账户请到 http://www.ngrok.cc/ 申请账户');
        }
    }

}
