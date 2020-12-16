<?PHP   
date_default_timezone_set('America/Sao Paulo');

$servidor = 'webpassosteste.mysql.dbaas.com.br';
$usuario = 'webpassosteste';
$senha = 'Nyacademyntc1@';
$banco = 'webpassosteste';


try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e){
    echo "Erro ao conectar com o banco de dados!" . $e;
}


?>