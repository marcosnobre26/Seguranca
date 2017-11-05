<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests;
use Storage;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function up()
    {
        return view('upload');
        //echo 3;
    }

    public function upload(Request $request)
    {

        /*
        * O campo do form com o arquivo tinha o atributo name="file".
        */
        $file = $request->file('file');

        if (empty($file)) {
            abort(400, 'Nenhum arquivo foi enviado.');
        }
        $extensao=$nomeArquivo= Input::file('file')->getClientOriginalExtension();

        $nomeArquivo= Input::file('file')->getClientOriginalName();
        
        $hash=base64_encode($nomeArquivo);
        
        $nome="{$hash}.{$extensao}";
        //echo $nome;
        //$path = $file->storeAs('uploads',$nome);


        $file=Storage::disk('upload')->get($nome);

        echo $file=Input::file('file')->getClientOriginalExtension();









        //$path = $file->store('uploads',$nome);





        //return Input::file('file')->getFilename();



        //dd($file);
        //echo ($request->file->move(public_path('images'), $imageName););

        //$path = $file->store('uploads');

        // Faça qualquer coisa com o arquivo enviado...

    }
}
