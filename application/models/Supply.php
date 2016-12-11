<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Supply extends MY_Model {

    // Default Constructor
    public function __construct()
    {
            parent::__construct();
    }
    
    function rules() {
        $config = [
                ['field'=>'id', 'label'=>'Menu code', 'rules'=> 'required|integer'],
                ['field'=>'name', 'label'=>'Item name', 'rules'=> 'required'],
                ['field'=>'description', 'label'=>'Item description', 'rules'=> 'required|max_length[256]'],
                ['field'=>'price', 'label'=>'Item price', 'rules'=> 'required|decimal'],
                ['field'=> 'quantity', 'label'=> 'Item Quantity', 'rules'=> 'required|integer'],
                ['field'=> 'src', 'label'=> 'Imae Source', 'rules'=> 'required'],
                ['field'=> 'link', 'label'=> 'Product Link', 'rules'=> 'required']
        ];
        return $config;
    }
}
