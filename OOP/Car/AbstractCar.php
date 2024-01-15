<?
abstract class AbstractCar implements Drivable {
    private String $model;
    private String $color;
    private int | float $speed;

    public function __construct(String $model, String $color, int | float $speed) {
        $this->model = $model;
        $this->color = $color;
        $this->speed = $speed;
    }
    
    /**
     * @override
     */
    public abstract function drive();

    public function goTo(String $place): void {
        echo "Going to $place ...\n";
    }
    
    public final function setModel(String $model): void {
        $this -> model = $model;
    }
    
    public final function getModel(): String {
        return $this -> model;
    }

    public final function setColor(String $color): void {
        $this -> color = $color;
    }

    public final function getColor(): String {
        return $this -> color;
    }

    public final function setSpeed(int | float $speed): void {
        $this -> speed = $speed;
    }

    public final function getSpeed(): int | float {
        return $this -> speed;
    }

    public function __toString(): String {
        return "Model: " . $this -> model . "\nColor: " . $this -> color . "\nSpeed: " . $this -> speed . "\n";
    }
}
?>