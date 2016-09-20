<?php

class CommentsController extends BaseController {

	/**
	 * Fill the data
	 * @return Comment
	*/
	private function fill($id = NULL)
	{
		if ($id)
			$comment = Comment::find($id);
		else
			$comment = new Comment;

		if (! $comment)
			return 0;

		$comment->post_id = Input::get('post_id');
		$comment->text = Input::get('text');
		$comment->save();

		return $comment;
	}

	public function get()
	{
		return Comment::all();
	}

	public function store()
	{
		$comment = $this->fill();

		return 'Registro criado com sucesso!';
	}

	public function update($id)
	{
		$comment = $this->fill($id);

		return 'Registro atualizado com sucesso!';
	}

	public function delete($id)
	{
		$comment = Comment::find($id);
		$comment->destroy();

		return 'Registro apagado com sucesso!';
	}
}
