<?php

    namespace App\Http\Controllers;

    //use App\User;
    use App\Models\UserJob; // model locatede inside Models
    use Illuminate\Http\Response; // Response Components
    use App\Traits\ApiResponser;  // use to standardized our code for api response
    use Illuminate\Http\Request; // handling http request in lumen
    use DB; //if not using lumen eloquent

    Class UserJobController extends Controller {// use to add your Traits ApiResponser
        use ApiResponser;private $request;
        
        public function __construct(Request $request){
            $this->request = $request;
        }/**
        
        * Return the list of usersjob
        * @return Illuminate\Http\Response
        */

        public function index(){
            $usersjob = UserJob::all();
            return $this->successResponse($usersjob);    
        }/**     
        * Obtains and show one userjob     
        * @return Illuminate\Http\Response     
        */
        
        public function show($id){         
            $userjob = UserJob::findOrFail($id);         
            return $this->successResponse($userjob);       
        }
    }