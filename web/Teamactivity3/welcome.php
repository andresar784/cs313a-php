<?php if(isset($_POST["name"])){
    ?>

    
<!DOCTYPE html>
<html>
<head>
    <title>Welcome php</title>
</head>
<body>
     Name <?php echo $_POST["name"]; ?><br>
    Mail address <?php echo $_POST["email"];?><br>
    Major <?php echo $_POST["major"];?><br>
    Comments <?php echo $_POST["comment"];?>
    Visited Continents 
    <?php foreach($_POST["continents"] as $countries){
        echo $countries;
        echo ", ";
    }?>
</body>
</html>>

<?php }
