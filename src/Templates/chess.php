<?php

include_once "../Entity/Chess/AbstractPiece.php";
include_once "../Entity/Chess/Rook.php";
include_once "../Entity/Chess/Knight.php";
include_once "../Entity/Chess/Queen.php";
include_once "../Entity/Chess/King.php";
include_once "../Entity/Chess/Pawn.php";
include_once "../Entity/Chess/Bishop.php";
include_once "../Utility/utility.php";
include_once "header.php";

//$rook = new Rook('black');
//$knight = new Knight('black');
//$queen = new Queen('black');
//$king = new King('black');
//$pawn = new Pawn('black');
//$bishop = new Bishop('black');

//$rook->move();
//echo "<br>";
//$knight->move();
//echo "<br>";
//$queen->move();
//echo "<br>";
//$king->move();
//echo "<br>";
//$pawn->move();
//echo "<br>";
//$bishop->move();

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