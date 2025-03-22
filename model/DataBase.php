<?php
    class DataBase {
        private $host = 'localhost';
        private $db = 'blog';
        private $username = 'username';
        private $password = 'password';    
        private $conn;

        public function __construct() {
            try {
                $this->conn = new PDO(
                    "mysql:host=$this->host;dbname=$this->db", 
                    $this->username, 
                    $this->password
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Erreur de connection a la db: ' . $e->getMessage();
            }

            return $this->conn;
        }

        public function __destruct() {
            $this->conn = null;
        }

        public function createUser($user) {
            try {
                $stmt = $this->conn->prepare(
                    'INSERT INTO user (username, password, email, date_created, date_updated, admin, picture) 
                    VALUES (:username, :password, :email, :date_created, :date_updated, :admin, :picture)'
                );
                $stmt->execute([
                    'username' => $user->username,
                    'password' => $user->password,
                    'email' => $user->email,
                    'date_created' => $user->date_created,
                    'date_updated' => $user->date_updated,
                    'admin' => $user->admin,
                    'picture' => $user->picture
                ]);
            } catch (PDOException $e) {
                echo 'Erreur de creation de l\'utilisateur: ' . $e->getMessage();
            }
        }

        public function getUser($username) {
            try {
                $stmt = $this->conn->prepare('SELECT * FROM user WHERE username = :username');
                $stmt->execute(['username' => $username]);
                $user = $stmt->fetch();
                return $user;
            } catch (PDOException $e) {
                echo 'Erreur de recuperation de l\'utilisateur: ' . $e->getMessage();
            }
        }
    }
?>