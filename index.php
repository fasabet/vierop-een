<html>
<head>
    <script> 
            
            function Insert(m){
            document.getElementById("idbutton").innerHTML='X';
            
            alert("You Win")            
            
               console.log (m);
           }
    </script>
    
    <style>
            div{
                background-color: pink;
                width: 500px;
                border-style: solid;
                border-color: gray;
                border-width: 2px;
            }
            
            
            button{
                
                background-color: white; /* Green */
                width: 20px;
                border: solid;
                color: green;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            form{
                
            }
            
        </style>
</head>


    <body>
        
        <div>
                <!--input type=text id="idinput"-->
                 <?php
        $toetsen = array(array("","","","","","",""),
                    array("","","","","","",""),
                    array("","","","","","",""),
                    array("","","","","","",""),
                    array("","","","","","",""),
                    array("","","","","","",""));
        
        
        
        for ($x = 0; $x < 6; $x++) {
             echo "<br>";
            for ($y = 0; $y < 7; $y++) {
                //$id= "$x.$y";      //    "1.2"
               $id= $x."".$y;      //    "12"
                //echo "\n";
             
                echo '<button id=idbutton'.$id.' onclick="Insert(\''.$id.'\')">'.$toetsen[$x][$y].'</button>';
                
            }
        }
        
        
        ?>
                
            
        </div>
       <!--input type="text" id="tempStorePlus"-->





    </body>   
</html>
