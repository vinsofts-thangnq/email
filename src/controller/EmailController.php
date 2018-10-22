<?php

namespace Thangbeo\Email;
use App\Http\Controllers\Controller;
use Thangbeo\Email\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(){
        $data = Email::all();
        return view('email::list',compact('data'));
    }
    public function add(){
        return view('email::add',compact('data'));
    }

    public function store(Request $request){

        $data = new Email();
        $data->title = $request->title;
        $data->type = $request->type;
        $data->subject = $request->subject;
        $data->text = $request->text;
        $data->from_address = $request->from_address;
        $data->user_id = $request->user_id;
        $data->color = $request->color	;
        $data->save();
        return redirect('email');
    }
    public function edit($id){
        $data = Email::find($id);
        return view('email::edit',compact('data'));
    }

    public function update(Request $request,$id){
        $data= Email::find($request->id);
        $data->subject = $request->subject;
        $data->title = $request->title;
        $data->color = $request->color;
        $data->email_templates = $request->email_templates;
        $data->text = $request->text;
        $data->user_id = $request->user_id;
        $data->type = $request->type;
        $data->save();
        return redirect('email');

    }

    public function delete($id){
        $data = Email::destroy($id);
        return redirect('email');
    }

}
