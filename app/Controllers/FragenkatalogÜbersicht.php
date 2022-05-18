<?php
namespace App\Controllers;
use App\Models\FragenkatalogModel;

class FragenkatalogÜbersicht extends BaseController
{
    public function index()
    {
        {
            $model = new FragenkatalogModel();

            $data = [
                'katalog' => $model->getKatalog(),
            ];
            $this->template('FragenkatalogÜbersicht', $data);


        }
    }
}