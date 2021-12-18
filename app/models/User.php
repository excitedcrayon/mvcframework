<?php 
    /**
     * User.php model class gets user data from the database
     */
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();

            return $result;
        }
    }
?>