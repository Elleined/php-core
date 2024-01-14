# php-notes
Notes for PHP

# Install PHP without XAMPP
- Download php [PHP Downloads](https://www.php.net/downloads.php)
- Click windows download with latest LTS version.
- Download then Extract the thread safe zip file.
- Add the php x.x.x folder directory in your environment variables.
- In VS Code download [PHP Server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver).
- In VS Code download [Live Server](
https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer).
- In Chrome Download the [Live Server Reload](https://chrome.google.com/webstore/detail/live-server-web-extension/fiegdmejfepffgpnejdinekhfieaogmj).
- [See this youtube video for more details](https://m.youtube.com/watch?v=etgm6WWQmBw)
# Naming Conventions
1. **Class Names:**
   - Use PascalCase for class names.
   - Use Abstract word for abstract classes. `class AbstractClass`
   - Use Interface word for interfaces. `interface MyInterface`
   - Use Exception word for exception classes `class MyException`
     - Example: `class MyClass`

3. **Method Names:**
   - Use camelCase for method names.
     - Example: `public function myMethod()`

4. **Property Names:**
   - Use camelCase for property names.
     - Example: `private $myProperty`

5. **Constant Names:**
   - Use uppercase letters with underscores for constant names.
     - Example: `const MY_CONSTANT = "constantVariable"`

6. **Variable Names:**
   - Use camelCase for variable names.
     - Example: `$myVariable`
      
7. **File Names:**
   - Use PascalCase with "-" as separator.
     - Example: `MyFile.php`
      
8. **Package Names:**
   - Use PascalCase with "-" as separator.
     - Example: `MyPackage`
    
###### [Naming Conventions Guide](https://flowframework.readthedocs.io/en/stable/TheDefinitiveGuide/PartV/CodingGuideLines/PHP.html)
       
# What is PHP(Hypertext Preprocessor)
- Created by Rasmus Lerdorf in 1994

# Array Functions
1. **`array_column`**: Returns the values from a single column in the input array.
2. **`array_filter`**: Filters elements of an array using a callback function.
3. **`array_key_exists`**: Checks if a specific key exists in an array.
4. **`array_keys`**: Returns all the keys or a subset of the keys of an array.
5. **`array_map`**: Applies a callback to each element of an array.
6. **`array_merge`**: Merges two or more arrays.
7. **`array_pop`**: Pops the element off the end of an array.
8. **`array_push`**: Pushes one or more elements onto the end of an array.
9. **`array_reverse`**: Returns an array with elements in the reverse order.
10. **`array_sum`**: Calculates the sum of values in an array.
11. **`array_unique`**: Removes duplicate values from an array.
12. **`array_values`**: Returns all the values of an array.
###### Note: associative array = HashMap

# isset() and empty() function
- isset() function returns true if supplied variable is declared and not null.
- empty() function returns true if supplied variable is not declared, null, false, and "".
