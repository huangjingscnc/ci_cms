<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page extends Controller {

	var $page = "home";	

	
	function Welcome()
	{
			parent::Controller();

	}

	function index($page = null, $year=null, $month = null)
	{
	
		$this->load->model('Pagemodel');


		if($page == 'home' || $page ==''){
		$id_query = $this->Pagemodel->get_mpage_ID();
		foreach ($id_query as $row):
			$page = $row->pretty_name;
			//$this->index($page);
		endforeach;
	}
		
		$data['query2'] = $this->Pagemodel->get_page($page);
		$q2 = $data['query2'];
		foreach($q2 as $row):
		$page_ID = "$row->ID";
		endforeach;
		
		$data['address'] = $this->Pagemodel->get_address();
		$data['query'] = $this->Pagemodel->get_all();
		$data['query2'] = $this->Pagemodel->get_page($page);
		$data['query3'] = $this->Pagemodel->get_all_galleries($page_ID);
		$data['head'] = 'includes/head';
		$data['header'] = 'includes/header';
		$data['main_content'] = 'welcome_message';

		if($page_ID == '7'){
			redirect('Shop');
		}
		if($page_ID == '26'){
			redirect('page/availability', $year, $month);
		}
		if($page_ID == '6'){
			redirect('page/send_a_postcard');

		}
		if($page_ID == '24'){
			redirect('page/contact_us');

		}
		if($page_ID == '1'){
		$data['footer'] = 'includes/home_footer';
		}
		if($page_ID !== '1'){
		$data['footer'] = 'includes/footer_non_home';
		}

		//echo $page_ID;
		//$data['footer'] = 'includes/footer';

		//$data['query3'] = $this->Pagemodel->get_all_galleries($page);
		$this->load->view('includes/template', $data);
	}
	
	function section($page)
	{
	
		$data['main_content'] = 'welcome_message';
	
		$this->load->model('Pagemodel');
		$data['query'] = $this->Pagemodel->get_all();

		$data['query2'] = $this->Pagemodel->get_subpagepage($page);
	
		$this->load->view('includes/template', $data);
			
	}
	function availability($year = null, $month=null){
	
		if(!$year){
		$year = date('Y');
		}
		if(!$month){
		$year = date('m');
		}
		$this->load->model('Pagemodel'); 
		$data['page_title'] = 'Calendar';
		$data['main_content'] = 'availability';
		$data['address'] = $this->Pagemodel->get_address();
		$data['head'] = 'includes/head';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer_non_home';
		$data['query2'] = $this->Pagemodel->get_page('calendar');
		$q2 = $data['query2'];
		foreach($q2 as $row):
		$page_ID = "$row->ID";
		endforeach;
		
		$data['query3'] = $this->Pagemodel->get_all_galleries($page_ID);
		$data['query'] = $this->Pagemodel->get_all();
		$data['calendar'] = $this->Pagemodel->cal_generate($year, $month);
		//$this->load->view('availability', $data);

		$this->load->view('includes/template', $data);
	}


	function shop($page='shop'){
		$this->load->model('Pagemodel');
		$data['head'] = 'includes/head';
		$data['header'] = 'includes/header';
		$data['address'] = $this->Pagemodel->get_address();
		$data['main_content'] = 'shop';
		$data['footer'] = 'includes/footer_shop';
		
		$data['query2'] = $this->Pagemodel->get_page($page);
		$data['page_title'] = 'Shop';
		$q2 = $data['query2'];
		foreach($q2 as $row):
		$page_ID = "$row->ID";
		endforeach;
		$data['query'] = $this->Pagemodel->get_all();

		$data['shop'] = $this->Pagemodel->shop();
				
		$this->load->view('includes/template', $data);
	}
	
	function add_to_basket(){
		$data = array(
               'id'      => $this->input->post('product_ID'),
               'qty'     => $this->input->post('qty'),
               'price'   => $this->input->post('product_price'),
               'name'    => $this->input->post('product_name'),
               'options' => array('colour' => $this->input->post('product_colour'),'size' => $this->input->post('product_size'))
            );
		$this->cart->insert($data);
		
		$cart = $this->cart->contents();
		redirect('Shop');		
	}
	
	function basket($page='shop'){
		$this->load->model('Pagemodel');
		$data['query2'] = $this->Pagemodel->get_page($page);
		$data['address'] = $this->Pagemodel->get_address();
		$cart = $this->cart->contents();
		$data['head'] = 'includes/head';
		$data['header'] = 'includes/header';
		$data['query2'] = $this->Pagemodel->get_page($page);

		$data['main_content'] = 'cart';
		$data['footer'] = 'includes/footer_shop';
		$data['query'] = $this->Pagemodel->get_all();
		$data['shop_query'] = $this->Pagemodel->shop();
		$data['page_title'] = 'Shop';

		$this->load->view('includes/template', $data);
	}
	function checkout($page='shop'){
		$this->load->model('Pagemodel');
		$data['query2'] = $this->Pagemodel->get_page($page);
		$data['orders'] = $this->cart->contents();
				$data['address'] = $this->Pagemodel->get_address();

		$data['head'] = 'includes/head';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer_shop';
		$this->load->model('Pagemodel');
		$data['query'] = $this->Pagemodel->get_all();
		$data['query2'] = $this->Pagemodel->get_page($page);
		$data['shop_query'] = $this->Pagemodel->shop();
		$data['main_content'] ='process_order.php';
		$data['page_title'] = 'Shop';

		$this->load->view('includes/template', $data);
	}
	
	function process_order(){
	$this->form_validation->set_rules('orderer_name', 'Your name', 'required|xss_clean'); 
	$this->form_validation->set_rules('orderer_phone', 'Your contact phone number', 'required|xss_clean|numeric');
	$this->form_validation->set_rules('building', 'Your building number or name', 'required|xss_clean');
	$this->form_validation->set_rules('street', 'Your street', 'required|xss_clean');
	$this->form_validation->set_rules('town', 'Your town', 'required|xss_clean');
	$this->form_validation->set_rules('city', 'Your city', 'required|xss_clean');
	
	$this->form_validation->set_message('required', 'This field is required.');
	$this->form_validation->set_message('numeric', 'Please insert digits only for the telephone number.');
	$this->form_validation->set_error_delimiters('<span class="error">','</span>');
		if ($this->form_validation->run() == FALSE)
		{
		$data['orders'] = $this->cart->contents();
		$data['head'] = 'gallery_head';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer_shop';
	
		$this->load->model('Pagemodel');
		$data['query'] = $this->Pagemodel->get_all();

		$data['query2'] = $this->Pagemodel->shop();
		
		
		

		$data['main_content'] ='process_order.php';
		$this->load->view('includes/template', $data);

		}
		else
		{
		$order = $this->input->post('shoporder');	
		$data = array(
			    'orderer_name' 	=> $this->input->post('orderer_name'),
			    'orderer_phone' => $this->input->post('orderer_phone'),
			    'building' 		=> $this->input->post('building'),
			    'street' 		=> $this->input->post('street'),
			    'town' 			=> $this->input->post('town'),
			    'city' 			=> $this->input->post('city'),
			    'postcode' 		=> $this->input->post('postcode'),
			    'order' 		=> $this->input->post('shoporder'),
			    'processed' 	=> '',
			    'date'			=> date("Y/m/d"),
			    'order_total'	=> $this->input->post('order_total')
		);
			
		$this->load->model('pagemodel');
		$this->pagemodel->process_order($data);
		$this->cart->destroy();
		//redirect('pagemodel/index');
		$data['head'] = 'gallery_head';
		$data['header'] = 'includes/header';

		$data['footer'] = 'includes/footer_shop';
	
		$this->load->model('Pagemodel');
		$data['query'] = $this->Pagemodel->get_all();

		$data['query2'] = $this->Pagemodel->shop();
		
		/* -------------- */
		$to = "andy@andyprice.me.uk";
		$subject = "new shop order";
		$message = "You have a new order waiting for you at your website. Please click here to view this and other current orders";
		$sender_name = "order_notifications";
		mail($to, $subject, $message, 'From: ' . $sender_name . "@space-dog.co.uk\r\n");



		$data['main_content'] ='thankyou.php';
		$this->load->view('includes/template', $data);
		
		

		}
	
		}
	function empty_basket(){
	$this->cart->destroy();
	redirect('Shop');
	}
	
	function update_order(){

if($_POST){
			$data = $_POST;
		}

		$this->cart->update($data);

		redirect('Shop/basket');
	}
	
	
	
	
	
function galleries($gallery_ID){
		$data['head'] = 'gallery_head';
		$data['header'] = 'includes/header';
		$data['main_content'] = 'gallery';
		$data['footer'] = 'includes/gallery_footer';
		$page = 'home';
		$this->load->model('Pagemodel');
		$data['page_title'] = 'Gallery';

		$data['query'] = $this->Pagemodel->get_all();
		$data['query2'] = $this->Pagemodel->get_gallery($gallery_ID);
		$data['page_title'] = 'Gallery';

		
		$this->load->view('includes/template', $data);
	}

	
	function get_orders(){
	
	$query = "SELECT * FROM shop_orders WHERE processed != 'TRUE'";
	$result = mysql_query($query) or die("Query failed");
	$num_rows = mysql_num_rows($result);
	
	//echo $num_rows;
	$response = array('unread' =>$num_rows);
	
	echo json_encode($response);
	//echo $response;

	}
	
	function send_a_postcard($page='send-a-postcard'){
		$this->load->model('Pagemodel');

		if($postcard_ID = $this->input->post('postcard_ID')){
			
		// First, delete old captchas
		$expiration = time()-7200; // Two hour limit
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);		
	
		// Then see if a captcha exists:
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();
	
		if ($row->count == 0)
		{
			echo "You must submit the word that appears in the image";
			$data['main_content'] = 'send-a-postcard';
		}else{
		
			$to 				= $this->input->post('to');
			$sender_name 		= $this->input->post('sender_name');
			$postcard_message 	= $this->input->post('postcard_message');
			$postcard_ID 		= $this->input->post('postcard_ID');
			$address 			=  $this->input->post('address');
			$subject 			= "A postcard from OOLS";
			
			$this->load->model('pagemodel');
			$data = array(
								'postcard_ID' =>$postcard_ID,
								'sender_name' =>$sender_name,
								'address' =>$address,
								'sender_name' =>$sender_name,
								'date'	=> date('Y-m-d')
							);
			$data['card_ID'] = $this->pagemodel->insert_card($data);


			$data['postcard_ID'] 		= $this->input->post('postcard_ID');
			$data['postcard_image'] 	= $this->input->post('postcard_image');
			$data['postcard_message'] 	= $this->input->post('postcard_message');
			$data['sender_name'] 		= $this->input->post('sender_name');
			$data['address'] 			= $this->Pagemodel->get_address();
			

			$message = $this->load->view('postcard.php',$data,true);
	
			mail($to, $subject, $message,"MIME-Version: 1.0\n" . 'From: ' . $sender_name . "@ools.co.uk\r\n" ."Content-type: text/html; charset=iso-8859-1");

			$data['main_content'] = 'postcard_sent';
		}
		
		
	
		}else{
				$data['main_content'] = 'send-a-postcard';

		}
		
		
		$data['address'] = $this->Pagemodel->get_address();
		$data['query'] = $this->Pagemodel->get_all();
		$data['get_postcards'] = $this->Pagemodel->get_postcards();
		$data['query2'] = $this->Pagemodel->get_page($page);
		$q2 = $data['query2'];
		foreach($q2 as $row):
		$page_ID = "$row->ID";
		endforeach;
		
		$data['query3'] = $this->Pagemodel->get_all_galleries($page_ID);
		$q2 = $data['query2'];
		foreach($q2 as $row):
		$page_ID = "$row->ID";
		endforeach;
		
		$data['head'] = 'includes/head';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer_non_home';

		$this->load->view('includes/template', $data);
		
		
	}
	function view_card($m_ID = null)
	{
		if(!$m_ID){
		echo "whoops!";
		}
		$this->load->model('pagemodel');
		$data['view_card'] = $this->pagemodel->view_card($m_ID);
		foreach ($data['view_card'] as $row):
		//print_r($row);
			$data['postcard_ID'] 		= $row->postcard_ID;
			$data['postcard_image'] 	= $row->postcard_image;
			$data['postcard_message'] 	= $row->postcard_message;
			endforeach;
			
			$data['get_greeting'] = $this->pagemodel->get_greeting($m_ID);
			foreach ($data['get_greeting'] as $row):
			$data['sender_name'] 		= $row->sender_name;
			endforeach;
			$data['card_ID']			= $m_ID;
			$data['address'] 			= $this->pagemodel->get_address();
			
	


			$message = $this->load->view('postcard.php',$data);
			
			$expiration = time()-7200; // Two hour limit
			$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);	

	}


	function contact_us($page='contact-us')
	{
						$query = $this->db->select('email');
						$query = $this->db->get_where('contact_details', array('cd_ID' =>'1'));
						$data['address']= $query->result();
						foreach ($data['address'] as $row):
							$email_addr = $row->email;
						endforeach;
						
						
						
		if($this->input->post('sent')){	
			$this->load->model('pagemodel');

				$this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean'); 
				$this->form_validation->set_rules('name', 'name', 'required|xss_clean'); 
				$this->form_validation->set_rules('subject', 'subject', 'required|xss_clean'); 
				$this->form_validation->set_rules('message', 'message', 'required|xss_clean'); 
				
				$this->form_validation->set_message('required', 'This field is required.');
				$this->form_validation->set_message('valid_email', 'Please enter a valid email address.');
				$this->form_validation->set_error_delimiters('<span class="error">','</span>');
				

					if ($this->form_validation->run() == FALSE)
						{
					
						$data['main_content'] = 'contact_form';
						}else{
						$subject = $this->input->post('subject');
						$message = "This message has been sent from your website:\n\n".$this->input->post('message')."\n\n From: ".$this->input->post('name')."\nreturn address: ".$this->input->post('email')."\nIP address: ".$this->input->ip_address();
						$from= $this->input->post('from');
						mail($email_addr, $subject, $message, $from);
						$data['main_content'] = 'email_sent';
						}
		
		}else{
			$data['main_content'] = 'contact_form';

		}
					$this->load->model('Pagemodel');

						$data['address'] = $this->Pagemodel->get_address();
						$data['query'] = $this->Pagemodel->get_all();
						$data['query2'] = $this->Pagemodel->get_page($page);
						
						$q2 = $data['query2'];
						foreach($q2 as $row):
						$page_ID = "$row->ID";
						endforeach;
						
						$data['query3'] = $this->Pagemodel->get_all_galleries($page_ID);
						$data['head'] = 'includes/head';
						$data['header'] = 'includes/header';
						$data['footer'] = 'includes/footer_non_home';
						//$data['query3'] = $this->Pagemodel->get_all_galleries($page);
						$this->load->view('includes/template', $data);	
		}
		
		function get_calendar_class (){
        $year = $this->input->post('year');
        $month = $this->input->post('month');
        $day = $this->input->post('day');
        $date = "$year-$month-$day";
        //echo $date;

        $class_query = $this->db->select('cal_class');
	 	$class_query = $this->db->get_where('calendar', array('date' => $date));
	 	foreach ($class_query->result() as $class):
    	//return $row->cal_class;
		echo $class->cal_class;
		//print_r($date);
		endforeach;
    }

}
/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */