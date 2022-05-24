1. Project Title

	Task Management System using Laravel and MySQL

2. Getting Started

	These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

3. Prerequisites

	What things you need to install the software and how to install them

	3.1 You need to have xampp or wamp installed on your system. For downloading the latest version of xampp, visit https://www.apachefriends.org/download.html and for downloading the latest version of wampp, visit http://www.wampserver.com/en/. Both the packages comes with pre installed php interpreter, apache server and mysql database.
	
	3.2 To install the latest version of laravel on your system, you can follow either of the two ways mentioned below :-
	
		3.2.1 Installing via Composer -  To install via composer, first download the fresh copy of the composer from the following link - https://getcomposer.org/Composer-Setup.exe
		
			After installing composer, navigate to the folder "htdocs" inside your xampp installation in command prompt and issue the following command :-
			
			composer create-project laravel/laravel {directory} 4.2 --prefer-dist
			
		3.2.2 You can also install it via Laravel installer. First download the laravel installer via the following command -
		
			composer global require "laravel/installer=~1.1"
			
			Then, you can issue the following command to install the fresh copy of the laravel :-
			
			laravel new <project_name>
			
4. Working of the Task Management System -  This system is mainly a task management based system, wherein a user will manage his or her day to day tasks by adding, editing or deleting them or in simple words, by managing them. This system consists of four basic modules for effectively managing the tasks which are as follows :-

	4.1 Add New Task - This module is mainly concerned with adding a new task by the user.
	
	4.2 Edit The Task - This module is mainly concerned with editing the task or updating the task by the user.
	
	4.3 Delete The Task - This module is mainy concerned with deleting the task or removing the task by the user.
	
	4.4 Listing The Tasks -  This module is mainly concerned with listing of all tasks , which have been added by the user.
			

5. Built With

	5.1 XAMPP or WAMP Server - The local web development server
	
	5.2 PHP - Website Programming Language
	
	5.3 Laravel - PHP based Open Source Website Development Framework
	
	5.4 MySQL - Open Source Database Administrative Management Tool
	
	
6. Authors

	6.1 Pankaj Ramesh Vasnani - https://github.com/pankajvasnanitech123
