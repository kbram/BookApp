<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight pt-2">
                {{ __('Books') }}
            </h1>
            </div>
            <div class="col">
                <button type="button" class="btn btn-outline-success shadow rounded pull-right">New Book</button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="row p-2">
                    <div class="column p-4">
                        <div class="card">
                            <img src="images/preview/1.jpg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div>
                    <div class="column p-4">
                        <div class="card">
                            <img src="images/preview/2.jpeg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/3.png" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/4.jpg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/5.jpeg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/6.jpg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/7.jpg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/8.jpg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/10.jpeg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div><div class="column p-4">
                        <div class="card">
                            <img src="images/preview/11.jpg" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>John Doe</b></h4> 
                                <p>Architect & Engineer</p> 
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- <x-jet-welcome /> -->
            </div>
        </div>
    </div>
</x-app-layout>
