<?php

namespace App\Http\Controllers\Hooks;

trait Index
{
  public function index()
  {
    return response()->json(
      (new $this->model)::simplePaginate($this->rows_per_page)
    );
  }
}
