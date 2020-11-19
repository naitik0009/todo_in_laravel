<?php

namespace App\Http\Controllers;
use App\notes;
use Illuminate\Http\Request;

class welcome extends Controller
{
    //
    public function index(){
    	$datas = notes::all();
        $i=0;
    	return view('notes.index')->with('data',$datas);
    }
    public function upload(){
    	$data = request()->all();
    	$entry = new notes;
    	$entry->task = $data['task'];
    	$entry->des = $data['des'];
    	$entry->completion=false;
    	$entry->save();
        session()->flash('posted','your note has been created');
    	return redirect('/');
    }

    public function edit($ids){
    	$find = notes::find($ids);
    	
    	return view('notes.edit')->with('data',$find);
    	

    }
    public function update($id){
    	$entry = notes::find($id);
    	$data = request()->all();
    	$entry->task = $data['task'];
    	$entry->des = $data['des'];
    	$entry->completion=false;
    	$entry->save();
        session()->flash('update','your note has been updated');
    	return redirect('/');
    }

    public function delete($id){
    	$search = notes::find($id);
    	$search->delete();
        session()->flash('delete','your note has been deleted');
    	return redirect('/');
    }

    public function complete($id){
        $search = notes::find($id);
        $search->completion=true;
        $search->save();
        return redirect('/');
    }
}
