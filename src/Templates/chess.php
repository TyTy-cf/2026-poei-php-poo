<?php

include_once "../Entity/Chess/Piece.php";
include_once "../Entity/Chess/Rook.php";
include_once "../Entity/Chess/Knight.php";
include_once "../Utility/utility.php";
include_once "header.php";

//$rook = new Rook('black');
//$knight = new Knight('black');
//
//$rook->move();
//echo "<br>";
//$knight->move();

dump(new Rook('black'));
dump(new Rook('black'));
dump(new Rook('white'));
dump(new Rook('white'));
dump(new Knight('black'));
dump(new Knight('black'));
dump(new Knight('white'));
dump(new Knight('white'));


?>

    <div class="row">

    </div>


<?php
include_once __DIR__ . "/footer.php"; ?>