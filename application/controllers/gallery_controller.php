<?php
class Gallery_controller extends Controller{

	function __construct(){
	
	parent::Controller();
		
	}


	function create_gallery(){
		$this->load->model('Li_pagemodel');
		
	}
	function update_gallery($ID){
		$this->load->model('Li_pagemodel');
		$this->Li_pagemodel->update_gallery();
		$this->index();
		
	}
	
	function update_name(){
	
	$this->load->model('Li_pagemodel');
						
	$data = array(
			'gallery_name' => $this->input->post('gallery_name')
			);
	$this->db->where(array('image_ID' => $this->input->post('image_ID')));
	$this->db->update('gallery_images', $data);
	$pageID = $this->input->post('page_ID');
	$data['sub_query'] = $page_ID;
	$this->load->view('galleries', $data);
	}
	
	
	function deliver_gallery(){

		$galID = $_POST['galID'];

		$this->load->model('Li_pagemodel');
		$data['query'] = $this->Li_pagemodel->get_gallery($galID);
		$this->load->view('edit_gallery', $data);
	
	}
	
	function deliver_table(){
	$pageID =$_POST['pageID'];
	$this->load->model('Li_pagemodel');
	$data = array('pageID'=> $pageID);
	$this->load->view('galleries', $data);
	}
	
	function add_gallery_to_page(){
		$this->load->model('Li_pagemodel');
		$data = array(
				'gallery_ID' => $this->input->post('gallery_ID'),
				'kind' => 'gallery',
				'parent_pageID' => $this->input->post('page_ID'),
				'gallery_name' => $this->input->post('gallery_name'),
					

);	 $this->db->insert('gallery_images', $data);
	$this->load->view('newgall', $data);


	}
	
	function add_image(){
		$this->load->model('Li_pagemodel');		
		$data = array(
		'gallery_ID' => $this->input->post('gallery_ID'),
		'kind' => 'image',
		'image_name' => $this->input->post('image'),
		'image_title' => $this->input->post('image_title'),
		'image_alt' => $this->input->post('image_alt')		
		);
		$this->Li_pagemodel->add_to_gallery($data);
	}
	function edit_image(){
	
			$this->load->model('Li_pagemodel');			
			
			$data = array(
					
					'image_alt' => $this->input->post('image_alt'),
					'image_title' => $this->input->post('image_title'),
					'image_ID' => $this->input->post('image_ID'),
					'gallery_ID' => $this->input->post('gallery_ID'),
					'parent_pageID' => $this->input->post('parent_pageID'),
					'gallery_name' => $this->input->post('gallery_name')
					);
					
			
			$delete = $this->input->post('delete');
			
			if($delete !="true")
			{
			$this->Li_pagemodel->edit_image($data);
			}
			else
			{
			$this->Li_pagemodel->remove_image($data);
			
			}
	}
	
	function gallery_form_one(){
			if(isset($_POST['action'])){
					$action = $_POST['action'];
					
					if($action == 'edit'){
					
						$galID = $_POST['gallery_ID'];
						$pageID = $_POST['this_pageID'];
						//echo $galID;
						$this->load->model('Li_pagemodel');
						$data['query'] = $this->Li_pagemodel->get_gallery($galID);
						$this->load->view('edit_gallery', $data);

					}
					
					if($action == 'add_to_page'){
						$this->load->model('Li_pagemodel');
						
						$data = array(
								'gallery_ID' => $this->input->post('gallery_ID'),
								'kind' => 'gallery',
								'parent_pageID' => $this->input->post( 'parent_pageID').$this->input->post('this_pageID_bkts'),
								'gallery_name' => $this->input->post('gallery_name')
								);
						$this->db->where(array('image_ID' => $_POST['image_ID']));
						$this->db->update('gallery_images', $data);
						}
						
					if($action == 'remove_from_page'){
					$this->load->model('Li_pagemodel');
						
						$data = array(
								'parent_pageID' => $this->input->post('parent_pageID_rmv'),
								);
						$this->db->where(array('image_ID' => $_POST['image_ID']));
						$this->db->update('gallery_images', $data);
						//$this->db->delete('gallery_images',array('image_ID' => $_POST['image_ID']));

					}
					if($action == 'delete'){
						$this->db->where(array('gallery_ID' => $_POST['gallery_ID']));
						$this->db->delete('gallery_images');
					}
			}else{
	echo "Please select one";
	}
	}
	
	
	
}