<?php


namespace App\Logging;
use Monolog\Formatter\LineFormatter;
use \Monolog\Handler\SyslogHandler;
class CustomizeFormatter
{
    public const SIMPLE_FORMAT = "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n";
    /**
     * 自定义给定的日志实例。
     *
     * @param \Illuminate\Log\Logger $logger
     * @return void
     */
    public function __invoke($logger)
    {
        //$format = "%channel%.%level_name%: %message% %context% %extra% [%datetime%]\n";
        foreach ($logger->getHandlers() as $handler) {//getHandlers()方法是被$logger动态调用的，是\Monolog\logger类方法
            $handler->setFormatter(new LineFormatter(self::SIMPLE_FORMAT, null, true, true));
        }
    }
}
