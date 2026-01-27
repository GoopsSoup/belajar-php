<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    class Notifier {
        public function send(string $message):void {
            echo "New notification: $message";
        }
    }

    class User {
        private Notifier $notifier;
        private string $username;
        private string $passwordHash;
        private bool $isLoggedIn;

        public function __construct(Notifier $notifier, $username, $rawPassword) {
            $this->passwordHash = password_hash($rawPassword, PASSWORD_DEFAULT);
            $this->username = $username; 
            $this->notifier = $notifier;   
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
            return true;
        }

        public function welcome(): void {
            $this->notifier->send("Welcome back!");
        }

    }

    $notifier = new Notifier();
    $user = new User($notifier, "Andhika", "secret");
    $user->welcome();
?>

