<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sujith\PersonsModel;
use Response;

class ManageController extends Controller
{
    public function insertDashboard(Request $request){

    $name = 'Sujith';

    $all_data        = PersonsModel::all();

    return view('insert.dashboard')->with('sujith_data', $name)->with('all_data', $all_data);

    }

    public function insertData(Request $request){

    $person_data                    = new PersonsModel;
    $person_data->name              = $request->name;
    $person_data->age               = $request->age;
    $person_data->contact           = $request->contact;
    $person_data->note              = $request->note;
    $action                         = $person_data->save();

    if($action){

        return redirect()->back();

    }
    else{

        return "False";

    }

    }

    public function getMobileData(Request $request){

    $all_data = PersonsModel::all();
    return Response::Json($all_data);

    }
}
