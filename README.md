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

# isset() and empty() function
- isset() function returns true if supplied variable is declared and not null.
- empty() function returns true if supplied variable is not declared, null, false, and "".

# Difference of ->, =>, and ::
- -> is equal to . operator in java to access object method and properties.
- => is used for defining lambda expression.
- :: is should only be used when accessing static property and method of object.

###### Conclusion: use -> for object method and property and use :: for object static method and property.
