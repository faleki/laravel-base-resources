<?php

namespace App\Http\Controllers\Hooks;

trait Show
{
  public function show($id)
  {
    info('show');
    info($id);
  }
}
