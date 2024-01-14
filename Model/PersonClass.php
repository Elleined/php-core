<?
  class Person {
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
?>