<?php
namespace App\Controllers;
use App\Models\Frage;
use App\Models\FragenkatalogModel;

class Fragenkatalog extends BaseController
{
    public function index()
    {

        {
            $model = new FragenkatalogModel();

            $data = [
                'katalog'  => $model->getKatalog(),
            ];
            $this->template('FragenkatalogÜbersicht',$data);


        }
    }

    public function view($fragenkatalogbezeichnung = null)
    {
        $model = model(FragenkatalogModel::class);
        $fragemodel= model(Frage::class);

        $data['fragenkatalog'] = $model->getKatalog($fragenkatalogbezeichnung);
        $data['frage']=$fragemodel->getFrage($fragenkatalogbezeichnung);
        if (empty($data['fragenkatalog'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kann den Katalog: ' . $fragenkatalogbezeichnung .'nicht finden');
        }

        $data['title'] = ['fragenkatalogbezeichnung'];

       $this->template('Fragenkatalog',$data);
    }
}
