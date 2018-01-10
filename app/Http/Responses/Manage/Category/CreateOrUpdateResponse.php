<?php
namespace App\Http\Responses\Manage\Category;

use Illuminate\Contracts\Support\Responsable;

class CreateOrUpdateResponse implements Responsable
{
	protected $request;
	protected $catgory;

	public function __construct($request, $category)
	{
		$this->category = $category;
		$this->request  = $request;
	}

	public function toResponse($request)
	{
		$this->createOrUpdate();
		return redirect()->route('category.index')->withSuccess('data saved');
	}

	public function createOrUpdate()
	{
		$this->category->name = $this->request->name;
		return $this->category->save();
	}
}