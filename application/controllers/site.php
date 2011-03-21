<?php
class Site extends Controller{
var $page = '';
private $_consumer_key = 'SCiqXjs4pekyCnEGJ9XQ';
    private $_consumer_secret = '1SNr17qymQ7oZU1LSCpSU4uagJ4YWE0yfNhQ4dP8aA';
    private $_access_token = '15419347-Xn1b5G2hus0yYuws1M7Hb2qv5YE3rH9gJ3VRfjaw';
    private $_secret_access_token = 'NL6n3r8bok6mTbNki6DJ9LDPoSmgNQfJEchAIX7MhQ';
    
	function __construct(){
	
	parent::Controller();
	$this->is_logged_in();
	$this->load->helper(array('form', 'url'));
	
	$this->load->model('Li_pagemodel');
	$this->load->helper('array');
	$this->load->library('image_lib');
	$this->load->model('twitter_model');
	$this->load->library('twitter');
	
	
/*
	$this->twitter->search('search', array('q' => 'elliot'));
$this->twitter->search('trends');
$this->twitter->search('trends/current');
$this->twitter->search('trends/daily');
$this->twitter->search('trends/weekly');
$this->twitter->call('statuses/public_timeline');
$this->twitter->call('statuses/friends_timeline');
$this->twitter->call('statuses/user_timeline');
$this->twitter->call('statuses/show', array('id' => 1234));
$this->twitter->call('direct_messages');
$this->twitter->call('statuses/update', array('status' => 'If this tweet appears, oAuth is working!'));
$this->twitter->call('statuses/destroy', array('id' => 1234));
$this->twitter->call('users/show', array('id' => 'elliothaughin'));
$this->twitter->call('statuses/friends', array('id' => 'elliothaughin'));
$this->twitter->call('statuses/followers', array('id' => 'elliothaughin'));
$this->twitter->call('direct_messages');
$this->twitter->call('direct_messages/sent');
$this->twitter->call('direct_messages/new', array('user' => 'jamierumbelow', 'text' => 'This is a library test. Ignore'));
$this->twitter->call('direct_messages/destroy', array('id' => 123));
$this->twitter->call('friendships/create', array('id' => 'elliothaughin'));
$this->twitter->call('friendships/destroy', array('id' => 123));
$this->twitter->call('friendships/exists', array('user_a' => 'elliothaughin', 'user_b' => 'jamierumbelow'));
$this->twitter->call('account/verify_credentials');
$this->twitter->call('account/rate_limit_status');
$this->twitter->call('account/rate_limit_status');
$this->twitter->call('account/update_delivery_device', array('device' => 'none'));
$this->twitter->call('account/update_profile_colors', array('profile_text_color' => '666666'));
$this->twitter->call('help/test');


*/


	}
	
	
	//

	function members_area($page = null)
	{		
	if($page == null){
	$id_query = $this->Li_pagemodel->get_page_ID($page);
		foreach ($id_query as $row):
			$page = $row->pretty_name;
			redirect("site/members_area/$page");
		endforeach;
	}
		$data['query2'] = $this->Li_pagemodel->get_page($page);
		$q2 = $data['query2'];
			foreach($q2 as $m_row):
				$page_ID = "$m_row->ID";
			endforeach;
		

			$data['query'] = $this->Li_pagemodel->get_all();
	
	$data['query'] = $this->Li_pagemodel->get_all();

		//$data['tw']=$this
		$this->load->view('LI_header', $data);
		$this->load->view('nav', $data);
		
		if ($page == 'view_orders'){
			$data['orders'] = $this->Li_pagemodel->get_all_orders();
			$this->load->view('view_orders', $data);
		}elseif($page == 'twitter'){
		
		$this->twitter->oauth($this->_consumer_key, $this->_consumer_secret, $this->_access_token, $this->_secret_access_token);
        $data['tweets'] = $this->twitter->call('statuses/friends_timeline');
		$this->load->view('twitter_page', $data);
		}elseif ($page == 'contact-details'){
			$data['contact_details'] = $this->Li_pagemodel->get_all_orders();
			$this->load->view('contact_details', $data);
		}elseif($page_ID == '7'){
			$data['prods'] = $this->Li_pagemodel->get_all_products();
			$this->load->view('members_area', $data);
			//$this->get_prod_table();
			$this->load->view('Li_shop', $data);
		}elseif($page_ID == '6'){
			redirect('site/edit_postcards');

		}elseif($page_ID == '2'){
			$this->load->view('image_admin', $data);
		}elseif($page_ID == '3'){
			$this->load->view('file_admin', $data);
		}else{
			$this->load->view('members_area', $data);
		}
			$this->load->view('LI_footer', $data);
		
	}

	
			
			
	function get_all_tweets(){

		$this->twitter->oauth($this->_consumer_key, $this->_consumer_secret, $this->_access_token, $this->_secret_access_token);
        $data['tweets'] = $this->twitter->call('statuses/friends_timeline');
        $this->load->view('tweetpattern', $data);
	}
	function new_tweet(){
		$new_status = $this->input->post('tweet');

		$this->twitter->oauth($this->_consumer_key, $this->_consumer_secret, $this->_access_token, $this->_secret_access_token);
		$this->twitter->call('statuses/update', array('status' =>	$new_status));
	 $data['tweets'] = $this->twitter->call('statuses/friends_timeline');

		redirect('site/members_area/twitter');
        //echo "new_tweet!";
	}
	function get_my_tweets(){
		echo "get_my_tweets";

	}
	function tweet_reply(){
		$new_status = $this->input->post('pop_ta');

		$this->twitter->oauth($this->_consumer_key, $this->_consumer_secret, $this->_access_token, $this->_secret_access_token);
		$this->twitter->call('statuses/update', array('status' =>	$new_status));
	 $data['tweets'] = $this->twitter->call('statuses/friends_timeline');

		redirect('site/members_area/twitter');

	}
	
	
	
	
	
	
	
