<?php 
  
 namespace CadastroVeiculos\Controller; 
  
 use CadastroVeiculos\Controller\Controller; 
  
 class BackupController extends Controller 
 { 
     public static function Backup() 
     { 
         $command = '"C:/Program Files/MySQL/MySQL Server 8.0/bin/mysqldump" -uroot -petecjau -P3307 -hlocalhost db_cadastroveiculo > C:/backup/file.sql'; 
         exec($command, $output, $exit_code); 
  
         if ($exit_code === 0) { 
             echo "<script>alert('Backup realizado com sucesso.');</script>"; 
         } else { 
             echo "<script>alert('Ocorreu um erro ao realizar o backup.');</script>"; 
         } 
        } 

    public static function restoreBackup() 
    { 
        $command = '"C:/Program Files/MySQL/MySQL Server 8.0/bin/mysql" -uroot -petecjau -P3307 -hlocalhost db_cadastroveiculo < C:/backup/file.sql'; 
        exec($command, $output, $exit_code); 

        if ($exit_code === 0) { 
            echo "<script>alert('Restore realizado com sucesso.');</script>"; 
        } else { 
            echo "<script>alert('Ocorreu um erro ao realizar o restore.');</script>"; 
            } 
    } 
    /*
    public static function restoreBackup($backupFilePath = 'D:/backup/file.sql', $host = 'localhost', $username = 'root', $password = 'etecjau', $database = 'db_cadastroveiculo', $port = 3307) 
    { 
        $command = "mysql -h{$host} -P{$port} -u{$username} -p{$password} {$database} < {$backupFilePath}"; 
        exec($command, $output, $exitCode); 
        if ($exitCode === 0) { 
            echo "<script>alert('Restauração do backup concluída com sucesso.');</script>"; 
        } else 
            echo "<script>alert('Ocorreu um erro ao restaurar o backup.');</script>";
   }*/
}
