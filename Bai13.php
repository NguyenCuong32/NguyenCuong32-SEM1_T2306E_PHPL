<?php
class Logger {
  private static $logCount = 0;

  public static function logMessage($message) {
    echo $message . "\n";
    self::$logCount++;
  }

  public static function getLogCount() {
    return self::$logCount;
  }
}

Logger::logMessage('This is a log message'); // Gọi phương thức để ghi thông điệp
echo Logger::getLogCount(); // In ra số lần log message đã được ghi
?>