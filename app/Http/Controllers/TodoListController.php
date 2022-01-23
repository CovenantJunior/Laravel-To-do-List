<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function index()
    {
        return view('welcome', ['listItems' => listItem::all()]);
    }

    public function save(Request $request)
    {
        //return dd($request->all());  
        \Log::info(json_encode($request->all()));
        //Check if list is null or empty
        if (($request->listItem == null)||($request->listItem == "")) {
            //return redirect('/');
            return json_encode([
                "msg"  => "<p>Data is empty</p>\n",
                "flag" => 0
            ]);
            exit();
        }
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return json_encode([
            "msg"  => "<p><b>$request->listItem</b> added successfull</p>\n",
            "id"   => $newListItem->id,
            "flag" => 1
        ]);

        //Return Values
        //return view('welcome', ['listItems' => listItem::all()]);

        //In order to prevent issues in resubmission on page refresh
        //return redirect('/');
    }
 
    public function completed($id)
    {
        //return dd($request->all());  
        \Log::info($id);
        $listItem = ListItem::find($id);
        if ($listItem->is_complete == 1) {
            $listItem->is_complete = 0;
            $listItem->save();
            \Log::info($listItem);
            return json_encode([
                "msg"  => "<p><b>$listItem->name</b> reactivated successfully</p>\n",
                "flag" => 1
            ]);
        }
        else{
            $listItem->is_complete = 1;
            $listItem->save();
            \Log::info($listItem);
            return json_encode([
                "msg"  => "<p><b>$listItem->name</b> deactivated successfully</p>\n",
                "flag" => 1
            ]);
        }
        
        //In order to prevent issues in resubmission on page refresh
        //return redirect('/');
    }

    public function delete($id)
    {
        //return dd($request->all());  
        \Log::info($id);
        $listItem = ListItem::find($id);
        $listItem->delete($listItem);
        \Log::info($listItem);
        return json_encode([
            "msg"  => "<p><b>$listItem->name</b> deleted successfully</p>\n",
            "flag" => 1
        ]);
        //In order to prevent issues in resubmission on page refresh
        //return redirect('/');
    }
    
}