<?php
/**
 * Created by PhpStorm.
 * User: Matheus
 * Date: 23/07/2018
 * Time: 18:05
 */

namespace App\Superclasses;


abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

}