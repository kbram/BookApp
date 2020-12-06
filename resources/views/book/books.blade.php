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
                    <div class="column p-4">
                        <div class="card">
                            <img src="images/preview/1.jpg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column p-4">
                        <div class="card">
                            <img src="images/preview/2.jpeg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/3.png" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/4.jpg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/5.jpeg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4 class="pb-2"><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/6.jpg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/7.jpg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/8.jpg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/10.jpeg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/11.jpg" alt="Avatar" style="width:100%">
                            <div class="container p-2">
                                <h4><b>John Doe</b></h4> 
                                <div class="row pb-2 pt-2">
                                    <div class="col-4 ">
                                        <button type="button" class="btn btn-warning btn-sm shadow rounded pull-left btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 center">
                                        <button type="button" class="btn btn-primary btn-sm shadow center btn-block"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-4 right">
                                        <button type="button" class="btn btn-danger btn-sm shadow rounded pull-right btn-block"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>  
                
                    
        
                <!-- <x-jet-welcome /> -->
            </div>
        </div>
    </div>
</x-app-layout>
