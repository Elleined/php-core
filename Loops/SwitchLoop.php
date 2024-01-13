<?
echo "===== SWITCH LOOP ===== <br>";

$currentWeekday = date("l");

switch($currentWeekday) {
    case "Monday": {
        echo "Its $currentWeekday let's go fishing";
        break;
    }   
    case "Tuesday": {
        echo "Its $currentWeekday let's go roadtrip";
        break;
    }
    case "Wednesday": {
        echo "Its $currentWeekday let's go get some workout;";
        break;
    }
    case "Thursday": {
        echo "Its $currentWeekday let's go practice coding";
        break;
    }
    case "Friday": {
        echo "Its $currentWeekday let's go to sleep";
        break;
    }
    case "Saturday": {
        echo "Its $currentWeekday let's party!";
        break;
    }
    case "Sunday": {
        echo "Its $currentWeekday rest day";
        break;
    }
    default: {
        echo "Unknown day";
    }
}

echo "<hr>";
?>