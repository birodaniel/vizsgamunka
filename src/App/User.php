<?php

namespace App;

class User extends Model
{
    public function index(): View
    {
        return View::make('index', ['title' => 'Home Page']);
    }

    public function register(): View
    {
        return View::make('register', ['title' => 'Regisztráció']);
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
            return View::make('regsuccess', ['title' => 'Sikeres regisztráció!']);
        }
        return 'Minden mező kitötése kötelező!';
    }

    public function signUpToCompetition(string $competitionId)
    {

    }

    public function registerResult(string $matchId)
    {

    }

}