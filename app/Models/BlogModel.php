<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
	protected $table                = 'blog';
	protected $primaryKey           = 'blog_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $protectFields        = true;
	protected $allowedFields        = ['blog_id','blog_title', 'blog_description'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';

}
