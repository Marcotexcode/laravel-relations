@extends('layouts.app')

@section('content')
    
    <div class="container">

        <h2>Dettagli prodotto</h2>

        <div class="card">
           
            <div class="card-header">
           
                {{$post->title}}
           
            </div>
           
            <div class="card-body">
           
                <h2 class="card-title"> {{$post->slug}} </h2>

                <h3 class="card-title"> 
                    
                    @if ($post->category)
                            
                        Categoria: {{ $post->category->name }} 
                        
                    @else

                        Categoria: Nessuna categoria
                        
                    @endif
                
                </h3>
           
                <p class="card-text"> {{$post->content}} </p>
                      
            </div>
          
        </div>

        <div> 

            <a href=" {{ route('admin.posts.index') }} " class=" mt-3 btn btn-primary">Torna indietro</a>

        </div>

    </div>

@endsection

