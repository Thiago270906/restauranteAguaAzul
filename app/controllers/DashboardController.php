<?php

class DashboardController
{
    public function index()
    {
        AuthHelper::requireAdmin();

        require __DIR__ . '/../views/admin/dashboard/index.php';
    }
}

?>