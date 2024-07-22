<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;

class TestDB extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();

        try {
            // Изпълняване на проста заявка
            $query = $db->query('SELECT 1');
            $result = $query->getResult();

            if ($result) {
                echo 'Успешна връзка с базата данни!';
            } else {
                echo 'Неуспешна връзка с базата данни!';
            }
        } catch (DatabaseException $e) {
            echo 'Грешка при връзка с базата данни: ' . $e->getMessage();
        } catch (\Exception $e) {
            echo 'Грешка: ' . $e->getMessage();
        }
    }
}
