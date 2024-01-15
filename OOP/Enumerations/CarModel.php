<?
enum CarModel {
    case BMW;
    case HONDA;

    public function getName(): String {
        return match ($this) {
            self::BMW => 'BMW',
            self::HONDA => 'HONDA',
        };
    }
}
?>