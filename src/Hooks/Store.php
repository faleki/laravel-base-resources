<?php

namespace App\Http\Controllers\Hooks;

use Illuminate\Http\Request;

trait Store
{
  public function store(Request $request)
  {
    info('store');
  }
}
