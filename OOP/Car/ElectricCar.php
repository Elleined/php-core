<?
namespace OOP\Car;

use OOP\Car\Trait\GotoTrait;
use OOP\Car\Enumeration\CarModel;

class ElectricCar extends AbstractCar {
    use GotoTrait;

    private int $batteryPercentage;

    public function __construct(CarModel $model, string $color, $speed, int $batteryPercentage) {
        parent::__construct($model, $color, $speed);
        $this -> batteryPercentage = $batteryPercentage;
    }

    /**
     * @override
     */
    public function drive(): void {
        echo "Electric car is driving <br>";
    }

    /**
     * @override
     */
    public function goTo(String $place): void {
        echo "Electric car is going to $place <br>";
    }

    public final function charge(): void {
        $this -> batteryPercentage += 1;
        echo "Electric car battery percentage is: " . $this -> getBatteryPercentage() . " <br>";
    }

    public final function getBatteryPercentage(): int {
        return $this -> batteryPercentage;
    }

    public final function setBatteryPercentage(int $batteryPercentage): void {
        $this -> batteryPercentage = $batteryPercentage;
    
    }

    /**
     * @override
     */
    public function __toString(): String {
        return "Model: " . parent::getModel() -> getName() . "<br>Color: " . parent::getColor() . "<br>Speed: " . parent::getSpeed() . "<br>Battery Percentage: " . $this -> batteryPercentage . "<br>";
    }
}
?>