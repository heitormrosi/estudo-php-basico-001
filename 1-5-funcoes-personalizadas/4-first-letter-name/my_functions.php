<?php

function capital_h(
    string $character = "H",
    string $spacer = " "
): void {
    for ($row = 0; $row < 10; $row++) {
        if ($row == 4) {
            for ($column = 0; $column < 10; $column++) {
                echo $character;
            }
        } else {
            for ($column = 0; $column < 10; $column++) {
                if ($column == 0 || $column == 9) {
                    echo $character;
                } else {
                    echo $spacer == " " ? "&nbsp;" : $spacer;
                }
            }
        }

        echo "<br />";
    }
}
