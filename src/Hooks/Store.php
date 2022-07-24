<?php

namespace App\Http\Controllers\Hooks;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

trait Store
{
  public function store(Request $request)
  {
    $row = (new $this->model)->create($request->all());

    if (!$row) {
      throw new HttpException(400, 'Ocorreu um erro');
    }

    return response()->json($row);
  }
}
