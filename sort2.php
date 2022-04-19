<html>
    <title>Sort</title>
    <body>
        <center>
        <?php
        
        if(isset ($_POST['numOfArrange']))
        {
           
            echo"<form method='post' action='Sort2.php?Ops=Sort'  >";
            echo"<h1>Enter multinumers</h1>";
            $num=$_POST['numOfArrange'];
            echo "<input type='hidden' name='numOfArrange' id='numOfArrange' value=$num />";
            for($i=0;$i<$num;$i++)
            {
                $TextNo= $i+1;
                echo "<label for=num".$i.">number".$TextNo.": </label>";
                echo "<input type='number'  name=num".$i." id=num".$i." value= 0 />";
                echo "<br><br>";
            }
            echo"<br>";
            echo"<input type='radio' name='SortType' id='SortType' value='Asc'/>";
            echo"<label for='smallest'>Smallest</label>";
            
            echo"&emsp13; &emsp13;";
            echo"<input type='radio' name='SortType' id='SortType' value='Des'/>";
            echo"<label for='Biggest'>Biggest</label>";
            
            echo"<br><br>";

            echo"<button type='submit'>Veiw</button>";
            echo"</form>";

        }
        else
        {
            
            echo"<form method='post' action='sort2.php'>";
            echo"<h1>Enter the number of numbers you want to arrange</h1>";
            
            echo"<input type='number' name='numOfArrange' id='numOfArrange' required />";
            echo"<button type='submit'>Start</button>";
            echo"</form>";
        }

        if(isset($_REQUEST['Ops'])){

            if (!isset($_POST["SortType"])) {
                echo"<h3>Sorry, you did not choose the order method so Default will be from Small to Big</h3>";
                $SortType="Asc";
            
            }else{
            
                $SortType=$_POST["SortType"];
            }
           
            $numOfArrange= $_POST['numOfArrange'];

            for($i=0;$i<$numOfArrange;$i++)
            {  $allNums[$i]=$_POST['num'.$i];}

                if($SortType="Asc")
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
                elseif ($SortType="Des") 
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
        
        }
        ?>


        </center>
    </body>

</html>