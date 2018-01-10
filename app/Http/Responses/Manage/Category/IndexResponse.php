<?php
namespace App\Http\Responses\Manage\Category;

use App\Models\Category;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable
{
	public function toResponse($request)
	{
		$categorys = $this->getData($request);
		return view('manage.category.index', compact('categorys'));
	}

	public function getData()
	{
		return Category::all();
	}
}