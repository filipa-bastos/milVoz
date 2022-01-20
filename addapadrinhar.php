<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        //$conn = mysqli_connect("145.14.144.199", "id18267987_milvozadmin", "Q}OW+*GH~u6P^{qV", "id18267987_milvoz");
          

        
        // Conexão com banco de dados
        $servername = "10.10.0.120";
        $username = "a2019135496";
        $password = "Charuto123";
        $db_name = "a2019135496";

        $conn = mysqli_connect($servername, $username, $password, $db_name);

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $nomecompleto =  $_REQUEST['nomecompleto'];
        $nomecartaosocio = $_REQUEST['nomecartaosocio'];
        $morada =  $_REQUEST['morada'];
        $telefone = $_REQUEST['telefone'];
        $numerocc = $_REQUEST['numerocc'];
        $sexo =  $_REQUEST['sexo'];
        $datanascimento = $_REQUEST['datanascimento'];
        $codigopostal =  $_REQUEST['codigopostal'];
        $email = $_REQUEST['email'];
        $nif = $_REQUEST['nif'];
          
        // Performing insert query execution
        // here our table name is college
        //$sql = "INSERT INTO college  VALUES ('$first_name', 
        //    '$last_name','$gender','$address','$email')";
//  ('idapadrinhamento', 'nomecompleto', 'nomecartaosocio', 'morada', 'telefone', 'numerocc', 'sexo', 'datanascimento', 'codigopostal', 'email', 'nif') 
        $sqld = "INSERT INTO apadrinhar
                 VALUES (NULL, '$nomecompleto', '$nomecartaosocio', '$morada', '$telefone', '$numerocc', '$sexo', '$datanascimento', '$codigopostal', '$email', '$nif');";
          
        if(mysqli_query($conn, $sqld)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$nomecompleto\n $nomecartaosocio\n $morada\n $telefone \n $numerocc\n"
                . "$sexo\n $datanascimento\n $codigopostal\n $email\n $nif\n");
        } else{
            echo "ERROR: Hush! Sorry $sqld. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
</body>
  
</html>