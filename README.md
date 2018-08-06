# php_online_shop   

GENERAL INFORMATION:

* Code divided into 3 parts:

    1. Classes
    2. controllers of different parts of the page (eg. adding user, login, adding products to the cart)
    3. templates
        - main template (with CSS and Bootstrap links etc)
        - templates for different parts of the page
    
    Ad 1. Classes: namespaces used
        
    Ad 2. Controllers follow the same schema:
        
            - autoloader used
            - variable defined (eg.: title for the page, template to display)
            - $_POST, $_GET, $_SESSION superglobals used
            - objects created and used (with methods)
            - template loaded
            - data passed to View
            - Example with comments in: pupuce/controller/login/loginController.php
                    and                 pupuce/controller/product/showProductsController.php
                    
    Ad 3. Detailed templates share similar schema:
        
            - HTML code with PHP variables, passed from the controller
            - different code displayed depending on the condition (eg. who is logged),
            - loops used to iterate over passed arrays or objects
            - Example with comments in: pupuce/view/mainView.php
                    and                 pupuce/view/product/showProductsView.php

* Autoloader used to load classes (using namespaces)
* Page connected to DB (communication works properly), creation of DB: DB_creation.txt
* Only basic CSS added (no time)
* page available online: www.anulla.eu/pupuce
    admin: anna@gmail.com, password: 123

THINGS THAT WORK:
1. CRUD for PRODUCTS (adding, reading, editing, removing products)
2. CRUD for USERS (adding, reading, editing, removing users)
3. login system for client/user and admin/employee
3. different parts accessible depending on who is logged / different view depending on who is logged

        eg. admin
            - possibility of adding and removing and updating product to DB but not adding product to the cart
            - possibility of adding/removing/updating client/user
            - admin can't modify client's Id and registration date = read only
            - admin can't see user's password
            - possibility to log in and out

        eg. client/user
            - possibility to register and logging in/out
            - possibility to add product to the basket (in theory for the moment)
            
4. message displayed after every action (eg. product successfully added)
5. CART displaed for user with id 1, after logged (anna@gmail.com, pass: 123);
    displays quantity and calculates subtotal and total
6. file: config.toChange.php requires the real data (DB host, password etc) and changing name to config.php

TODO
1. Finish CART;
    For the moment only loading cart from the DB works (existing CARTS: user 1)
    add: adding CART to DB
    add: empty CART
2. verify if action actually successful before redirecting and displaying the message
3. Hash password
4. add second input for the password while registering the user/client (compare the two)
5. CSS + Bootstrap modals
6. add additional condition to login (eg.: checking if not empty), add security and RegEx
7. add missing properties of classes (only essential used for the moment)
8. handling errors and exceptions
9. add pictures from user computer to the server (not the DB), now: link required to the picture already online


THINGS THAT NEED FIXING
1. Registration date - changing with every update (to change in DB)
2. Rename User to Client
3. verification before displaying a successful message
4. Proper displaying of a price (with two places after coma)
5. order and rename columns in DB and properties of objects
