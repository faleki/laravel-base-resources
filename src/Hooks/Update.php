<?php

namespace App\Http\Controllers\Hooks;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

trait Update
{
  public function update(Request $request, $id)
  {
    info('update');
    info($id);

    $row = (new $this->model)->find($id);

    if (!$row) {
      throw new HttpException(404, 'Registro não encontrado');
    }

    $row->update($request->all());

    return response()->json($row);
  }
}
