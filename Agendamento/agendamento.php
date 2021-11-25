<?php
   include_once("header.php");
   include_once("navbar.php");
   include_once("configDB.php");
?>
<html>
<head>

</head>
<body><br>
<div align="center">
            <fieldset>
            <legend>Agendamentos</legend>
<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
             
               
               // select database
               $mysqli = mysqli_connect($hostname,$user,$pass) or die(mysqli_error($mysqli)); 
               mysqli_select_db($mysqli,$database) or die(mysqli_error($mysqli)); 

                    $query = ("SELECT * FROM addtable");
                    $result = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Modalidade</th>
                                <th>Módulo</th>
                                <th>Matéria</th>
                                <th>Dia</th>
                                <th>Hora de Início</th>
                                <th>Hora de Término</th>
                                <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['faculty'] . "</td>";
                        echo "<td>" . $row['course'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
                        echo "<td>" . $row['room'] . "</td>";
                        echo "<td>" . $row['start_time'] . "</td>";
                        echo "<td>" . $row['end_time'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='agendamento.php'>
                        <input name='id' type='hidden' value='".$row['id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Cancelar'>
                        </form></td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        echo '<script type="text/javascript">
                
                         location="agendamento.php";
                           </script>';
    }
    if(isset($_POST['id']))
    {
    $id = mysqli_real_escape_string($mysqli,$_POST['id']);
    $sql = mysqli_query($mysqli,"DELETE FROM addtable WHERE id='$id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error($mysqli));
    }
    
    }
    ?>
</fieldset>
</form>
</div>
</div>
</div>

<div align="center">
<br>
<a href="selectorAluno.php"><input type='submit' class='btn btn-success' name='delete' value='Adicionar Novo'></a>
<a href="index.php"><input type='submit' class='btn btn-primary' name='delete' value='Sair'></a>
</div>
</div>
    </body>
    </html>
    
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
