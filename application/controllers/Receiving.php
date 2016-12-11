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
            $this->load->model('supplies');
    }
    
    public function index_get()
    {
        $key = $this->get('id');
        if (!$key)
        {
            $this->response($this->supplies->all(), 200);
        } else
        {
            $result = $this->supplies->get($key);
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
            $this->response($this->supplies->all(), 200);
        } else
        {
            $result = $this->supplies->get($key);
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
        $this->supplies->update($record);
        $this->response(array('ok'), 200);
    }

    // Handle an incoming POST - add a new menu item
    function item_post()
    {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $_POST);
        $this->supplies->add($record);
        $this->response(array('ok'), 200);
    }

    // Handle an incoming DELETE - delete a menu item
    function item_delete()
    {
        $key = $this->get('id');
        $this->supplies->delete($key);
        $this->response(array('ok'), 200);
    }
    
    /*
	public function index()
	{
		$this->data['pagebody'] = 'receiving';
        //
		$services = $this->services->get_all();
        $supplies = $this->supplies->get_all();

        //go through supplies
		foreach ($supplies as $supply)
		{
			//add supply info
			$standalone[] = array('supply' => $supply['name']);
		}

		//go through services
		foreach ($services as $service)
		{
			//add service info
			$bundle[] = array('service' => $service['name']);
		}
		//add both supplies and services
		$this->data['receiving'] = array(array('supplies' => $standalone, 'services' => $bundle));
		$this->render();
	}

	//receive service
	public function receive()
	{
		//results returned from POST
		$results = $this->input->post();

		//go through results and add the quanity specified to the stocks
		foreach ($results as $service)
		{
			$this->stocks->set_quantity($service['name'], "add", $service['quantity']);
		}

		//return message upon successful stocking
	}
     * 
     */
}
