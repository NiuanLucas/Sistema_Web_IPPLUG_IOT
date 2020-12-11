<?php
/**
 * Created by PhpStorm.
 * User: Matheus
 * Date: 23/07/2018
 * Time: 21:23
 */

namespace App\Controller;


use App\Superclasses\Controller;

class CompraController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render("compra");
    }
}