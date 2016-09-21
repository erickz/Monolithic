<?php

class CommentHelper {

	public function __construct()
  {

  }

  /**
   * Get the credential
   * @return
  */
  private function getCredential()
  {
    return User::find(1);
  }

  /**
   * [getToken description]
   * @return [type] [description]
  */
  private function getToken()
  {
    $user = $this->getCredential();

    return $user->api_token;
  }

  /**
   * [buildUrl description]
   * @return [type] [description]
  */
  private function buildUrl($url = '')
  {
    return Curl::to(Config::get('comments.url') . $url . '?api_token=' . $this->getToken());
  }

	/**
	 * [runGet description]
	 * @param  [type] $url [description]
	 * @return [type]      [description]
	*/
	public function runGet($url = '')
	{
		return $this->buildUrl($url)->get();
	}

	/**
	 * [runPost description]
	 * @param  string $url [description]
	 * @return [type]      [description]
	*/
	public function runPost($url = '')
	{
		return $this->buildUrl($url)->withData( Input::all() )->post();
	}

  /**
   * Get the comments
   * @return
  */
  public function get($postId = NULL)
  {
		if ( ! $postId )
    	return $this->runGet('get-comments');
		else
			return $this->runGet('comments/' . $postId);
  }

  /**
   * Get the comments
   * @return
  */
  public function store()
  {
		return $this->runPost('create-comment');
  }
}
