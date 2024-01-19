<?
namespace OOP\Car\Trait;

trait GotoTrait {
    public function goTo(String $place): void {
        echo "Going to $place ...\n";
    }
}
?>