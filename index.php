<html> 
<head> 
<link rel="stylesheet" type="text/css" href="css/style.css">  
<title>Рецепты мира</title> 
<link rel="manifest" href="manifest.json">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 


 
</head> 
<body> 
 
<header> 
  <h1><br><br><br><h3>Рецепты мира<IMG SRC="лого.PNG" WIDTH=100 HEIGHT=100 ></h3><br><br><br></h1> 
</header> 

        <h2>Разделы</h2>
        <nav>
            <ul>
                <button><li><a href="index.php">Главная</a></li></button>
                <button><li><a href="we.html">О нас</a></li></button>
				<button><li><a href="history.html">Добавить рецепты</a></li></button>
             
            </ul>
        </nav>


<?php 
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test");
$sql="SELECT name,description,pic_url FROM recepies";
$result=mysqli_query($link,$sql);
while($line=mysqli_fetch_row($result)){
	echo "<br><B>".$line[0]."</B><br><br>";
	echo "<IMG SRC=".$line[2]." WIDTH=200 HEIGHT=200 ALIGN=\"left\"><br><br>";
	echo $line[1]."<br><br><br><br><br><br><br><br><br> ";
}
; ?>
<div class="logo"></div> 
<div id="tabs"> 
<ul> 


</ul> 



<footer>  
        <div class="container">  
            <p>&copy; Все права защищены.</p>  
        </div>  
    </footer> 
</body> 
</html>