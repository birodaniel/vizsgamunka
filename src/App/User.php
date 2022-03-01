<?php

namespace App;

use PDO;

class User extends Model
{
    public function index(): View
    {
        return View::make('index', '', ['title' => 'Versenysorozatok adminisztrációs felülete']);
    }

    public function register(): View
    {
        return View::make('register', 'register/', ['title' => 'Versenysorozatok adminisztrációs felülete']);
    }

    public function login(): View
    {
        return View::make('login', 'login/', ['title' => 'Versenysorozatok adminisztrációs felülete']);
    }

    public function tournament(): View
    {
        return View::make('tournament', 'tournament/', ['title' => 'Versenysorozatok adminisztrációs felülete']);
    }


    public function create(): View|string
    {
        $name = filter_input(INPUT_POST, 'name');
        $userName = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email');
        $password1 = filter_input(INPUT_POST, 'password1');
        $password2 = filter_input(INPUT_POST, 'password2');
        $termsAccepted = filter_input(INPUT_POST, 'termsAccepted');

        if ($password1 !== $password2) {
            return 'A jelszavaknak egyezniük kell!';
        }
        if ($termsAccepted !== 'on') {
            return 'Az adatvédelmi nyilatkozat elfogadása kötelező!';
        }
        if (isset($name) && isset($userName) && isset($email) && isset($password1) && isset($password2)) {
            $password = password_hash($password1, PASSWORD_BCRYPT );
            $stmt = $this->db->prepare(
                'INSERT INTO pusers (email, name, user_name, password, time_created)
                        VALUES(?, ?, ?, ?, NOW())'
            );

            $stmt->execute([$email, $name, $userName, $password]);
            return View::make('registration-success', 'register/', ['title' => 'Sikeres regisztráció!']);
        }
        return 'Minden mező kitötése kötelező!';
    }

    public function profile(): View|string
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        if (empty($email) || empty($password))
        {
            return 'Minden mező kitöltése kötelező!';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return 'Hibás e-mail cím formátum!';
        }

        $query = "SELECT * FROM pusers WHERE email = '$email'";
        $stmt = $this->db->query($query);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (empty($data)) {
            return 'Hibás e-mail cím vagy jelszó! Kérjük próbálja újra!';
        }

        $user_password = $data['password'];

        if ($data['is_active'] === 1)
        {
            if (password_verify($password, $user_password))
            {
                $_SESSION['user_id'] = $data['user_id'];
                $_SESSION['user_name'] = $data['user_name'];
                $_SESSION['isAdmin'] = $data['is_admin'];
                return View::make('profile', 'login/', ['title' => 'Felhasználói fiók']);
            }
        }
        return 'Hibás e-mail cím vagy jelszó! Kérjük próbálja újra!';
    }

    public function signUpToCompetition(string $competitionId)
    {

    }

    public function registerResult(string $matchId)
    {

    }

}