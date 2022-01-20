<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersdataController extends Controller
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
            $users = User::where('id', $id)->get();
            return view('usersdata', compact('users'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(\Auth::check()){
        $id = \Auth::user()->id;
        $users = User::where('id', $id)->get();
        return view('dataupdate', compact('users'));
        }
        else
            return view('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if(\Auth::check()){
        $id = \Auth::user()->id;
        $users = User::find($id);
        if(Hash::check($request->actualpassword, $users->password))                 // wprowadzone aktualne hasło zgadza się z hasłem użytkownika               
        {
            
            if($request->newpassword==$request->newpasswordagain)                   // potwierdzenie nowego hasla jest takie samo jak nowe haslo
            {
                $users->password = Hash::make($request->newpassword);               // ustawienia nowego hasla uzytkownikowi
            }
            else 
                return view('errorpassword_2', compact('users'));                   // przejscie na stronę pokazującą nieprawidłowość podanych haseł
        
            if($users->save())                                                      // zapisanie zmian 
            { 
                return redirect()->route('dataupdate');                             
            }       
        }
        else 
            return view('errorpassword', compact('users'));
        }
        else
            return view('welcome');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(\Auth::check()){
        $id = \Auth::user()->id; 
        $users = User::find($id);
        if(Hash::check($request->password, $users->password))       // Jeśli zahaszowane hasła się zgadzają z podanym
        {
            $users->name = $request->name;                          // zmiana imienia i nazwiska
            $users->email = $request->email;                        // zmiana email
        
            if($users->save())                                      // zapisanie zmienionych danych
            { 
                return redirect()->route('dataupdate');             // przeniesienie do strony po zaktualizowaniu danych (metoda show, tego controllera)
            }
       
        }
        else 
            return view('errorpassword', compact('users'));         //
        }
        else
            return view('welcome');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        if(\Auth::check()){
        $id = \Auth::user()->id;
        $users = User::where('id',$id);
        $users->delete();
        return view('accountdestroy', compact('users'));
        }
        else
            return view('welcome');
    }
}
