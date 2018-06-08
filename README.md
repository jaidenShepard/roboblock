# Robo Blocks

Robo blocks is a fun little game in which you control a robot arm as it moves a set of blocks around. There is no goal, just have fun!

## requirements
This games requires php in order to run.

Linux
```bash
$ sudo apt install php-cli
```

MacOS
```
# Mac comes with php installed!
```

## Running the game

In your terminal, run 
```bash
php robo_block.php
```
Then follow the on screen prompts!

### Commands

* move a over b - Clears all blocks over A and moves it over B

* move a onto b - Clears all blocks over A and B, then moves A onto B

* pile a over b - Takes A and all blocks over A, and moves them over B

* pile a onto b - Clears B, then takes A and all blocks over A, and moves them onto B

* quit - quits the game


#### Design
The design is faily simple. Alongside the main array that holds the blocks, I chose to include an index to track the location of the blocks. This allows for linear time lookups of blocks, making the code much faster than if it had to manually loop over the array looking for the blocks. See code comments 

Given the time, I would have liked to make more of an effort to better abstract some of the methods. I do see some very similar code repeated in places, though a clean abstraction wasn't immediately obvious to me. 

While it wasn't required, I did add some input validation and prompts, for ease of use.