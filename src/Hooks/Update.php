<?php

namespace App\Http\Controllers\Hooks;

use Illuminate\Http\Request;

trait Update
{
  public function update(Request $request, $id)
  {
    info('update');
    info($id);
  }
}
