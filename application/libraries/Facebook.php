<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once("vendor/autoload.php");

class Facebook
{


    private $fb ;

    private $ci;

    private $helper;

    private $permissions = array('scope' => 'publish_actions,email'); // Optional permissions

    public function __construct()
	{
		$this->ci =& get_instance();

        $this->fb = new Facebook\Facebook([
            'app_id' => '1677819115769799',
            'app_secret' => '65193b68009d9eb1a298aa80a14f7416',
            'default_graph_version' => 'v2.5',
            'persistent_data_handler'=>'session'
        ]);

        $this->helper = $this->fb->getRedirectLoginHelper();

	}

    public function get_login()
    {
        $loginUrl = $this->helper->getLoginUrl('http://app.aimazingrace.com/site_login/login_callback', $this->permissions);
        return $loginUrl;
    }

    public function login($accessToken)
    {
        if(empty($accessToken)){
            try {
              $accessToken = $this->helper->getAccessToken();
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
              // When Graph returns an error
              echo 'Graph returned an error: ' . $e->getMessage();
              exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
              // When validation fails or other local issues
              echo 'Facebook SDK returned an error: ' . $e->getMessage();
              exit;
            }
        }

        if (! isset($accessToken)) {
          if ($this->helper->getError()) {
            header('HTTP/1.0 401 Unauthorized');
            echo "Error: " . $this->helper->getError() . "\n";
            echo "Error Code: " . $this->helper->getErrorCode() . "\n";
            echo "Error Reason: " . $this->helper->getErrorReason() . "\n";
            echo "Error Description: " . $this->helper->getErrorDescription() . "\n";
          } else {
            header('HTTP/1.0 400 Bad Request');
            echo 'Bad request';
          }
          exit;
        }

        // Logged in
        // echo '<h3>Access Token</h3>';
        // var_dump($accessToken->getValue());

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $this->fb->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        // echo '<h3>Metadata</h3>';
        // var_dump($tokenMetadata);

        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('1677819115769799');
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        // if (! $accessToken->isLongLived()) {
        //   // Exchanges a short-lived access token for a long-lived one
        //   try {
        //     $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
        //   } catch (Facebook\Exceptions\FacebookSDKException $e) {
        //     echo "<p>Error getting long-lived access token: " . $this->helper->getMessage() . "</p>\n\n";
        //     exit;
        //   }
        //
        //   echo '<h3>Long-lived</h3>';
        //   var_dump($accessToken->getValue());
        // }
        return ($accessToken);

    }


    public function get_user_profile($access_token)
    {
        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $this->fb->get('/me?fields=id,name,email', $access_token);
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $user = $response->getGraphUser();

        return $user;
    }


    public function post_message($access_token,$msg='')
    {
        $linkData = [
            'message' => $msg,
        ];

        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $this->fb->post('/me/feed', $linkData, $access_token);
            return true;
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        // $graphNode = $response->getGraphNode();

        // echo 'Posted with id: ' . $graphNode['id'];
    }


    public function upload($access_token,$img='',$msg='')
    {
        try {
		  // Get the Facebook\GraphNodes\GraphUser object for the current user.
		  // If you provided a 'default_access_token', the '{access-token}' is optional.
		  $response = $this->fb->get('/me', $access_token);
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}

		$me = $response->getGraphUser();
		// echo 'Logged in as ' . $me->getName();
        	//var_dump(FCPATH .'uploads/1048959970_me.png');
		$data = [
		  'message' => $msg,
		  'source' => $this->fb->fileToUpload($img["tmp_name"]),//FCPATH.'uploads/1048959970_me.png'
		  'access_token' => $access_token
		  // Or you can provide a remote file location
		  //'source' => $this->fb->fileToUpload('https://example.com/photo.jpg'),
		];

		try {
		  $response = $this->fb->post('/me/photos', $data);
          if($response)
            return true;
        //   var_dump($response);
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  echo 'Error: ' . $e->getMessage();
		  exit;
		}
    }
}