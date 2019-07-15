<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\EnvioEmail;
use Mail;
use Session;
use Redirect;
class UserController extends Controller
{

    public function index(){   
        return view('pages.home');
    }
    public function pagina1(){
        return view('pages.quienes-somos');
    }
    public function pagina2(){
        return view('pages.servicios');
    }
    public function pagina3(){
        $datos = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);  
        return view('pages.publicaciones', compact('datos'));
    }
    public function post($slug){
        $post = Post::where('slug',$slug)->first();
        return view('pages.post', compact('post'));
    }
    public function pagina4(){
        return view('pages.contacto');
    }
    public function mail(Request $request){
        $asunto = $request->input('asunto');
        Mail::send('mail.envioemail', $request->all(), function($mensaje){
  
           $mensaje->subject('Contacto desde pagina web');
           $mensaje->to('paola@colmenares.biz');
           $mensaje->cc('erika@colmenares.biz');
       });
       Session::flash('mensaje','Email enviado exitosamente ');
       return Redirect::to('/contacto');
  
     }
}
