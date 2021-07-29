<?php

class Product extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder ="product_v";
        
        $this->load->model("product_model");

    }

    public function index()
    {
        $viewData = new stdClass();

        /** Tablodan verilerin alınması. */
        $items = $this->product_model->get_all();

        /** View'e gönderilecek değişkenler. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "list";
        $viewData->items = $items;


        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }
}