<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blog extends BaseController
{
	public function index()
	{
		$blog = new BlogModel();
		$data['blog'] = $blog->orderBy('created_at','desc')
								->findAll();
	
		return view('blog', $data);
	}

	public function store()
	{
		$blog = new BlogModel();
		$blog->insert([
			'blog_title' => $this->request->getVar('blog_title'),
			'blog_description' => $this->request->getVar('blog_description')
 		]);
		
		return redirect()->to('/blog');
	}

	public function delete($id)
	{
		$blog = new BlogModel();
		$blog->delete([
			$id
		]);

		return redirect()->to('/blog');
	}

	public function update($id)
	{
		$blog = new BlogModel();
		$blog->update($id,[
			'blog_title' => $this->request->getVar('blog_title'),
			'blog_description' => $this->request->getVar('blog_description')
 		]);
		
		return redirect()->to('/blog');
	}
}
