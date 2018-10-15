<?php
//// Start the session
//session_start();
//?>
<html lang="en">
<head>
	<meta charset="utf-8">


</head>
<body>

<div id="container">
	<h1> 骑手的在线测试</h1>

    
    <?php $score =0; ?>
    
      <?php $array1= array(); ?>
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>
      <?php $array5= array(); ?>
      <?php $array6= array(); ?>
      <?php $array7= array(); ?>
      <?php $array8= array(); ?>
      
         <?php foreach($checks as $checkans) { ?>
               <?php array_push($array1, $checkans); } ?>
               
               
        <?php foreach($results as $res) { ?>
               <?php array_push($array2, $res->answer); 
			         array_push($array3, $res->quizID); 
			         array_push($array4, $res->question); 
			         array_push($array5, $res->choice1); 
			         array_push($array6, $res->choice2); 
			         array_push($array7, $res->choice3); 
					 array_push($array8, $res->answer); 
			   } ?>
               
               
           <?php 
		       for ($x=0; $x <10; $x++) { ?>
 
    <form  method="post" action="<?php echo base_url();?>index.php/rider/Questions/quizdisplay">
  
    
    <p><?=$array3[$x]?>.<?=$array4[$x]?></p>
    

      <?php if ($array2[$x]!=$array1[$x]) { ?>
      
           <p><span style="background-color: #FF9C9E"><?=$array1[$x]?></span></p>
           <p><span style="background-color: #ADFFB4"><?=$array2[$x]?></span></p>
           
      <?php } else { ?>
      
           <p><span style="background-color: #ADFFB4"><?=$array1[$x]?></span></p>
           
           <?php $score = $score + 1; ?>



    <?php } } ?>
<!--        --><?php
//        $_SESSION["$score"] = "$score";
//        ?>
    <br><br>
        <input type="hidden" name="rider_name" id="rider_name" value="<?=$rider_name?>">
        <input type="hidden" name="rider_email" id="rider_email" value="<?=$rider_email?>" >
        <input type="hidden" name="rider_password" id="rider_password" value="<?=$rider_password?>" >
        <input type="submit" value="重来">
    </form>
    <form  method="post" action="<?php echo base_url();?>index.php/rider/Questions/check_score">
        <input type="hidden" name="rider_name" id="rider_name" value="<?=$rider_name?>">
        <input type="hidden" name="rider_email" id="rider_email" value="<?=$rider_email?>" >
        <input type="hidden" name="rider_password" id="rider_password" value="<?=$rider_password?>" >
        <h2>Your Score: </h2>
        <span  id="score" name="score" value="<?=$score?>"><?=$score?>/10</span>
    <input type="submit" value="结束" >
    </form>

    
</div>
</body>
</html>
<!--<script>-->
<!--    function checkscore()/*  search database from server*/-->
<!--    {-->
<!---->
<!--        var score = document.getElementById("score").value;-->
<!--        var xmlhttp = new XMLHttpRequest();-->
<!--        xmlhttp.onreadystatechange = function() {-->
<!---->
<!--            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {-->
<!--            }-->
<!---->
<!--        };-->
<!--        xmlhttp.open("Post", "Questions/check_score", true);-->
<!--        xmlhttp.send(score);// JavaScript Document-->
<!--    }-->
<!--</script>-->