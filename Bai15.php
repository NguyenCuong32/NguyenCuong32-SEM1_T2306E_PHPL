<?php
class File {
    public $name;
    public $size;

    public function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
    }

    public static function calculateTotalSize($files) {
        $totalSize = 0;
        foreach ($files as $file) {
            $totalSize += $file->size;
        }
        return $totalSize;
    }
}

// Sử dụng
$file1 = new File("file1.txt", 100);
$file2 = new File("file2.txt", 200);

$files = [$file1, $file2];
$totalSize = File::calculateTotalSize($files);
echo "Tổng kích thước của các tệp là: " . $totalSize . " bytes";
?>