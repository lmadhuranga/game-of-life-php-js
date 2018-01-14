# Game of life 
 
![Gosper Glider Gun](https://github.com/lmadhuranga/game-of-life-php-js/blob/master/public/img/cropedimg.gif?raw=true)

### Introduction of game

The Game of Life, also known simply as Life, is a board game originally created in 1860 by Milton Bradley, as The Checkered Game of Life. The Game of Life was America's first popular parlour game.[1] The game simulates a person's travels through his or her life, from college to retirement, with jobs, marriage, and possible children (4) along the way. Two to six players can participate in one game. Variations of the game accommodate eight to ten players.

### Rules of game

The universe of the Game of Life is an infinite two-dimensional orthogonal grid of square cells, each of which is in one of two possible states, alive or dead, or "populated" or "unpopulated". Every cell interacts with its eight neighbours, which are the cells that are horizontally, vertically, or diagonally adjacent. At each step in time, the following transitions occur:

 * Any live cell with fewer than two live neighbours dies, as if caused by underpopulation.
 * Any live cell with two or three live neighbours lives on to the next generation.
 * Any live cell with more than three live neighbours dies, as if by overpopulation.
 * Any dead cell with exactly three live neighbours becomes a live cell, as if by reproduction.


## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on machine.

### Prerequisites

What things you need to install the software and how to install them

1. Install the [Compoesr](https://getcomposer.org/download/)
    
2. Install the lamp or wamp or [mamp](https://www.mamp.info/)
 

### Installing

A step by step series of examples that tell you have to get a development env running

1. Go to htdocs folder in dev enviroment 

2. Copty to git clone local folder
  ```
    git clone https://github.com/lmadhuranga/game-of-life-php-js
  ```
3. go to project 
  ```
    cd game-of-life-php-js
  ```
4. install the composer packages

  ```
    composer install
  ```
5. browse the game page with url
  ```
    http://localhost/game-of-life-php-js/public
  ```
  
## Running the tests
  1. Run PHP unit test
    ```
     ./bin/phpunit
    ```
## Built With

* [PHP] - Backend Programming language used
* [Symfony](https://symfony.com/doc) - The web framework used
* [Boostrap](https://getbootstrap.com/) - CSS framework used
* [Javascript] - Front end language used
* [jQuery](https://api.jquery.com/) - Front end library used
 
## Authors

* **Madhuranga Senadheera** - [lmadhuranga](https://github.com/lmadhuranga)

## License

This project is licensed under the MIT License.
