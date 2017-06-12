<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function store(){
      $post=new Task;
      $post->Title=request('title');
      $post->Message=request('msg');
      $post->Type=request('type');
      $post->Count2=request('count');
      $post->Update=request('updatemsg');
      $post->Title2=request('title2');
      $post->Description=request('descrp');
      $post->ImageUrl=request('imageurl');
      $post->ImageText=request('imagetext');
      $post->Id2=request('id');
      $post->Link2=request('link');
      $post->save();
      return redirect('/send');

    }


}
