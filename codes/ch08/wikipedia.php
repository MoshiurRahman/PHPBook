<?PHP
//??????? class ?????? ??? ???
include 'wikipedia.class.php';
//???? ??????????? ???? ???? ????? ??????????? ???? ???? ??? ??????????'? ?????? ???? ???
$x = new wikipedia('http://en.wikipedia.org/');
//??? get_page ????? ?? ??? ??? ??? ?? ???????? ??????? ???????? ???
echo $x->get_page("Linus_Torvalds");
?>