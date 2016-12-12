<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/third_party/restful/libraries/Rest_controller.php';

class Receiving extends Rest_Controller
{

    /**
    * Recieving Page
    * Uses RESTful actions to get, post, put, or delete values
    * from the database associtaed with it.
    * Creates Logs with certain actions.
    *
    */
    function __construct()
    {
            parent::__construct();
            $this->load->model('supply');
    }
    
    public function index_get()
    {
        $key = $this->get('id');
        if (!$key)
        {
            $this->response($this->supply->all(), 200);
        } else
        {
            $result = $this->supply->get($key);
            if ($result != null)
                $this->response($result, 200);
            else
                $this->response(array('error' => 'Supplies item not found!'), 404);
        }
    }
    
        // Handle an incoming GET - CRUD
    function item_get()
    {
        $key = $this->get('id');
        if (!$key)
        {
            $this->response($this->supply->all(), 200);
        } else
        {
            $result = $this->supply->get($key);
            if ($result != null)
                $this->response($result, 200);
            else
                $this->response(array('error' => 'Menu item not found!'), 404);
        }
    }
    
    // Handle an incoming PUT - update a menu item
    function item_put()
    {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $this->_put_args);
        
        $dbRecord = $this->supply->get($key);
        
        $dbArray = json_decode(json_encode($dbRecord), True);
        
        $record['quantity'] += $dbArray['quantity'];
        
        $this->supply->update($record);
        $this->response(array('ok'), 200);
    }

    // Handle an incoming POST - add a new menu item
    function item_post()
    {      
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $_POST);
        $this->supply->add($record);
        $this->response(array('ok'), 200);
    }

    // Handle an incoming DELETE - delete a menu item
    function item_delete()
    {
        $key = $this->get('id');
        $this->supply->delete($key);
        $this->response(array('ok'), 200);
    }
   
}
