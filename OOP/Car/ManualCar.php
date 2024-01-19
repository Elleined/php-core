<?
class ManualCar extends AbstractCar {
    use GotoTrait;

    private float | int $gasPercentage;

    public function __construct(CarModel $model, String $color, int | float $speed, float | int $gasPercentage) {
        parent::__construct($model, $color, $speed);
        $this -> gasPercentage = $gasPercentage;
    }   

    /**
     * @override
     */
    public function drive() : void {
        echo "Manual car is driving <br>";
    }

    /**
     * @override
     */
    public function goTo(string $place): void {
        echo "Manual car is going to $place <br>";
    }

    public function refuel() : void {
        $this -> gasPercentage += 1;
        echo "Manual car gas percentage is now: " . $this -> getGasPercentage() . "<br>";
    }

    public final function setGasPercentage(int | float $gasPercentage): void {
        $this -> gasPercentage = $gasPercentage;
    }

    public final function getGasPercentage(): int | float {
        return $this -> gasPercentage;
    }

    /**
     * @override
     */
    public function __toString(): String {
        return "Model: " . parent::getModel() -> getName() . "<br>Color: " . parent::getColor() . "<br>Speed: " . parent::getSpeed() . "<br>Gas Percentage: " . $this -> gasPercentage . "<br>";
    }
}
?>