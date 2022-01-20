<?php

namespace App\Http\Controllers;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\FormsRequest;
include("process.php");
class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()){
        $id = \Auth::user()->id;
        $formularz=Form::where('user_id', $id)->first();


        if ($formularz != "")
        {
            $form = Form::where('user_id',$id)->get();
            return view('formsview', compact('form'));
        }
        else
            return view ('formsisnull');
        }
        
        else
             return view('welcome');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormsRequest $request)
    {
        if (\Auth::user()==null){
            return view ('welcome');
        }
        $name = $_POST['imie'];
        $form=new Form();
        $form->user_id = \Auth::user()->id; 
        $form->wiadomosc = $request->wiadomosc;
        if ($form->save()){
            wyslij_email();
        }
        return "Wystąpił błąd.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
