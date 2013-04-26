<?php
	include dirname(__FILE__).'/twitteroauth.php';

	class CTwitterApi extends CApplicationComponent {
		public $consumer_key;
		public $consumer_secret;
		public $oauth_token;
		public $oauth_token_secret;

		function call($function, $params=array(), $method="get", $format=null) {
			$_twitter = new TwitterOAuth(
								$this->consumer_key,
								$this->consumer_secret,
								$this->oauth_token,
								$this->oauth_token_secret
							);

			$_twitter->host = "https://api.twitter.com/1.1/";

			return	$_twitter->{$method}($function, $params);
		}
	}
