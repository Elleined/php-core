<?
namespace OOP\Car;

use OOP\Car\Enumeration\CarModel;

abstract class AbstractCar implements DrivableInterface {
    private CarModel $model;
    private String $color;
    private int | float $speed;

    public function __construct(CarModel $model, String $color, int | float $speed) {
        $this->model = $model;
        $this->color = $color;
        $this->speed = $speed;
    }
    
    /**
     * @override
     */
    public abstract function drive();

    
    public final function setModel(CarModel $model): void {
        $this -> model = $model;
    }
    
    public final function getModel(): CarModel {
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
        return "Model: " . $this -> model -> getName() . "\nColor: " . $this -> color . "\nSpeed: " . $this -> speed . "\n";
    }
}
?>