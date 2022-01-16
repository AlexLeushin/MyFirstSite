<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Практика PHP</title>
<link rel="stylesheet" href="style.css" />
</head>

<body>
	<div class="container">
		<div class="header">
		        <?php include 'menu.inc.php'?>
	    </div>

	    <div class="myImg">
                <?php  echo '<img src="pic/cisco.jpg">'; ?>                    
        </div>

	    <div class="about_me">
            <?php include 'index.php'?>
                <h1>  <?php  echo $priv  ?> </h1>
        </div>

        <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне <?php  echo $age;   ?>  
                    лет </p>
                    <p> Мы научились создавать всякие переменные </p>
                    <p> + изучили простые операции с ними </p>
        </div>
    </div>

    <div class="knowledge">
    	<?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a * $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

    </div>
    
    </div>

            <?php include 'footer.inc.php' ?>

    </div>	










</body>