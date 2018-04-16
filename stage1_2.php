<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background: black;
            
        }
        div{
            height: 400px;
            color: white;
            margin: 3em 3em 0 3em ;
            background: gray;
            text-align: center;
            padding-top: 30vh;
        }
        .heading{
            font-family: cursive;
            font-weight: bolder;
        }
        p{
            font-family: cursive;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<div>
    <h1 class="heading">HELLO WORLD</h1>
    <p>
       It's <?php echo  date(" h:i "); ?>
    </p>
</div>
</body>
</html>