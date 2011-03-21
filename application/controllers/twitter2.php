<?php
	class Twitter extends Controller {

		
		private $_consumer_key = 'sxXctMk5vV7NTuiPNjW2A';
	    private $_consumer_secret = 'du7eAmqtH965lc6Ws4A23OzspZeJ2Ue13c1Ifzyekgo';
	    private $_access_token = '15419347-Xn1b5G2hus0yYuws1M7Hb2qv5YE3rH9gJ3VRfjaw';
	    private $_secret_access_token = 'NL6n3r8bok6mTbNki6DJ9LDPoSmgNQfJEchAIX7MhQ';
	    
	function __construct(){
	
		parent::Controller();
		
		
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
	
	function index(){
	echo "stuff";
		
		$this->twitter->call('statuses/user_timeline');
		$this->twitter->oauth($this->_consumer_key, $this->_consumer_secret, $this->_access_token, $this->_secret_access_token);

        $data['tweets'] = $this->twitter->call('statuses/user_timeline');
			$this->load->view('twitter_page', $data);
        //$this->load->view('twitter', $data);
	}
	
	function get_all_tweets(){
		echo "stuff";

/*
		$this->twitter->oauth($this->_consumer_key, $this->_consumer_secret, $this->_access_token, $this->_secret_access_token);
        $data['tweets'] = $this->twitter->call('statuses/friends_timeline');
        $this->load->view('twitter', $data);
*/
	}
	function new_tweet(){
		//$this->twitter->oauth($this->_consumer_key, $this->_consumer_secret, $this->_access_token, $this->_secret_access_token);
        //$data['tweets'] = $this->twitter->call('statuses/friends_timeline');
        //$this->load->view('twitter', $data);
        echo "yay!";
	}
	function get_my_tweets(){
		echo "stuff";

	}
	function direct_messages(){
		echo "stuff";

	}

	

	
}