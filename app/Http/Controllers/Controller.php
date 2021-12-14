<?php

namespace App\Http\Controllers;

use Radiate\Routing\Controller as CoreController;

class Controller extends CoreController
{
    /**
     * @return string
     */
    public function renderHomePage(): string
    {
        return 'yeet from render home page';
    }
}