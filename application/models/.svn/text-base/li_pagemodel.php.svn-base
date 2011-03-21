<?php

Class Li_pagemodel extends Model{

	var $page = "home";
	var $cal_prefs;

	
    function Li_pagemodel()
    {
        // Call the Model constructor
        parent::Model();
        
	         $this->cal_prefs = array(
			'start_day' => 'monday',
			'show_next_prev' => true,
			'next_prev_url' => base_url().'site/availability'
	          
         );
         
         $this->cal_prefs['template'] = '
			{table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}
			
					{heading_row_start}<tr class="head_row">{/heading_row_start}
					
							{heading_previous_cell}<th class="previous"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
							{heading_title_cell}<th colspan="{colspan}" class="heading">{heading}</th>{/heading_title_cell}
							{heading_next_cell}<th class="next"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}
					
					{heading_row_end}</tr>{/heading_row_end}
					
					{week_row_start}<tr>{/week_row_start}
					{week_day_cell}<td  class="days">{week_day}</td>{/week_day_cell}
					{week_row_end}</tr>{/week_row_end}
					
					{cal_row_start}<tr class="days">{/cal_row_start}
							{cal_cell_start}<td class="day">{/cal_cell_start}
							
									{cal_cell_content}
										<div class="day_num">{day}</div>
										<div class="content">{content}</div>
									{/cal_cell_content}
									
									{cal_cell_content_today}
										<div class="day_num highlight">{day}</div>
										<div class="content">{content}</div>
									{/cal_cell_content_today}
									
									{cal_cell_no_content}
										<div class="day_num">{day}</div>
									{/cal_cell_no_content}
									
									{cal_cell_no_content_today}
										<div class="day_num highlight">{day}</div>
									{/cal_cell_no_content_today}
									
									{cal_cell_blank}&nbsp;{/cal_cell_blank}
							
							{cal_cell_end}</td>{/cal_cell_end}
					{cal_row_end}</tr>{/cal_row_end}
			
			{table_close}</table>{/table_close}
';
             
             
    }
    
    function get_all()
    {
		$this->db->order_by("men_order", "asc");
        $this->db->select('pretty_name, has_sub_menu, menu_title, ID, parent, men_order' );
        $query = $this->db->get('pages');
        return $query->result();
    }
    function get_all_orders(){
		$this->db->order_by("processed", "asc");
		$this->db->order_by("date", "asc"); 
		$query = $this->db->get('shop_orders');
        return $query->result();
        }
    
    function get_page($page)
    {
	 $query2 = $this->db->get_where('pages', array('pretty_name' => $page));
     return $query2->result();
    }
    function get_page_ID($page)
    {
	 $this->db->select('pretty_name');
	 $id_query = $this->db->get_where('pages', array('ID' => '1'));
     return $id_query->result();
    }
    
    function get_all_subpages($li)
    {		$this->db->order_by("men_order", "asc");

	 $sub_query = $this->db->get_where('pages', array('parent' => $li));
      return $sub_query->result();
    }

    
     function add_record($data) 
	{
		$this->db->insert('pages', $data);
		return;
	}
	
	function update_record($data) 
	{
		$this->db->where(array('ID' => $_POST['ID']));
		$this->db->update('pages', $data);
	}
	
	function update_pos($item, $data) 
	{
		$this->db->where(array('ID' => $item));
		$this->db->update('pages', $data);
	}
	function delete_row($data)
	{
		$this->db->where(array('ID' => $_POST['ID']));
		$this->db->delete('pages');
	}
	
	
	
	
	function get_all_galleries()
    {
    
	$query = $this->db->get_where('gallery_images', array('kind'=> 'gallery'));
     return $query->result();
    }

    
    function create_gallery($data)
    {
	 $this->db->insert('gallery_images', $data);
	return;
    }

    function get_gallery($galID)
    {
     $this->db->select();
     $query = $this->db->get('gallery_images');
     $query = $this->db->get_where('gallery_images', array('gallery_ID' => $galID, 'kind' => 'image'));
     return $query->result();
    }
    function get_gallery_info($galID, $parent_pageID)
    {
     $this->db->select();
     $query = $this->db->get('gallery_images');
     $query = $this->db->get_where('gallery_images', array('gallery_ID' => $galID, 'kind' => 'gallery', 'parent_pageID'=>$parent_pageID));
     return $query->result();
    }
	function get_this_gallery_info($galID)
    {
     $this->db->select();
     $query = $this->db->get('gallery_images');
     $sub_query2 = $this->db->limit(1);

     $query = $this->db->get_where('gallery_images', array('gallery_ID' => $galID, 'kind' => 'gallery'));
     return $query->result();
    }
	function get_all_new_gallery_ID()
	{
	$sub_query2 = $this->db->where('kind','gallery');
	$sub_query2 = $this->db->select('gallery_ID');
	$sub_query2 = $this->db->order_by('gallery_ID','desc');
	$sub_query2 = $this->db->limit(1);

	$sub_query2 = $this->db->get('gallery_images');
    $highest = (int)$sub_query2->result();
    $new_id = $highest + 1;

    return ($sub_query2->result());

	}
	
	
	function add_to_gallery($data){
	$this->db->insert('gallery_images', $data);
	return;
	}
	function edit_image($data){
	$this->db->where(array('image_ID' => $_POST['image_ID']));
	$this->db->update('gallery_images', $data);
	}
	function remove_image(){
	$this->db->where(array('image_ID' => $_POST['image_ID']));
	$this->db->delete('gallery_images');
	}
	function update_gallery(){
	
	}
	function add_gallery_to_page(){
	
	}
	function remove_gallery(){
		$this->db->where(array('gallery_ID' => $_POST['gallery_ID'], 'parent_pageID'=>$_POST['pageID']));
		$this->db->delete('gallery_images');
	}
	
	function get_all_products()
    {
    $this->db->select();
	$prods = $this->db->get('products');
     return $prods->result();
    }
    function get_product($product_ID){
     $query = $this->db->get_where('products', array('product_ID' => $product_ID));
     return $query->result();
    }
    function update_product($data){
    	$this->db->where(array('product_ID' => $this->input->post('product_ID')));
		$this->db->update('products', $data);
    }
    function insert_product($data){
    	 $this->db->insert('products', $data);
	redirect('site/members_area/shop');
    }
    
    function add_calendar_data($date, $data, $cal_class= null){
    
    if($this->db->select('date')->from('calendar')->where('date', $date)->count_all_results())
    {
	    $this->db->where('date', $date)
	    ->update('calendar', array(
    		'date' => $date,
    		'data' => $data,
    		'cal_class'=> $cal_class
    		));
    }else{
    	$this->db->insert('calendar', array(
    		'date' => $date,
    		'data' => $data,
    		'cal_class'=> $cal_class
    	));
    	
    	}
    
    }

    function get_calendar_data($year, $month){
    
    	$query = $this->db->select('date, data')->from('calendar')
    	->like('date', "$year-$month", 'after')->get();
    	
    	$cal_data = array();
    	foreach($query->result() as $row){
    		$cal_data[substr($row->date,8,2)+0] = $row->data;
    	}
    	
/*
    	echo "<pre>";
   print_r($cal_data);
    	echo "</pre>";
*/


    return $cal_data;
    }
    
    function cal_generate($year, $month){
    

        $cal_data = $this->get_calendar_data($year, $month);
	
		$this->load->library('calendar', $this->cal_prefs);
		
		return $this->calendar->generate($year, $month, $cal_data);	
		
    }
    
    function get_all_sliders(){
    $query	= $this->db->get('slider');
    return $query->result();

    }
    
    function get_address()
    {
    $address = $this->db->get_where('contact_details', array('cd_ID'=> '1'));
	return $address->result();

    }
    function update_address($data)
    {
    $address = $this->db->update('contact_details', $data);
    }
    
    function get_postcards()
    {
    $postcards = $this->db->get('postcards');
	return $postcards->result();
    }
    

}