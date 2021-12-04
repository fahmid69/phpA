<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    
    print_r($_POST);
    
    
    
    ?>




    <form class="box d-flex align-items-center flex-column container" method="post">
		<h1 class="text-uppercase Ptext">Contact</h1>
		<input type="text" name="name" placeholder="Name">
		<input type="email" name="email" placeholder="E-mail">
        <input type="text" name="message" placeholder="Message" class="mess">
		<a href="#"><input type="Submit" name="btn" value="Send"></a>
    </form>

</body>
</html>