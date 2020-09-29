<?php
/**
 * Created at: 8:28 AM
 * File: AuthController.php
 */

class AuthController extends Database
{
    /**
     * Register a user
     * @param $data
     */
    public function register($data)
    {
        $data['password'] = md5($data['password']);

        $this->create(
            "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)",
            $data
        );

        header("Location: login.php");
    }

    /**
     * Login a user
     * @param $email
     * @param $password
     */
    public function login($email, $password)
    {
        $user = $this->query("SELECT * from users where email = '" . $email . "'");

        if (!$user) {
            echo "<h3 style='color: red; text-align: center;'>No user found with this email</h3>";
            return;
        }


        if ($user->password === md5($password)) {
            $_SESSION['user'] = $user->name;
            header("Location: index.php");
        } else {
            echo "<h3 style='color: red; text-align: center;'>Password did not matched</h3>";
        }

    }

    /**
     * Logout user
     */
    public function logout()
    {
        $_SESSION = [];
        session_destroy();
    }
}