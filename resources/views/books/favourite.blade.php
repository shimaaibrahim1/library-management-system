

@extends('layouts.librarylayout')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="showCards">
    @foreach ( $books as $book )
    @if(in_array($book->id,$favourites))
    <div class="flex-card card">
        <div>
            <img src="{{url('uploads/'.$book->pic)}}" />
        </div>
        <!-- <form action="{{route('Favourite.store')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value={{$book->id}}>
            <input type="submit" value="ADD" class="btn btn-info"><br>
        </form>
        <form action="{{route('removeFav')}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value={{$book->id}}>
            <input type="submit" value="Delete" class="btn btn-info"><br>
        </form> -->

        <div class="card-body">
            <div>
                <img class="rank" src="/rankicon.png">
                <img class="rank" src="/rankicon.png">
                <img class="rank" src="/rankicon.png">
                <img class="rank" src="/rankicon.png">
                <img class="rank" src="/rankicon.png">
            </div>
              
        
            <p class="card-title">{{ $book->title }}</p>
            <p class="card-text">{{ $book->author }}</p>
            <p class="card-text">{{ $book->description }}</p>
            <p class="card-text">{{ $book->price }}</p>

            <span>{{ $book->quantity }} copies available</span>

           
        
            
      
              
           
                       
               
           
           
            
            <!-- @if(in_array($book->id,$favourites))
                <form action="{{route('removeFav')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value={{$book->id}}>
                    <input type="image" id="heart" src="/coloredheart.png"/>
                </form>
            @else
                <form action="{{route('Favourite.store')}}" method="POST">
                    @csrf
                    <input type="image" id="heart" src="/heart.png"/>
                    <input type="hidden" name="id" value={{$book->id}}>
                </form>
            @endif -->
            </div><br>
       
       <div class="card-footer">
           <button id="lease" class="btn btn-success btn-sm btn-block lease">Lease</button>
       </div>
   </div>
            @endif
            
       
    

    @endforeach
</div>          
                          
                        
                     
                     
                        

 @endsection