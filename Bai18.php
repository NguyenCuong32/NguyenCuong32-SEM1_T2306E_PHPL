<?php
class Logger {
    private static $instance;
    private $log;

    private function __construct() {
        $this->log = [];
    }

    public static function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function addLog($message) {
        $this->log[] = $message;
    }

    public function getLogs() {
        return $this->log;
    }
}

// Sử dụng
$logger1 = Logger::getInstance();
$logger1->addLog('Log message 1');

$logger2 = Logger::getInstance();
$logger2->addLog('Log message 2');

var_dump($logger1 === $logger2); // Kết quả: bool(true)

var_dump($logger1->getLogs()); // Hiển thị các thông báo log đã được thêm
?>