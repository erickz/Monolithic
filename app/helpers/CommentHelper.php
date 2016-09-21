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
  private function run($url = '')
  {
    return Curl::to(Config::get('comments.url') . $url . '?api_token=' . $this->getToken())->get();
  }

  /**
   * Get the comments
   * @return
  */
  public function get()
  {
    return $this->run('get-comments');
  }
}
