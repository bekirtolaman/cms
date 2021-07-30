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

    public function new_form()
    {
         $viewData = new stdClass();

         
         /** View'e gönderilecek değişkenler. */
         $viewData->viewFolder = $this->viewFolder;
         $viewData->subviewFolder = "add";

         $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function save()
    {
        
        $this->load->library("form_validation");

        //Kurallar

         $this->form_validation->set_rules("title","Başlık","required|trim");
         $this->form_validation->set_rules("description","Açıklama","required|trim");

            //Hata mesaj açıklamaları
         $this->form_validation->set_message(
            array(
                "required" => "{field} alanı boş bırakılamaz."
            )

            );

        //Form Validation çalıştırılır

        $validate = $this->form_validation->run();

        //True - False döndürür

        if ($validate) {

           echo "Başarılı";
        }else{
            
            $viewData = new stdClass();

         
         /** View'e gönderilecek değişkenler. */
         $viewData->viewFolder = $this->viewFolder;
         $viewData->subviewFolder = "add";
         $viewData->form_error = true;

         $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
        }
    }
}