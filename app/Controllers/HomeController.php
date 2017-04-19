<?php
namespace App\Controllers;

/**
* 
*/
use Slim\Views\Twig as View;
class HomeController extends Controller
{
	private $name;
	private $email;
	private $phone;
	private $address;
	private $position;
	private $salary;
	private $skills;
	
	public function index($request,$response)
	{
		$data = file_get_contents(__DIR__."/empleados.json");
		$empleados = json_decode($data, true);
		return $this->container->view->render($response,'home.php',compact('empleados'));
	}
	public function detail($request,$response,$args)
	{
		$data = file_get_contents(__DIR__."/empleados.json");
		$empleados = json_decode($data, true);
		$id = $request->getAttribute('id');
		foreach ($empleados as $empleado) {
			if ($empleado['id']==$id) {
				$name=$empleado['name'];
				$email=$empleado['email'];
				$phone=$empleado['phone'];
				$address=$empleado['address'];
				$position=$empleado['position'];
				$salary=$empleado['salary'];
				$skills=$empleado['skills'];
				$ski=array();
				for ($i=0; $i < count($skills); $i++) { 
					$ski[$i]=$skills[$i]['skill'];
				}
				
			}
		}
		

		return $this->container->view->render($response,'detail.php',compact('name','email','email','phone','address','position','salary','ski'));
	}




	public function salary($request,$response,$args)
	{
		$minimo = $request->getAttribute('minimo');
		$maximo = $request->getAttribute('maximo');
		$empleadosFiltro=array();
		$empleadoFiltro=array();
		$j=0;
		$data = file_get_contents(__DIR__."/empleados.json");
		$empleados = json_decode($data, true);
		foreach ($empleados as $empleado) {
			$replace=array(",","$");
			$salario=str_replace($replace,"",$empleado['salary']);
			if (floatval($salario)>=floatval($minimo) && floatval($salario)<=floatval($maximo)) {
				$name=$empleado['name'];
				$email=$empleado['email'];
				$phone=$empleado['phone'];
				$address=$empleado['address'];
				$position=$empleado['position'];
				$salary= $salario;
				$skills=$empleado['skills'];
				$ski=array();
				for ($i=0; $i < count($skills); $i++) { 
					$ski[$i]=$skills[$i]['skill'];
				}
					$empleadoFiltro[0]=$name;
					$empleadoFiltro[1]=$email;
					$empleadoFiltro[2]=$phone;
					$empleadoFiltro[3]=$address;
					$empleadoFiltro[4]=$position;
					$empleadoFiltro[5]=$salary;
					$empleadoFiltro[6]=$ski;
					$empleadosFiltro[$j]=$empleado;
					$j++;
			}
		}


		
		return  json_encode($empleadosFiltro, true);
	}

}