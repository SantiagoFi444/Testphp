<?php
    namespace App;
    class Database{
        private $conn;
        protected static $settings = array(
                'driver' => 'mysql',
                'host' => 'localhost',
                'username' => 'campus',
                'database' => 'campusland',
                'password' => 'campus2023',
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'flags' => [
                    // Turn off persistent connections
                    \PDO::ATTR_PERSISTENT => false,
                    // Enable exceptions
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    // Emulate prepared statements
                    \PDO::ATTR_EMULATE_PREPARES => true,
                    // Set default fetch mode to array
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    // Set character set
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
                ],
                'pgsql' => Array(
                'driver' => 'pgsql',
                'host' => 'localhost',
                'username' => 'madocoxxi',
                'database' => 'madoco',
                'password' => 'madoco21',
                'flags' => [
                    // Turn off persistent connections
                    \PDO::ATTR_PERSISTENT => false,
                    // Enable exceptions
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    // Set default fetch mode to array
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    // Set character set
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
                ]
            )
        );
    
    public function _construct($args = []){
        $this->conn = $args['conn'] ?? null;
    }
    public function getConnection($dbKey) {
        $dbConfig = self::$settings[$dbKey];
        $this->conn = null;
        $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']}:dbname={$dbConfig['databases']}";
        try{
            $this->conn = new \PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['flags']);
            echo 'okkkkk';
        } catch(\PDOException $exception){
            $error = [[
                'error' => $exception->getMessage(),
                'message' => 'Error al momento de establecer conexion'
                ]];
                return $error;
        }
        return $this->conn;
    }
}
?>