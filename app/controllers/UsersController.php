<?php

class UsersController extends BaseController {

	/**
	 * Fill the data
	 * @return User
	*/
	private function fill($id = NULL)
	{
		if ($id)
			$user = User::find($id);
		else
			$user = new User;

		if (! $user)
			return 0;

		$user->api_token = str_random(60);
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->save();

		return $user;
	}

	public function get()
	{
		return User::all();
	}

	public function store()
	{
		$user = $this->fill();

		return 'Registro criado com sucesso!';
	}

	public function update($id)
	{
		$user = $this->fill($id);

		return 'Registro atualizado com sucesso!';
	}

	public function delete($id)
	{
		$user = User::find($id);
		$user->destroy();

		return 'Registro apagado com sucesso!';
	}

	public function login()
	{
		$success = Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]);

      if ($success)
        return 'Login realizado com sucesso!';
      else
        return 'Não foi possível realizar o login';
	}
}
