<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index(){

        $books = Book::where('status',1)->get();
        return view('index',compact('books'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = $request->all();
        $book = Book::insertGetId([
            'title'=> $data['title'],
            'url'=>$data['url'],
        ]);

        return redirect()->route('index');
    }

    public function edit($id){

        $book = Book::find($id);
        return view('edit',compact('book'));  
    }

    public function update(Request $request , $id){
        $data = $request->all();
        $book = Book::where('id',$id)->update([
            'title'=> $data['title'],
            'url'=> $data['url'],
        ]);

        return redirect()->route('index');  

    }

    public function delete($id){
        $book = Book::where('id',$id)->update([
            'status'=>0,
        ]);
        return redirect()->route('index');
    }


}
