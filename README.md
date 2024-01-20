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
   - Use uppercase letters with '_' underscores as separator.
     - Example: `const MY_CONSTANT = "constantVariable"`

6. **Variable Names:**
   - Use camelCase for variable names.
     - Example: `$myVariable`
      
7. **File Names:**
   - Use PascalCase.
     - Example: `MyFile.php`
      
8. **Package Names:**
   - Use PascalCase.
     - Example: `MyPackage`

9. **Namespace**
   - Use PascalCase and should match with folder structure.
     - Example: `MyPackage/MyClass`
     
###### [Naming Conventions Guide](https://flowframework.readthedocs.io/en/stable/TheDefinitiveGuide/PartV/CodingGuideLines/PHP.html)
       
# What is PHP(Hypertext Preprocessor)
- Created by Rasmus Lerdorf in 1994

# Difference of ->, =>, and ::
- -> is equal to . operator in java to access object method and properties.
- => is used for defining lambda expression.
- :: is should only be used when accessing static property and method of object.

###### Conclusion: use -> for object method and property and use :: for object static method and property.

# Difference of require, require_once, include, and include_once
- require and include keyword is used to import a code multiple times independently in entire php file.

- require_once and include_once keyword is used to import a code only once in entire php file.

# What is namespace
- Think of namespace as virtual package that you can use to avoid naming collision between files with same name.

###### When using namespace ensure that order or require and include statements are correct before accessing it.
###### It is recommended to use / in all the global function, class, and fields to explicitly tell to php that we are going to use the global not the local function with same name.

# Traits
- Traits acts like a default method in interface in java where you have a method that have same behavior throughout the implementing classes however in php you would use traits.

# What is superglobals
- It is accesible anywhere throughout our whole project regardless of the scope.
##### $_POST
##### $_GET
##### $_SESSION
##### $_COOKIE
##### $_ENV
##### $_FILES

# PHP file declaration order
```
<?php
declare(strict_types=1); // Used to enforce strict typing in current php file

// namespace

// require/ include

// use

// code
 ?>
```
# Troubleshooting
### [Undefined mysql_connect function](https://www.youtube.com/watch?v=h3TXzgsMVQ4)
