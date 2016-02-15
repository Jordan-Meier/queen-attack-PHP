<?php
    class Queen
    {
        private $x_coord;
        private $y_coord;

        function __construct($x,$y)
        {
            $this->x_coord = $x;
            $this->y_coord = $y;
        }
        function canAttack($user_x, $user_y)
        {
            if ($user_x == $this->x_coord || $user_y == $this->y_coord) {
                return true;
            } else {
                return false;
            }
        }
    }

 ?>
