<?
class MyClass {
    public function __construct() {
        echo  "This will print the encapsulating class name which is: " . __CLASS__ . "<br>";
    }

    public function myMethod() {
        echo "This will print the method name of this method which is: " . __METHOD__ . "<br>";
    }
}
?>