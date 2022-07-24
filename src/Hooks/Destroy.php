<?php

namespace App\Http\Controllers\Hooks;

trait Destroy
{
  public function destroy($id)
  {
    info('destroy');
    info($id);
  }
}
