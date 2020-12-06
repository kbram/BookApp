<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight pt-2">
                {{ __('Books') }}
            </h1>
            </div>
            <div class="col">
                <a href="books/create" type="button" class="btn btn-outline-success shadow rounded pull-right" id="newBook">New Book</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="row p-2" id="showBook" style="">
                   
                    @foreach($books as $book)
                      
                    <div class="column p-4">
                        <div class="card">
                            <img src="images/{{$book->file_path}}" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h2><b>{{$book->book_name}}</b></h2> 
                                <p>{{$book->cost}} $</p> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-6">
                                    <a href="{{ URL::to('books/' . $book->id . '/edit') }}"  class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    </div>
                                   
                      
                                    <div class="col-6 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block btn-book"  id="{{$book->id}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>  
                
                    
        
                <!-- <x-jet-welcome /> -->
            </div>
        </div>
    </div>
</x-app-layout>
