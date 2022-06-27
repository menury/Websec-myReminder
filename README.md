# Project report

#### Name : Nuridah Binti Sapee-e
#### Matric No : 1828074
#### Title of the web application : myReminder

## 1. Introduction
In our daily life, we only have twenty-four hours. As a result, it could be challenging to manage all our tasks in a single day. This imposes constraints on our day-to-day job. Time management is essential for balancing work, social life, and sleep. Time division is required to assist the individual in completing all of their responsibilities. Thus, a timetable should be created for the individual's duties. Students usually must complete a variety of assignments and it is often difficult for them to keep track of their tasks. Their ability to manage their time has become critical. As a result, effective time management is essential.

myReminder is a simple web application that allows users, mainly students of all levels, to manage their homework in a checklist format. Users may also create a list of chores to perform or other items connected to schoolwork. Typically, these tasks are grouped in order of priority, and our system assists the user in doing so. Users can utilize the ToDoList application to replace the conventional approach of writing down homework lists on paper and conveniently access them on the same desktop screen where they attend online classes.

For this project, myReminder has been enhanced to protect the application by using web security enchangement including input validation, authentication, authorization, xss and csrf prevention, database security principle and file security principle.

## 2. Objective of enhancement
The project objectives are:
- To protect information from unauthorized access and disclosure.
- To Ensure the dependability and accuracy of information and IT resources by preventing unwanted data manipulation or destruction. 


## 3. Web Application Security Enhancement
   ### 3.1 Input Validation
Front-end and back-end validation are used in the application to validate input.HTML patterns are used on the client side to check input in the files create.blade.php and edit.blade.php. In server side, regex expressions are utilised on the server side for back-end validation, and they are used in the controller (ReminderController.php) for function updating and storing.
   
   ### 3.2 Authentication
 
   ### 3.3 Authorization
   -
   ### 3.4 XSS and CSRF Prevention

   ### 3.5 Database Security Principles
To prevent database got sql injection, the regex expression is implemented in this app by validate user input to  make usre it does not contain SQL syntax.

   ### 3.6 File Security Principles
To protect the file, the environment(.env) variable App Debug is set to false to prevent the web application from displaying error messages containing sensitive code. Beside, all file are saved in php language to prevent file leak to unauthorized access. There is a file named htaccess in the public folder that has been updated to prevent directory traversal.

## 4. Reference

