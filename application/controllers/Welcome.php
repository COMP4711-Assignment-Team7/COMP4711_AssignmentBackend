<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	public function index()
	{
            $this->data['title'] = 'Backend Stuff';
            $this->data['pagetitle'] = 'Leave, Foul Beast!';
            $this->data['content'] = 'Hey you, Hacker. Get off my virtual lawn!';
            $this->render();
	}

}
