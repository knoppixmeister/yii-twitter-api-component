<?php
	include dirname(__FILE__).'/twitteroauth_lib/twitteroauth.php';

	class CTwitterApi extends CApplicationComponent {
		public $consumer_key;
		public $consumer_secret;
		public $oauth_token;
		public $oauth_token_secret;

		function call($function, $method="get", $params=array()) {
			return array();
		}
	}
