<html>
    <title>Sort</title>
    <body>
        <center>
        <?php
        
        if(isset ($_POST['numOfArrange']))
        {
           
            echo"<form method='post' action='veiwSortBorS.php'  >";
            echo"<h1>Enter multinumers</h1>";
            $num=$_POST['numOfArrange'];
            for($i=0;$i<$num;$i++)
            {
                echo"<label for="."num".$i.">number".$i+1," : "."<label/>";
                echo"&emsp13;";
                echo"<input type='number'  name="."num".$i." id="."num".$i." />";
                echo"<input type='hidden' name='numOfArrange' id='numOfArrange' value=$num />";
                echo"<br><br>";
            }
            echo"<br>";
            echo"<input type='radio' name='smallest' id='smallest' value='small'/>";
            echo"<label for='smallest'>Smallest</label>";
            
            echo"&emsp13; &emsp13;";
            echo"<input type='radio' name='Biggest' id='Biggest' value='big'/>";
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
        ?>
        </center>
    </body>

</html>