<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {

	protected $view_data = array();

	public function main()
	{
		$this->view_data['date'] = date('M d, Y');
		$this->view_data['time'] = date('h:i A');

		$this->load->view('time_display', $this->view_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */