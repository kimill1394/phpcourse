<?php



# PDO = Represents a connection between PHP and database SoapServer

# constuctor ($dsn [, $username][, $password][, options])
    # dsn = data source name
      # 1. Create a PDO instance via driver invocation
      # $dsn = 'mysql:dbname=testdb;host=127.0.0.1';

      # 2. Create a PDO instance via URI invocation
      # $dsn = 'uri:file:///usr/local/dbconnect';

      # 3. Create a PDO instance using an alias (= set in php.ini)
      # [PDO] pdo.dsn.mydb="mysql:dbname=testdb;host=localhost"
      # $dsn = 'mydb';

 ?>
