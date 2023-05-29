<?php 
  
 namespace CadastroVeiculos\Controller; 
  
 use CadastroVeiculos\Controller\Controller; 
  
 class BackupController extends Controller 
 { 
    public static function index()
    {
        parent::isAuthenticated();
        parent::render("Pagina_Inicial/home");

    }

    public static function Backup() 
     { 
         $command = '"C:/Program Files/MySQL/MySQL Server 8.0/bin/mysqldump" -uroot -petecjau -P3307 -hlocalhost db_cadastroveiculo > D:/file.sql'; 
         exec($command, $output, $exit_code); 
  
         if ($exit_code === 0) { 
             $message = 'Backup realizado com sucesso.'; 

             
         } else { 
             $message = 'Ocorreu um erro ao fazer o backup.';
         } 
         header('Location: /home?message=' . urlencode($message));
        } 

    public static function restoreBackup() 
    { 
        $command = '"C:/Program Files/MySQL/MySQL Server 8.0/bin/mysql" -uroot -petecjau -P3307 -hlocalhost db_cadastroveiculo < D:/file.sql'; 
        exec($command, $output, $exit_code); 

        if ($exit_code === 0) { 
            $message = 'Backup realizado com sucesso.'; 
            
        } else { 
            $message = 'Ocorreu um erro ao fazer o backup.';

        }

        header('Location: /home?message=' . urlencode($message));

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
