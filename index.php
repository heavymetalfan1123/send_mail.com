<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>чат</title>
    <style>
        
    </style>
</head>
<body>
    <form >
    кому:
    <input type ="text" name="to"></input>
    тема:
    <input type ="text" name="subject"></input>
    меседж:
        <input type ="text" name="message"></input>
        
        <input type ="submit" ><br> </input>
    </form>
    
    <?php
        $to=$_GET["to"];
        $sb=$_GET["subject"];
        $str=$_GET["message"];
        mail($to,$sb,$str);
        
       
       

            
            

        
        
        
        
         
        
        
    ?>
    
    
    
</body>
</html>
