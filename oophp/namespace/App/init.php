<?php

// Autoload function untuk mengimpor kelas secara otomatis berdasarkan namespace
spl_autoload_register(function($class) {
    // Pastikan bahwa $class adalah string
    if (is_string($class)) {
        // Pecah kelas menjadi bagian berdasarkan delimiter '\'
        $classParts = explode('\\', $class);
        // Ambil nama kelas terakhir
        $className = end($classParts);
        // Include file yang sesuai untuk Produk
        require_once __DIR__ . '/Produk/' . $className . '.php';
    }
});

// Autoload function untuk mengimpor kelas dari folder Service
spl_autoload_register(function($class) {
    // Pastikan bahwa $class adalah string
    if (is_string($class)) {
        // Pecah kelas menjadi bagian berdasarkan delimiter '\'
        $classParts = explode('\\', $class);
        // Ambil nama kelas terakhir
        $className = end($classParts);
        // Include file yang sesuai untuk Service
        require_once __DIR__ . '/Service/' . $className . '.php';
    }
});
