<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use app\Repositories\Interface\DefaultRepositoryInterface;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    protected $livroRepository;
    public function __construct(DefaultRepositoryInterface $livroRepository)
    {
        $this->livroRepository = $livroRepository;
    }

    public function index(){
        
        return view('site.livro.index');
    }
    
    public function store(Request $request){
        $client = new Livro();   
    
        $client->nome = $request->nome;
        $client->isbn = $request->isbn;
        $client->valor = $request->valor;

        $client->save();

        return redirect('index');
    }
}
