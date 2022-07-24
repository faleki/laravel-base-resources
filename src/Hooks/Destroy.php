<?php

namespace App\Http\Controllers\Hooks;

use Symfony\Component\HttpKernel\Exception\HttpException;

trait Destroy
{
  public function destroy($id)
  {
    info('destroy');
    info($id);

    $row = (new $this->model)->find($id);

    if (!$row) {
      throw new HttpException(404, 'Registro não encontrado');
    }

    $row->delete();

    return response()->json($row);
  }
}
