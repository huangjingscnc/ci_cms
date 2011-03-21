<?php
class Pagemodel extends Model {

	var $page = "home";
	
    function Pagemodel()
    {
        // Call the Model constructor
        parent::Model();
        
    	$this->cal_prefs = array(
		'start_day' => 'monday',
		'show_next_prev' => true,
		'next_prev_url' => base_url().'page/availability'
          
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
    	function get_link(){ 
        $this->db->select('menu_title');
    	$get_link = $this->db->get_where('pages', array('ID' => '6'));
     	return $get_link->result();
    	}
    
    	function get_calendar_data($year, $month){
    	$this->db->select('date, data');
    	$this->db->like('date', "$year-$month", 'after');
    	$query =  $this->db->get('calendar');
    	//$query =  $this->db->from('calendar')->like('date', "$year-$month", 'after')->get();
    	
    	$cal_data = array();
    	foreach($query->result() as $row){
    		$cal_data[substr($row->date,8,2)+0] = $row->data;
    	}
       return $cal_data;
    	}
    	
    function cal_generate($year, $month)
    {
        $cal_data = $this->get_calendar_data($year, $month);
	
		$this->load->library('calendar', $this->cal_prefs);
		
		return $this->calendar->generate($year, $month, $cal_data);	
		
    }
    
    function get_mpage_ID()
    {
	 $this->db->select('pretty_name');
	 $id_query = $this->db->get_where('pages', array('ID' => '1'));
     return $id_query->result();
    }
    
    function get_all()
    {
    	$this->db->order_by("men_order", "asc");
        $this->db->select('menu_title, has_sub_menu, pretty_name, ID, show_hide, men_order');
        $query = $this->db->get('pages');
        return $query->result();
    }
    
    function get_page($page)
    {
	 $query2 = $this->db->get_where('pages', array('pretty_name' => $page));
     return $query2->result();
    }
    function get_page_id($page)
    {
    $idquery = $this->db->select('ID')->get_where('pages', array('pretty_name' => $page));
				foreach ($idquery as $id_result):	
				//print_r($id_result);
				$id = $id_result;
				endforeach;
				return $id;
    }
    
    function get_all_subpages($li)
    {
    $this->db->order_by("men_order", "asc");
	 $sub_query = $this->db->get_where('pages', array('parent' => $li));

      return $sub_query->result();
    }
    
    function get_subpagepage($page)
    {
	 $query2 = $this->db->get_where('pages', array('pretty_name' => $page));
     return $query2->result();
    }
     function get_sliders()
    {
        //$this->db->select('pretty_name, has_sub_menu');
        $query = $this->db->get('slider');
        return $query->result();
    }
    
    function get_all_galleries($page_ID){
	    $parent_pageID = "[$page_ID]";
	    $query3 = $this->db->get_where('gallery_images', array('kind'=> 'gallery'));
	     return $query3->result();
    }
    
    function get_all_images(){
	    $query4 = $this->db->get_where('gallery_images', array('kind'=> 'image'));
	     return $query3->result();
    }
    
    function get_gallery($gallery_ID){
	    $query4 = $this->db->get_where('gallery_images', array('kind'=> 'image', 'gallery_ID'=>$gallery_ID));
	    return $query4->result();
    }
    
    function shop(){
		$query = $this->db->get_where('products', array('show'=> 'TRUE'));
        return $query->result();
        }
    function process_order($data){
      $this->db->insert('shop_orders', $data);

    }
    
    function get_address()
    {
    $address = $this->db->get_where('contact_details', array('cd_ID'=> '1'));
	return $address->result();

    }
    function get_postcards()
    {
    $postcards = $this->db->get('postcards');
	return $postcards->result();
    }
    
    function insert_card($data)
    {
    	$this->db->insert('sent_cards', $data);
    	$id = mysql_insert_id();
		return $id;
    }
    function view_card($m_ID){
    	$query = $this->db->get_where('sent_cards', array('m_ID' =>$m_ID));
    	foreach ($query->result() as $row):
		$ID = $row->postcard_ID;
		$query = $this->db->get_where('postcards', array('postcard_ID' =>$ID));
		endforeach;
    	return $query->result();
    }
    function get_greeting($m_ID)
    {
        	$query = $this->db->get_where('sent_cards', array('m_ID' =>$m_ID));
			 return $query->result();

    }
}
