<html>
<title>Sort</title>
        <style>

        table,td
        {
            border: 1px solid white;
            border-collapse: collapse;
            text-align: center;
        }
        tr
        {
            background-color: #96D4D4;
        }
        </style>
    <body>
        <center>
            <?php
            $numOfArrange= $_POST['numOfArrange'];
            for($i=0;$i<$numOfArrange;$i++)
            {  $allNums[$i]=$_POST['num'.$i];}
                    
                if(isset($_POST['smallest']))
                {
                $choose="form smallest to largest ";
                for($a=0;$a<$numOfArrange;$a++)
                {
                    for($b=$a+1;$b<$numOfArrange;$b++)
                    {
                        if($allNums[$b]<$allNums[$a])
                        {
                            $temp=$allNums[$b];
                            $allNums[$b]=$allNums[$a];
                            $allNums[$a]=$temp;
                        }
                    } 
                        
                }
                }
                elseif (isset($_POST['Biggest'])) 
                {
                    $choose="form largest to smallest ";
                for($a=0;$a<$numOfArrange;$a++)
                {
                    for($b=$a+1;$b<$numOfArrange;$b++)
                    {
                        if($allNums[$b]>$allNums[$a])
                        {
                            $temp=$allNums[$b];
                            $allNums[$b]=$allNums[$a];
                            $allNums[$a]=$temp;
                        }
                    } 
                        
                }   
                }
                else
                {
                    echo"<h3>Sorry, you did not choose the order method</h3>";
                }

                if(isset($choose))
                {
                echo"<h3>The numbers are in order $choose</h3>";
                    echo"<table>";
                    for($i=0;$i<$numOfArrange;$i++)
                    {
                    echo"<tr><td>".$allNums[$i]."</tr></td>";   
                    }
                    echo"</table>"; 
                }
               
                ?>
            <br>
            <a href='sort2.php'><button type="button">Backe</button></a> 
            </center>
    </body>
</html>