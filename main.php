<?php
include("robo_block.php");

$handle = fopen ("$argv[1]","r");
$num_blocks = fgets($handle);

$robo_block = new RoboBlocks((int) $num_blocks);
while(!feof($handle)){
    $operation = explode(' ', fgets($handle));

    if ("$operation[0]" == "quit") {
        echo $robo_block;
        break;
    } else {
        $action = $operation[0];
        $a = (int) $operation[1];
        $modifier = $operation[2];
        $b = (int) $operation[3];

        if ($action == "move" && $modifier == "onto") {
            $robo_block->move_onto($a, $b);
        } elseif ($action == "move" && $modifier == "over") {
            $robo_block->move_over($a, $b);
        } elseif ($action == "pile" && $modifier == "onto") {
            $robo_block->pile_onto($a, $b);
        } elseif ($action == "pile" && $modifier == "over") {
            $robo_block->pile_over($a, $b);
        }
    }
}
?>