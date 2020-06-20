<?php

namespace Modules\FamilyMin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\FamilyMin\Entities\FamilyMin;
use Modules\FamilyMin\Http\Requests\FamilyMinRequest;

class FamilyMinController extends Controller
{

    public function update(FamilyMinRequest $request, FamilyMin $family_min)
    {
        $family_min->updateMinQty($request->min_qty);
        return back()->with('success', 'Quantidade Mínima por Família de Produto Atualizado.');
    }

}