	function get_prod_table()
	{
	$data['prods'] = $this->Li_pagemodel->get_all_products();
	$this->load->view('products_table', $data);
	}
	
	function availability($year = null, $month=null)
	{
	
		if(!$year){
		$year = date('Y');
		}
		if(!$month){
		$year = date('m');
		}
		
				
		$this->load->model('Li_pagemodel');

	
		if($day = $this->input->post('day'))
		{
			$this->Li_pagemodel->add_calendar_data("$year-$month-$day",	$this->input->post('data'));
		}

		$data['query'] = $this->Li_pagemodel->get_all();
		$data['query2'] = $this->Li_pagemodel->get_page('availability');


		$this->load->view('LI_header', $data);
		$this->load->view('nav', $data);

		$data['calendar'] = $this->Li_pagemodel->cal_generate($year, $month);
		
		$this->load->view('mycal', $data);
		$this->load->view('LI_footer', $data);

		//echo $this->input->post('data');
			
	}
		
		
	function cal_modal_form()
	{
	$year = $this->input->post('year');
	$month = $this->input->post('month');
	$day = $this->input->post('day');
	$data = $this->input->post('data');
	$cal_class = $this->input->post('cal_class');
	if($day = $this->input->post('day'))
		{
			$this->Li_pagemodel->add_calendar_data("$year-$month-$day",	$this->input->post('data'), $this->input->post('cal_class'));
			echo "$year-$month-$day\n";
			echo "$data\n";
		}
	}
	
	
	function create_area()
	{	$data = array(
		'title' => '',
		'content' =>'',
		'pretty_name' =>null,
		'user_page' =>'',
		'accesslevel' =>'',
);
		
		
		$this->load->model('Li_pagemodel');
		$data['query'] = $this->Li_pagemodel->get_all();

		$this->load->view('LI_header', $data);
		$this->load->view('nav', $data);
		$this->load->view('new_page', $data);
		$this->load->view('LI_footer', $data);

		/*
$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'pretty_name' => $this->input->post('pretty_name'),
			'user_page' => $this->input->post('user_page'),
			'accesslevel' => $this->input->post('accesslevel'),
			'has_sub_menu' => $this->input->post('page_type'),
			'parent' => $this->input->post('parent')
		);
*/
		
		//$this->Li_pagemodel->add_record($data);
		//$this->members_area();
	}
	
