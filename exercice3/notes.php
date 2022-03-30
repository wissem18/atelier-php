<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            height:100%;
            width:100%;
        }
        .container{
    width: 50%;
    overflow-y: auto;
    padding: 10px;
    display: flex;
    flex-wrap: wrap;
    height: min-content;
    
}

.note{
    width: 40%;
    height: min-content; 
    border: 2px solid black;
    border-radius: 10px;
    background-color: rgba(0,0,0,0.1);
    margin: 10px;
    text-align: center;
    padding-bottom: 7px;
}

.note .contenu{
    padding : 0px 10px;
    color: rgb(40,50,50);
}
    </style>
    <title>Notes</title>
</head>
<body>
<div class="container" >
        <?php 
            foreach($_SESSION['notes'] as $data){
                $pos = strpos($data,'/');
                $titre = substr($data,0,$pos);
                $content = substr($data,$pos-strlen($data)+1);
        ?>
        <div class="note">
            <h2 ><?= $titre?></h2>
            <div class="contenu">
                <p><?= $content ?></p>
            </div>
        </div> 
        <?php
            }
        ?>       
    </div>
</body>
</html>