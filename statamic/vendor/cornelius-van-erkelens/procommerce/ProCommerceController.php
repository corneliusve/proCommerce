<?php

namespace Statamic\Addons\ProCommerce;

use Statamic\Extend\Controller;

class ProCommerceController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return mixed
     */
    public function index()
    {
        return $this->view('index');
    }
}