		function updater()
		{
			$this->load->model('Li_pagemodel');
			$page_type = $this->input->post('page_type');
			$title = $this->input->post('title');
				
			if($title == ""){
			$title = "Temporary Name";
			}
			$prettyname1 = str_replace("&", "and", $title);
			$repwithdash = array(" ", ',');//characters to replace with dash
			$pretty_name2 = str_replace($repwithdash, "-", $prettyname1);
			$search  = array('', '.', ';', '/', '?', "'",'!','@','£','$','%','^','*',':','#','{','}','\\','<','>','+',',');//list illegal characters to remove
			$pretty_name3 = str_replace($search, "", $pretty_name2);
			
			
			$parent = $this->input->post('parent');
			
			if($page_type != "true")
			{
				$parent = "";
			}
/*
			if($page_type == 'parent'){
				$this->db->select('parent');
				$this->db->where('parent',);
			}
*/


			$protected_IDs = array('6','7','24','26');
			$ID = $this->input->post('ID');
			if (in_array($ID, $protected_IDs)) {
				$data = array(
					'content' => $this->input->post('content'),
					'user_page' => $this->input->post('user_page'),
					'accesslevel' => $this->input->post('accesslevel'),
					'ID' => $this->input->post('ID'),
					'has_sub_menu' => $this->input->post('page_type'),
					'keywords' => $this->input->post('keywords'),
					'meta_title' => $this->input->post('meta_title'),
					'description' => $this->input->post('description'),
					'parent' => $this->input->post('parent'),
					'main_image' =>$this->input->post('main_image'),
					'menu_title' =>$this->input->post('menu_title'),
					'show_hide' => $this->input->post('show_hide')
					);
					}
			if (!in_array($title, $protected_IDs)) {
			
				$data = array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content'),
					'pretty_name' => $pretty_name3,
					'user_page' => $this->input->post('user_page'),
					'accesslevel' => $this->input->post('accesslevel'),
					'ID' => $this->input->post('ID'),
					'has_sub_menu' => $this->input->post('page_type'),
					'keywords' => $this->input->post('keywords'),
					'meta_title' => $this->input->post('meta_title'),
					'description' => $this->input->post('description'),
					'parent' => $this->input->post('parent'),
					'main_image' =>$this->input->post('main_image'),
					'menu_title' =>$this->input->post('menu_title'),
					'show_hide' => $this->input->post('show_hide')
					);
				}				
			
					
			
			$delete = $this->input->post('delete');
			
