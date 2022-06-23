<?php
namespace App\Controllers;
use App\Models\FragenkatalogModel;
use CodeIgniter\Debug\Toolbar\Collectors\Database;

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
    public function del($fk) {
        $g=new FragenkatalogModel();

        $g->del($fk);
    }
}