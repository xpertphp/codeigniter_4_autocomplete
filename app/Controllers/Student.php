<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\StudentModel;
 
class Student extends Controller
{
 
	public function __construct()
    {
         helper(['form', 'url']);
    }
    public function index()
    {   
        return view('list');
    }
	
	function ajaxSearch(){
		$model = new StudentModel();
        $query=$model->like('first_name',$_REQUEST['query'])
                    ->select('id, first_name')
                    ->limit(10)->get();
		$data_result = $query->getResult();	
		$data = array();		
		foreach ($data_result as $row)
		{
			$data[] = $row->first_name;
		}		
        echo json_encode($data);
    }  
 
}

?>