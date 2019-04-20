# Agilysis Technical Test

## Comments

## Test1.Products of an array
I've installed a unit test(via composer) to check the tests.i created an app folder to set up autoload. The algorithm i typed is in the ArrayProductGenerator.php file. Also i  added a ProductOfArrayShouldTest file in tests folder. The tests code is the same and hasnt been touched. i created this seperate file so i could run the test case via cmd on my system through "vendor/bin/phpunit" . 

## Test2.Web Development task
 
### Story 01
I created a register.php file to store all the php code for convience.The code in this page checks for all the necessary conditions mentioned in story01. An array called errors is created which stores all the errors encounted if any of the conditions arent met and will be displayed to the user.If all the data submitted is correct the user will be redirected to the dashboard page.

### Story 02
I created a login.php page which checks the users login credentials. if the user is valid he will be redirected to the dashboard page.

### Story 03
Any guest user will not be able to visit the dashboard and the code for this is in the home/index.php page.

### Story 04
on click on the logout option in the dashboard navbar the logged in user will be logged out and wont be able to access the dashboard page until he logs in again.

### Story 05
Once the user is logged in the user will be able to see the fibonacci sequence of the firt 21 numbers plotted in a graph format.
i encoded the array and passed it so it can be accessed in the js file.

### Story 06
Below the graph the fibonacci series will be displayed in a table. the code for this is in the home/index page 

### Story 07
i have created a drop down just below the Fibonacci Sequence header. On selecting any list in the drop down the table will display the following data list selected. the code for this is in home/index page. here i send a req to the fib.php page where i fetch the required data to be fetched.

## Note
the database file will be available in the database folder 
the database connections code is present in a server.php page which is included wherever necessary
