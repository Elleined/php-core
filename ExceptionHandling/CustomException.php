<?
class CustomException extends Exception {
    public function __construct(String $message) {
        $this -> message = $message;
    }
}
?>