<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />


</head>
<body>

<div id="container">
	<h1>骑手的在线测试</h1>
    
    <form method="post" action="<?php echo base_url();?>index.php/rider/Questions/resultdisplay">
        <input type="hidden" name="rider_name" id="rider_name" value="<?=$rider_name?>">
        <input type="hidden" name="rider_email" id="rider_email" value="<?=$rider_email?>" >
        <input type="hidden" name="rider_password" id="rider_password" value="<?=$rider_password?>" >
    
    <?php foreach($questions as $row) { ?>

        <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
       ?>
    
    <p><?=$row->quizID?>.<?=$row->question?></p>

        <input type="radio" name="quizid<?= $row->quizID ?>" value="<?= $ans_array[0] ?>" required> A .<?= $ans_array[0] ?>
        <br>
        <input type="radio" name="quizid<?= $row->quizID ?>" value="<?= $ans_array[1] ?>"> B .<?= $ans_array[1] ?><br>
        <input type="radio" name="quizid<?= $row->quizID ?>" value="<?= $ans_array[2] ?>"> C .<?= $ans_array[2] ?><br>

    
    <?php } ?>
    
    <br><br>
    <input type="submit" value="提交">
    
    </form>
    
</div>

</body>
</html>