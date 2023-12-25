<?php
namespace APP\HTTP\CONTROLLERS\ADMIN;//TODO: La carpeta donde está ese archivo
use Illuminate\Routing\Controller as BaseController;//TODO: PODR UTILIZAR LOS CONTROLADORES
class AdminController extends BaseController{
    public function index1(){
        return 'Este es el controller 1';
    }
    public function index2(){
        return 'Este es el controller 2';
    }
    public function index3(){
        return 'Este es el controller 3';
    }
}
?>
