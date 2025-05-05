<?php
class User {
    private string $username;
    private string $role;

    public function __construct(string $username, string $role = 'customer') {
        $this->username = $username;
        $this->role = $role;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function isAdmin(): bool {
        return $this->role === 'admin';
    }

    public function isCustomer(): bool {
        return $this->role === 'customer';
    }
}