<?php

namespace App\Controllers;

use App\Models\PersonenModell;

class Login extends BaseController
{
    public function login()
    {
        $model = new PersonenModell();

        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $model->where('Email', $email)->first();

            if ($user && $user['Passwort'] == $password) {
                if ($user['Rolle'] == 'Dozent') {
                    $welcomeMessage = "Willkommen, Herr Prof. Dr. Andreas Becker " . "!";
                    return redirect()->to('Dozent')->with('success', $welcomeMessage);
                } elseif ($user['Rolle'] == 'Student') {
                    $welcomeMessage = "Willkommen, Emily Chen" . "!";
                    return redirect()->to('Student')->with('success', $welcomeMessage);
                } else {

                    return redirect()->to('/');
                }
            } else {
                return redirect()->back()->with('error', 'Anmeldung fehlgeschlagen. Bitte überprüfen Sie Ihre Anmeldeinformationen.');
            }
        }

        return view('login');
    }
}

