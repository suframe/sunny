<?php

namespace suframe\sunny\command;

use think\console\Input;
use think\console\input\Argument;
use think\console\Command;
use think\console\Output;

/**
 * Swoole HTTP 命令行，支持操作：start|stop|reload}sync
 * 支持应用配置目录下的swoole.php文件进行参数配置
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

    protected function execute(Input $input, Output $output): void
    {
        $clientid = config('sunny.clientid');
        if($clientid){
            require(__DIR__ . '/../sdk.php');
        } else {
            $output->error('请先到config/sunny.php配置clientid，如果还没有申请账户请到 http://www.ngrok.cc/ 申请账户');
        }
    }

}
