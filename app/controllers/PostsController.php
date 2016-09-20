<?php

class PostsController extends BaseController {

	/**
	 * Fill the data
	 * @return Post
	*/
	private function fill($id = NULL)
	{
		if ($id)
			$post = Post::find($id);
		else
			$post = new Post;

		if (! $post)
			return 0;

		$post->name = Input::get('name');
		$post->content = Input::get('content');
		$post->save();

		return $post;
	}

	public function get()
	{
		return Post::all();
	}

	public function store()
	{
		$post = $this->fill();

		return 'Registro criado com sucesso!';
	}

	public function update($id)
	{
		$post = $this->fill($id);

		return 'Registro atualizado com sucesso!';
	}

	public function delete($id)
	{
		$post = Post::find($id);
		$post->destroy();

		return 'Registro apagado com sucesso!';
	}
}
