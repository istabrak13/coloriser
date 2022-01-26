<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Demande;
use App\Vihecule;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }

  

    
    public function parametre()
    {

    //if(User::where('id',auth()->id()))  {
        return view('client.parametre'
        ,[
            Auth::user()->role,
        
                'clients'=>User::where('id','=',auth()->id())->get()]); 
     // }
       
    }

    public function edit()
    {
        return view('client.edit_profil'); 
    }


    public function update(Request $request)
    {
  
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
          //$admin = User::findOrFail($request->user_id);

          $clients = Auth::user(); 
          $clients ->update($request->all());
          $clients->name = $request->get('name');
          $clients->email = $request->get('email');                                                                                  
         
    		


          $clients->save();
          

      
       return redirect()->route('parametre_client');
        

    }



    public function demandeid()
{
    return view('accueil.demandeid',compact('demande'));
}
       


public function store(Request $request)
{
        $demande= new Demande();
        $demande->societe_id=$request->input('societe_id');
        $demande->details=$request->input('details');
        $demande->date_dep=$request->input('date_dep');
        $demande->date_arrive=$request->input('date_arrive');
        $demande->ville_dep=$request->input('ville_dep');
        $demande->ville_arrive=$request->input('ville_arrive');
        $demande->user_id = Auth()->id();
        if( $demande->date_dep < $demande->date_arrive)
        {$demande->save();
        session()->flash('success','la demande est bien envoyer');}
        else{ session()->flash('echec','la date dep doit etre inferieur a date arrivé');}
         return back();
      

       
        }
        public function change()
        {
            return view('client.change_pws');
        }
        
        public function chkPassword(Request $request){
            $data=$request->all();
            $current_password=$data['pwd_current'];
            $email_login=Auth::user()->email;
            $check_pwd=User::where(['email'=>$email_login])->first();
            if(Hash::check($current_password,$check_pwd->password)){
                echo "true"; die();
            }else {
                echo "false"; die();
            }
        }
        public function updatClientPwd(Request $request){
            $data=$request->all();
            $current_password=$data['pwd_current'];
            $email_login=Auth::user()->email;
            $check_password=User::where(['email'=>$email_login])->first();
            if(Hash::check($current_password,$check_password->password)){
                $password=bcrypt($data['pwd_new']);
                User::where('email',$email_login)->update(['password'=>$password]);
                return redirect()->route('parametre_client')->with('message','mot de passe a ete changer');
            }else{
                return redirect()->route('parametre_client')->with('msg','Mot de passe actuel incorrect');
            }
        }
    


}