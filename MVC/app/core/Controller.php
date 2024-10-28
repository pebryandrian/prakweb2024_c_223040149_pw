<?php

class Controller {
    public function view($view, $data = []) {
        // Menggunakan __DIR__ untuk mendapatkan jalur absolut
        require_once __DIR__ . '/../views/' . $view . '.php';
    }

    public function model($model) {
        // Menggunakan __DIR__ untuk jalur absolut
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model();
    }
}
