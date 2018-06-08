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
