<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    interface NotifierInterface {
        public function send(string $message):void;
    }

    class Id {
        private string $value;

        public function __construct(string $value) {
            $this->value = $value;
        }

        public function show():void {
            echo "Your Id is: {$this->value}";
        }
    }

    class Notifier implements NotifierInterface {
        public function send(string $message):void {
            echo "New notification: $message";
        }
    }

    class User {
        private NotifierInterface $notifier;
        private Id $info;
        private string $username;
        private string $passwordHash;
        private bool $isLoggedIn;

        public function __construct(Id $info, NotifierInterface $notifier, $username, $rawPassword) {
            $this->passwordHash = password_hash($rawPassword, PASSWORD_DEFAULT);
            $this->username = $username;
            $this->info = $info; 
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
            $this->notifier->send("Welcome back!\n");
        }

        public function userID(): void {
            $this->info->show();
        }

    }

    $id = new Id("22234440987232");
    $notifier = new Notifier();
    $user = new User($id ,$notifier, "Andhika", "password");
    $user->welcome();
    $user->userID();
?>

