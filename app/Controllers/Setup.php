<?php

namespace App\Controllers;

use Exception;

class Setup extends BaseController
{
    public function index()
    {
        $migration = service('migrations');

        try {
            $migration->latest();
            echo "Migration setup successful";
        } catch (Exception $e) {
            echo "Error in creating database : " . $e->getMessage();
        }
    }

    public function dropTable()
    {
        $migration = service('migrations');

        try {
            $migration->regress(0);
            echo "Migration drop successful";
        } catch (Exception $e) {
            echo "Error in dropping database : " . $e->getMessage();
        }
    }
}
