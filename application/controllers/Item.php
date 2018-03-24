<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function add(){
        $this->load->view('item/start');
        $this->load->view('item/nav');
        $this->load->view('item/add');
        $this->load->view('item/end');
        
    }
    public function view(){
        $id = $this->uri->segment(3);
        $items = $this->ItemModel->getItem($id);
        $item = $items[0];
        //$this->diedump($item);
        $this->load->view('item/start');
        $this->load->view('item/nav');
        $this->load->view('item/show',compact('item'));
        $this->load->view('item/end');
        
    }

    public function store(){
        $item = $this->input->post();
        $this->form_validation->set_rules('name', 'Name', 'required|is_unique[tblitem.name]');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');
        if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('item/start');
                    $this->load->view('item/nav');
                    $this->load->view('item/add');
                    $this->load->view('item/end');
                }
                else
                {
                    $this->ItemModel->insert($item);
                    redirect('item/index');
                }
    }

    public function delete(){
        $id = $this->uri->segment(3);
        $this->ItemModel->delete($id);
        redirect('item/index');
    }

    public function index(){
        //echo 'Welcome to CI';
        $message = "ABC Item Management";
        //$items = ["apple", "orange", "mango", "banana"];

        //load the model
        $this->load->model('ItemModel');
        $items = $this->ItemModel->getItems();
        //$this->diedump($items);

        $this->load->view('item/start');
        $this->load->view('item/nav');
        $this->load->view('item/index', compact('message', 'items'));
        $this->load->view('item/end');
        
    }

    public function diedump($data){
        echo '<pre>';
        var_dump($data); //print_r($data)
        echo '</pre>';
        die();
    }
}
