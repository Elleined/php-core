<?
// Typically the user inputted password in login form
$password = "myPassword";

// Typically the password hash saved in database
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo $hashedPassword . "<br>";

// Extra Step: to get the password hash when user is trying to log in get his password via his email then proceed to next line

// You will compare the user inputted password and his password hash saved in database
echo password_verify($password, $hashedPassword) ? "Password match" : "Password not match";
?>