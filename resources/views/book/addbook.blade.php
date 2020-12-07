<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight pt-2"  style="text-shadow: 2px 2px rgb(110, 154, 204);font-weight:bold;font-family: monospace; -webkit-text-stroke: 0.4px #000;  color:white;font-size:20px;"  >
                {{ __('Books') }}
            </h1>
            </div>
            <div class="col">
            <a href="/books" type="button" class="btn btn-outline-light shadow rounded pull-right" id="newBook">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
            <h1 style="color: #000; font-family: 'Great Vibes', cursive; font-size: 45px; line-height: 60px; font-weight: normal;  text-align: center; text-shadow: 0 3px 2px #779ecb; ">Add Book</h1>
            
                <div class="row p-2" id="createBook">

                    <div class="card-body">
                        {!! Form::open(array('route' => 'books.store', 'method' => 'POST', 'class' => 'needs-validation', 'enctype'=>'multipart/form-data')) !!}
                            {!! csrf_field() !!}
                            <div class="form-group has-feedback row {{ $errors->has('book_name') ? ' has-error ' : '' }}">
                                {!! Form::label('book_name','Book Name', array('class' => 'col-md-3 control-label')); !!}
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('book_name',NULL, array('id' => 'book_name', 'class' => 'form-control', 'placeholder' => 'Book Name')) !!}

                                    </div>
                                    @if ($errors->has('book_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('book_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br/>
                            <div class="form-group has-feedback row {{ $errors->has('book_image') ? ' has-error ' : '' }}">
                                {!! Form::label('book_image','Book Image', array('class' => 'col-md-3 control-label')); !!}
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::file('book_image',NULL, array('id' => 'book_image', 'class' => 'form-control', 'placeholder' => 'Book Image')) !!}

                                    </div>
                                    @if ($errors->has('book_image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('book_image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br/>
                            <div class="form-group has-feedback row {{ $errors->has('book_cost') ? ' has-error ' : '' }}">
                                {!! Form::label('book_cost','Book Price', array('class' => 'col-md-3 control-label')); !!}
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::number('book_cost',NULL, array('id' => 'book_cost', 'class' => 'form-control', 'placeholder' => 'Book Price')) !!}

                                    </div>
                                    @if ($errors->has('book_cost'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('book_cost') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br/>
                            <div class="form-group has-feedback row {{ $errors->has('book_date') ? ' has-error ' : '' }}">
                                {!! Form::label('book_date','Date of Record', array('class' => 'col-md-3 control-label')); !!}
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::date('book_date',NULL, array('id' => 'book_date', 'class' => 'form-control', 'placeholder' => 'Date of Record')) !!}

                                    </div>
                                    @if ($errors->has('book_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('book_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br/>

                        {!! Form::button('Add', array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right btn-block col-2','type' => 'submit' )) !!}
                        {!! Form::close() !!}
         
                        </div>
                    </div>
                    
        
                <!-- <x-jet-welcome /> -->
            </div>
        </div>
    </div>
</x-app-layout>
