# Final Project Web App

## Project Title : Online Game Rental

## INTRODUCTION
As the project title suggests, this web application allows the user to rent video games online. There are many video games  
available for user to select from. The selection of video games can be varied based on the platform, whether it is an console  
exclusive and PC. The user need to create an account in order to rent video games available in the web app and each rent will  
be recorded in the web app to keep track with the rental expiration period and if the user didn't manage to give the game back  
before the rental expiration period, he or she will be fined accordingly. 
## OBJECTIVE
1. Can allow user to rent multiple kind of online games at the time.
2. User can have experience to play various genre of games.
3. To give alternative for gamer a chance to play online games.

## FEATURES AND FUNCTIONALITY
1. Signup, Login and logout
2. User can rent video games
3. User can give ratings and comments on the rented games
4. game availability check

## MODEL, VIEWS, CONTROLLER AND DATABASE ERD WITH ONE TO MANY RELATIONSHIP
**MODEL**  
GameRental.php - To create tables in the database

**CONTROLLER**  
rentController.php - To process every data input by the user and send to view page

**VIEWS**  
index.blade.php - Index page of the web application  
signup.blade.php - signup page of the web application  
gamelist.blade.php - a page shows a list of game to rent  
rentpage.blade.php - a page shows all rental details  

## A sequence	diagram	to	represent	the	interaction	of	the	web	application

## REFERENCES

- http://www.commodityrentals.com/videogames.php
- https://www.gamefly.com/games
- https://i.stack.imgur.com/BbaRt.jpg
