<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Itemgroups;
use App\Models\Items;
use Illuminate\Support\Facades\DB; 
use Auth;
class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function logout()
    {
       Auth::logout();
       return redirect('login');
    }

    public function Update(Request $request)
    {

     
        $item=Itemgroups::find($request->id);
        
        $item->itemgroupsname=$request->namegroup;

        $item->save();
      
        return redirect('itemgroups');
    }

    public function DisplayItems()
    {
      $data=DB::table('itemgroups')
      ->join('items','itemgroups.id','=','items.itemgroupno')
      ->get();
      return view('dashboard.controlpanel',['data'=>$data]);
    }

   
    public function Displayadditemsgroup()
    {
      $data=Itemgroups::All();
      
      return view('dashboard.addgroupsitem',['data'=>$data]);
    }




    public function del($x)
    {
      $item=Itemgroups::find($x);
      
      $item->delete();

      return redirect('itemgroups');
    }

    public function Edit($x)
    {
      $item=Itemgroups::where('id',$x)
      ->first();
      return view('editgroupitem',['item'=>$item]);
    
    }
    public function GetItemGroup()
    {
      $data=Itemgroups::All();
       $issave=true;
      return view('itemgroups',['data'=>$data,'issave'=>$issave]);
    }


    public function SaveGroupsItems(Request $request)
    {
      
      $data=Itemgroups::create([
        'itemgroupsname'=>$request->itemgroupsname
      ]);

      $data->save();
     
      return redirect('addgritem');

    }
}

