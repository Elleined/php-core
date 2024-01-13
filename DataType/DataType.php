<?
    echo "===========<br>";
    echo "DATA TYPES <br>";
    echo "===========<br> <hr>";

    echo "===== CONSTANT VARIABLE ===== <br>";
    const MY_CONSTANT_VARIABLE = "Denielle Mar M. De Guzman";
    echo "My constant variable is my name: " . MY_CONSTANT_VARIABLE . "<br> <hr>";

    echo "===== BOOLEAN ===== <br>";
    echo TRUE . "<br>";
    echo FALSE . "<br> <hr>"; // Note PHP does not print a false boolean

    echo "===== INTEGER ===== <br>";
    $myIntegerVariable = 5;
    echo "My integer variable is: {$myIntegerVariable} <br> <hr>";

    echo "===== FLOAT ===== <br>";
    $myFloatVariable = 69.5;
    echo "My float variable is: {$myFloatVariable} <br> <hr>";

    echo "===== STRING ===== <br>";
    $myStringVariable = "Elleined";
    echo "My string variable is my username: {$myStringVariable} <br> <hr>";

    echo "===== STRING ===== <br>";
    $myStringVariable = "Elleined";
    echo "My string variable is my username: {$myStringVariable} <br> <hr>";

    echo "===== ARRAY ===== <br>";
    $myArray = array(1, 2, 3, 4, 5);
    foreach ($myArray as $myArrayValue) {
        echo "{$myArrayValue} <br>";
    }
    echo "<hr>";

    echo "===== OBJECT ===== <br>";
    class MyClass {
        private $name;
        private $age;

        public function __construct(String $name, int $age) {
            $this -> name = $name;
            $this -> age = $age;
        }

        public function getName(): String {
            return $this -> name;
        }

        public function getAge(): int {
            return $this -> age;
        }
    }
    $myObject = new MyClass("Denielle", 21);
    echo "My object name is: {$myObject -> getName()} <br>";
    echo "My object age is: {$myObject -> getAge()} <br> <hr>";
    
    echo "===== NULL ===== <br>";
    $myNullVariable = null;
    echo "Should print null: {$myNullVariable} <br> <hr>";
?>