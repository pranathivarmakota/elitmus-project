﻿
# "Uncovering the Secrets: The Ultimate Treasure Hunt Adventure
    Project : LoginPage (pranathivarmakota.github.io)
 # About
 The treasure hunt an adventerous game appears to be an interactive adventure that takes place in a virtual world. Players are tasked with solving clues and puzzles that will ultimately lead them to the location of the treasure.The treasure hunt game promises to be a thrilling and immersive experience.

# Description:
This project contains two HTML files, "index.php = (https://github.com/pranathivarmakota/elitmus-project/blob/main/index.php") and "puzzle.html =("https://github.com/pranathivarmakota/elitmus-project/blob/main/puzzle.html). The index.html file contains a login form with two input fields for the username and password. The form submits the data to a backend, which inserts the data into a MySQL database. The login form also has an onsubmit function that redirects the user to the puzzle.php file.

The puzzle.php file contains a simple puzzle game("Uncovering the Secrets: The Ultimate Treasure Hunt Adventure"). that the user can play after logging in. The game is created using JavaScript and has different levels of difficulty.




## Getting Started
To get started with the project, you can clone the repository to your local machine using the following command:
   git-clone https://github.com/pranathivarmakota/elitmus-project.git

 if u want the updated repository then use command:
    git pull origin

  After cloning the repository, you can open the index.php file in your browser to access the login form. Once you submit the login form, you will be redirected to the puzzle.html file where you can play the puzzle game.
## Bulit with
   The below languages are used to built the project
   
    1.html
    2.php
    3.java script
    4.css



## Prerequisites
 To run the project, you will need a web server that supports PHP and MySQL. You will also need a MySQL database to store the login credentials.

 Here in this project I prefer to use XAMPP v3.3.0

 XAMPP is a free and open-source software package that provides an easy way to set up a web server environment on your local machine. It includes Apache (a web server), PHP (a programming language), and MySQL (a database management system).

 
 
## Installation

1.Download and install XAMPP v3.30 from the official website.
![Screenshot (22)](https://user-images.githubusercontent.com/113531544/236977819-1772478e-4bfd-4f53-b6df-4d93d359340c.png)
2.Start the XAMPP Control Panel and start the Apache and MySQL services.

3.Open your web browser and navigate to http://localhost/phpmyadmin. 4.Create a new MySQL database by clicking on the "New" button on the left-hand side and giving your database a name.
 ![Screenshot (21)](https://user-images.githubusercontent.com/113531544/236978168-64d612ab-78d5-4ef1-97bb-66bcf2e3489d.png)

5.Select the newly created database from the list on the left-hand side and click on the "Import" tab.

6.Click on the "Choose File" button and select the database.sql file located in the project's database folder.

7.Click on the "Go" button to import the SQL file and create the necessary tables for the login credentials.

![Screenshot (23)](https://user-images.githubusercontent.com/113531544/236978502-a0653cad-d2c7-4e5a-ae67-b429ddb1dd1f.png)
8.Copy the project files to the htdocs folder in your XAMPP installation directory (usually located in C:\xampp\htdocs).


9.Edit the database connection details in the index.html file to match your MySQL database configuration.



## Sql Connection(From code)
 <?php
  $con= mysqli_connect("localhost","pranathi","password","database");
   $n1=$_GET['username'];
   $p1=$_GET['password'];
   $dt="insert into table2(username1,password1) values('$n1','$p1')";
   mysqli_query($con,$dt);
?>
  

$con= mysqli_connect("localhost","pranathi","password","database"):

  Syntax : mysqli_connect($host, $username, $password, $databasename); 


##  run XAMPP
In your web browser, navigate to http://localhost/project-folder-name (replace "project-folder-name" with the name of the folder where you copied the project files).
The project should now be up and running, and you can use the login credentials stored in the MySQL database to log in.

 


## Usage
To use the project, you can follow these steps:

1.Open the index.php file in your browser to access the login form.
![WhatsApp Image 2023-05-09 at 02 06 22](https://user-images.githubusercontent.com/113531544/236978726-38743670-3154-44c5-b95e-a5d3564da572.jpg)


2.Enter your username and password and click on the "Login" button.
 ![WhatsApp Image 2023-05-09 at 02 19 49](https://user-images.githubusercontent.com/113531544/236979073-97fc169f-e937-41e3-bee4-d7d88a42eeac.jpg)

If the login is successful, you will be redirected to the puzzle.html file.
3.Play the Uncovering the Secrets: The Ultimate Treasure Hunt Adventure and have fun!
![image](https://user-images.githubusercontent.com/113531544/236979859-1d726cbb-d1dd-4233-a21f-946e3b248d73.png)
[WhatsApp Image 2023-05-09 at 02 17 11](https://user-images.githubusercontent.com/113531544/236980037-ee45215b-34b6-45d6-a2dc-055bfb454b1c.jpg)



















## Contributing
Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement". Don't forget to give the project a star! Thanks again!

Fork the Project
Create your Feature Branch (git checkout -b feature/AmazingFeature)
Commit your Changes (git commit -m 'Add some AmazingFeature')
Push to the Branch (git push origin feature/AmazingFeature)
Open a Pull Request
## License
This project is licensed under the MIT License - see the LICENSE file for details.




## Acknowledgements
The background image used in the login page is from Cloudinary.
The Uncovering the Secrets: The Ultimate Treasure Hunt Adventure game is inspired by a tutorial on Codrops.
 
## Contact Details
Project link: https://pranathivarmakota.github.io/elitmus-project/

email : pranathivarma855@gmail.com
