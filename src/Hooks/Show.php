<?php

namespace App\Http\Controllers\Hooks;

use Symfony\Component\HttpKernel\Exception\HttpException;

trait Show
{
  public function show($id)
  {
    info('show');
    info($id);

    $row = (new $this->model)->find($id);

    if (!$row) {
      throw new HttpException(404, 'Registro não encontrado');
    }

    return response()->json($row);
  }
}
