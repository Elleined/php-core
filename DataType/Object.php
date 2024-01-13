<?
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
?>