			if($delete !="TRUE")
			{
			$this->Li_pagemodel->update_record($data);
			$this->members_area($pretty_name3);
			}
			else
			{
			$this->Li_pagemodel->delete_row($data);
			$this->members_area('');
			//echo 'false';
			}
			
						
		}
	function create()
	{
	$this->load->model('Li_pagemodel');
	
	$pretty_name = $this->input->post('title');		
	if($pretty_name == ""){
	$pretty_name = "Temporary Name";
	}
	
	$pretty_name2 = str_replace(" ", "-", $pretty_name);
	$parent_post = $this->input->post('parent');

	$data = array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content'),
					'pretty_name' => $pretty_name2,
					//'user_page' => $this->input->post('user_page'),
					//'accesslevel' => $this->input->post('accesslevel'),
					'user_page' => 'TRUE',
					'accesslevel' => '3',
					'has_sub_menu' => $this->input->post('page_type'),
					'parent' => $parent_post,
					'menu_title' =>$this->input->post('menu_title'),

					);
					
	if($parent_post !=''){
		$this->db->where(array('pretty_name' => $parent_post));
		$this->db->update('pages', array('has_sub_menu' => 'parent'));
	}				

	$this->Li_pagemodel->add_record($data);
	$this->members_area('');
	}
	
	
	function delete()
	{
		$this->load->model('Li_pagemodel');

	$this->Li_pagemodel->delete_row();
		$this->index();
	}


	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('/');		
			}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('/');		

	}

	function create_gallery(){
		$this->load->model('Li_pagemodel');
		$gallery_name = $this->input->post('gallery_name');
		
		$data = array(
		'gallery_name' => $this->input->post('gallery_name'),
		'kind' => 'gallery',
		'gallery_ID' => $this->input->post('gallery_ID')		
		);
		$this->Li_pagemodel->create_gallery($data);
		$this->members_area('');
	
	}
	

	function update_gallery($ID){
		$this->load->model('Li_pagemodel');
		$this->Li_pagemodel->update_gallery();
		$this->index();
	}
	
		function insert_product(){
			$this->load->model('Li_pagemodel');			
			
			$data = array(
					
					'product_image' 		=> $this->input->post('product_image'),
					'product_name' 			=> $this->input->post('product_name'),
					'product_ID' 			=> $this->input->post('product_ID'),
					'product_description' 	=> $this->input->post('product_description'),
					'red' 					=> $this->input->post('red'),
					'orange' 				=> $this->input->post('orange'),
					'green' 				=> $this->input->post('green'),
					'blue'				 	=> $this->input->post('blue'),
					'yellow' 				=> $this->input->post('yellow'),
					'purple'				=> $this->input->post('purple'),
					'light_blue'			=> $this->input->post('light_blue'),
					'navy_blue'				=> $this->input->post('navy_blue'),
					'light_pink'			=> $this->input->post('light_pink'),
					'dark_pink'				=> $this->input->post('dark_pink'),
					'olive'					=> $this->input->post('olive'),
					'grey'					=> $this->input->post('grey'),
					'white'					=> $this->input->post('white'),
					'black'					=> $this->input->post('black'),
					'xsmall' 				=> $this->input->post('xsmall'),
					'small' 				=> $this->input->post('small'),
					'medium' 				=> $this->input->post('medium'),
					'large' 				=> $this->input->post('large'),
					'xlarge' 				=> $this->input->post('xlarge'),
					'xxlarge' 				=> $this->input->post('xxlarge'),
					'sizes' 				=> $this->input->post('sizes'),
					'colours' 				=> $this->input->post('colours')
					);
			$this->Li_pagemodel->insert_product($data);

		}
		
		
		
	
	function update_product(){
			$this->load->model('Li_pagemodel');			
			
			$data = array(
					
					'product_image' => $this->input->post('product_image'),
					'product_name' => $this->input->post('product_name'),
					'product_ID' => $this->input->post('product_ID'),
					'product_description' => $this->input->post('product_description'),
					'product_price' => $this->input->post('product_price'),
					'red' => $this->input->post('red'),
					'orange' => $this->input->post('orange'),
					'green' => $this->input->post('green'),
					'blue' => $this->input->post('blue'),
					'yellow' => $this->input->post('yellow'),
					'purple' => $this->input->post('purple'),
					'light_blue'			=> $this->input->post('light_blue'),
					'navy_blue'				=> $this->input->post('navy_blue'),
					'light_pink'			=> $this->input->post('light_pink'),
					'dark_pink'				=> $this->input->post('dark_pink'),
					'olive'					=> $this->input->post('olive'),
					'grey'					=> $this->input->post('grey'),
					'white'					=> $this->input->post('white'),
					'black'					=> $this->input->post('black'),
					'xsmall' => $this->input->post('xsmall'),
					'small' => $this->input->post('small'),
					'medium' => $this->input->post('medium'),
					'large' => $this->input->post('large'),
					'xlarge' => $this->input->post('xlarge'),
					'xxlarge' => $this->input->post('xxlarge'),
					'sizes' => $this->input->post('sizes'),
					'colours' => $this->input->post('colours')
					);
			$this->Li_pagemodel->update_product($data);

		}
		
		function get_updated_product (){
						$product_ID = $_POST['product_ID'];
						$this->load->model('Li_pagemodel');
						$data['query'] = $this->Li_pagemodel->get_product($product_ID);
						$this->load->view('edit_products', $data);
		}
	
	
	function product_form(){
			if(isset($_POST['action'])){
					$action = $_POST['action'];
					
					if($action == 'edit'){
					
						$product_ID = $_POST['product_ID'];
						$this->load->model('Li_pagemodel');
						$data['query'] = $this->Li_pagemodel->get_product($product_ID);
						$this->load->view('edit_products', $data);

					}
					
					if($action == 'enable'){
						$this->load->model('Li_pagemodel');
						$data = array(
								'show' => 'TRUE',
								);
						$this->db->where(array('product_ID' => $_POST['product_ID']));
						$this->db->update('products', $data);
						//redirect('site/members_area/shop');
						
						}
						
					if($action == 'disable'){
					$this->load->model('Li_pagemodel');
						
						$data = array(
								'show' => ''
								);
						$this->db->where(array('product_ID' => $_POST['product_ID']));
						$this->db->update('products', $data);
						//redirect('site/members_area/shop');


					}
					if($action == 'delete'){
						$this->db->where(array('product_ID' => $_POST['product_ID']));
						$this->db->delete('products');
						//redirect('site/members_area/shop');

					}
			}else{
	echo "Please select one";
	}
	}
	
	function mark_order_complete(){
		$data = array(
		'processed' => $this->input->post('processed'),
		'completed_date' => date("Y/m/d")
		);
		$this->db->where(array('id' => $_POST['id']));
		$this->db->update('shop_orders', $data);
		redirect('site/members_area/view_orders');
		
	}
	function slider(){
			$this->load->model('Li_pagemodel');


			$data = array(
					'image_name' => $this->input->post('image_name'),
					'info_title' => $this->input->post('info_title'),
					'info_copy' => $this->input->post('info_copy'),
					'panel_position' => $this->input->post('panel_position'),
					);
					
					
			$this->db->where(array('slider_ID'=>$this->input->post('slider_ID')));
			$this->db->update('slider', $data);

			$this->members_area('');
			

	}
	function contact_details($page=null)
	{	
		if($cd_ID = $this->input->post('cd_ID')){
		 
		$data = array(
			'cd_ID' => $this->input->post('cd_ID'),	
			'building' => $this->input->post('building'),	
			'road' => $this->input->post('road'),	
			'area' => $this->input->post('area'),	
			'city' => $this->input->post('city'),	
			'postcode' => $this->input->post('postcode'),	
			'telephone' => $this->input->post('telephone'),	
			'fax' => $this->input->post('fax'),	
			'email' => $this->input->post('email'),	
			'other_phone' => $this->input->post('other_phone'),	
			);
		
		$this->db->where(array('cd_ID'=>$this->input->post('cd_ID')));
		$this->db->update('contact_details', $data);		
		}
		
		
		$data['query2'] = $this->Li_pagemodel->get_page($page);
		$data['query'] = $this->Li_pagemodel->get_all();
		$data['address'] = $this->Li_pagemodel->get_address();

		$this->load->view('LI_header', $data);
		$this->load->view('nav', $data);
		$this->load->view('contact_details', $data);
		$this->load->view('LI_footer', $data);
	}
	function enq_addr($page=null){
	if($enq_addr = $this->input->post('enq_addr')){
	$data = array(
	'enq_addr'=>$this->input->post('enq_addr')
	);
	$this->db->where(array('cd_ID'=>$this->input->post('cd_ID')));
	$this->db->update('contact_details', $data);
	}
		$data['query2'] = $this->Li_pagemodel->get_page($page);
		$data['query'] = $this->Li_pagemodel->get_all();
		$data['address'] = $this->Li_pagemodel->get_address();

		$this->load->view('LI_header', $data);
		$this->load->view('nav', $data);
		$this->load->view('contact_details', $data);
		$this->load->view('LI_footer', $data);
	}
	
	function edit_postcards($page=null){
	
		if($postcard_ID = $this->input->post('postcard_ID')){
		 
		$data = array(
			'postcard_ID' => $this->input->post('postcard_ID'),	
			'postcard_image' => $this->input->post('postcard_image'),	
			'postcard_message' => $this->input->post('postcard_message'),	
			);
		
		$this->db->where(array('postcard_ID'=>$this->input->post('postcard_ID')));
		$this->db->update('postcards', $data);	
		}
	
	
		$data['query2'] = $this->Li_pagemodel->get_page($page='send-a-postcard');
		$data['query'] = $this->Li_pagemodel->get_all();
		$data['postcards'] = $this->Li_pagemodel->get_postcards();
		

		$this->load->view('LI_header', $data);
		$this->load->view('nav', $data);
		$this->load->view('edit_postcards', $data);
		$this->load->view('members_area', $data);
		$this->load->view('LI_footer', $data);
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
    function sort_order(){
    	/* This is where you would inject your sql into the database but we're just going to format it and send it back */ 
foreach ($_POST['num'] as $position => $item) : 
  //$sql[] = "UPDATE `pages` SET `men_order` = $position WHERE `id` = $item"; 
  $data = array('men_order' => $position);
$this->Li_pagemodel->update_pos($item, $data);
  endforeach; 
//print_r ($sql); 
    
    }
        
    
/* 
	$query = "SELECT * FROM shop_orders WHERE processed != 'TRUE'";
	$result = mysql_query($query) or die("Query failed");
	$num_rows = mysql_num_rows($result);
	
	//echo $num_rows;
	$response = array('unread' =>$num_rows);
	
	echo json_encode($response);
	     */
	     

	   function twittering() {
        

        $this->twitter->oauth($this->_consumer_key, $this->_consumer_secret, $this->_access_token, $this->_secret_access_token);

        $data['tweets'] = $this->twitter->call('statuses/user_timeline');

        //Load this data into a view and show it.
    }
	
	
}