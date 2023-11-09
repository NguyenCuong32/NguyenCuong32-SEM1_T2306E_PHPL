<?php
class Validation {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePassword($password) {
        // Kiểm tra các điều kiện phức tạp cho mật khẩu ở đây
        // Ví dụ: mật khẩu phải có ít nhất 8 ký tự và chứa ít nhất một chữ hoa, một chữ thường và một số
        // Trả về true nếu mật khẩu hợp lệ, ngược lại trả về false
    }

    public static function validateCommonField($value) {
        // Thực hiện các kiểm tra thông thường khác ở đây nếu cần
        // Ví dụ: kiểm tra xem giá trị có rỗng không, kiểm tra độ dài tối đa, v.v.
        // Trả về true nếu giá trị hợp lệ, ngược lại trả về false
    }
}

// Sử dụng
$email = "example@example.com";
if (Validation::validateEmail($email)) {
    echo "Địa chỉ email hợp lệ";
} else {
    echo "Địa chỉ email không hợp lệ";
}

$password = "Password";
if (Validation::validatePassword($password)) {
    echo "Mật khẩu hợp lệ";
} else {
    echo "Mật khẩu không hợp lệ";
}

$value = "Some value";
if (Validation::validateCommonField($value)) {
    echo "Giá trị hợp lệ";
} else {
    echo "Giá trị không hợp lệ";
}
?>