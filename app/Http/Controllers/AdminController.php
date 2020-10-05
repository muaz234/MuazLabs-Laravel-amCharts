<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spouse;
use App\Parents;
use App\Children;
class AdminController extends Controller
{
    //

    public function dt()
    {

        return view('pages.table');
    }

    public function dt_parents()
    {
        $parents = Parents::all();
        return response()->json(['data' => $parents]);
    }

    public function dt_children()
    {
        $children = Children::all();
        return response()->json(['data' => $children]);
    }

    public function dt_spouse()
    {
        $spouse = Spouse::all();
//        dd($spouse);
        return response()->json(['data' => $spouse]);
    }

    public function statistics()
    {
        $parents = Parents::all();
        $parentsCount = count($parents);
        $spouse = Spouse::all();
        $spouseCount = count($spouse);
        $children = Children::all();
        $childrenCount = count($children);
        $total = intval($parentsCount) + intval($spouseCount) + intval($childrenCount);
        return view('pages.dashboard', ['parentsCount' => $parentsCount, 'spouseCount' =>  $spouseCount, 'childrenCount' => $childrenCount, 'totalCount' => $total]);
    }

    public function childData()
    {
        $parents = Parents::all();
        $result = array();
        foreach($parents as $parent)
        {
            $num_of_child = $parent->children()->get();
            $result[] = array('siblings' => $parent->name, 'total' => count($num_of_child));
        }
        return response()->json($result);
    }

    public function forceDirected()
    {
        $parents = Parents::all();
        $data = array();
        $children = array();
        foreach ($parents as $key=>$parent)
        {
            $parents_children = $parent->children()->get();
//            dd($child);
            foreach ($parents_children as $child)
            {

                $children[] =  ['name' => $child->name, 'value' => $child->age];

            }
            $data[] = array('name' => $parent->name, 'children' => $children);
            $children = array();

        }
        return response()->json($data);
    }
}
