<?
    $connect=mysql_connect( "localhost", "bini", "1234") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysql_select_db("bini_db",$connect);
?>
