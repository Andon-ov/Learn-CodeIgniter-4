<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        // returning layout view
        return view("Home/index");
    }
}


// <?php

// namespace App\Controllers;

// class Home extends BaseController
// {
//     public function index(): void
//     {

//         // returning two views
//         echo view("header");
//         echo view("Home/index.php");
//     }
// }
