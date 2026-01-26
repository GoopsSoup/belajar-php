<?php
    class User {
        private string $username;
        private $passwordHash;
        private bool $isLoggedIn;

        public function __construct($username, $rawPassword) {
            $this->passwordHash = password_hash($rawPassword, PASSWORD_DEFAULT);
            $this->username = $username;    
            $this->isLoggedIn = false;
        }

        public function login(string $rawPassword):bool {
            if (password_verify($rawPassword, $this->passwordHash)) {
                $this->isLoggedIn = true;
                return true;
            }
            
            return false;
        }

        public function logout(): void {
            $this->isLoggedIn = false;
        }

        public function isLoggedIn(): bool {
            return $this->isLoggedIn;
        }

        public function changePassword(string $currentPassword, string $newPassword):bool {
            if (!password_verify($currentPassword, $this->passwordHash)) {
                return false;
            }
            $this->passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
        }

    }
?>