<?php

namespace App\Http\Controllers;

use App\Goal;
use App\Http\Requests\GoalRequest;

class GoalController extends Controller
{
    
    public function index(Goal $goal)
    {
        return view('top')->with(['goals' => $goal->get()]);
    }
    
    public function create(Goal $goal)
    {
        return view('main')->with(['goals' => $goal->get()]);
    }
    
    public function store(GoalRequest $request, Goal $goal)
    {
        $input = $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals/create');
    }
    
    public function show(Goal $goal)
    {
        return view('main')->with(['goal' => $goal]);
    }
    
    public function delete(Goal $goal)
    {
        $goal->delete();
        return redirect('/goals/create');
    }
}
?>