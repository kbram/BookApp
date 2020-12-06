<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight pt-2">
                {{ __('Payment') }}
            </h1>
            </div>
            <div class="col">
                <a href="/payment" type="button" class="btn btn-outline-secondary shadow rounded pull-right" >Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                
                <div class="row p-2" id="createBook">

                    <div class="card-body">
                        {!! Form::open(array('route' => 'payments.store', 'method' => 'POST', 'class' => 'needs-validation', 'enctype'=>'multipart/form-data')) !!}
                            {!! csrf_field() !!}
                            <div class="form-group has-feedback row {{ $errors->has('payment_date') ? ' has-error ' : '' }}">
                                {!! Form::label('payment_date','Payment Date', array('class' => 'col-md-3 control-label')); !!}
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <!-- {!! Form::date('payment_date',NULL, array('id' => 'payment_date', 'class' => 'form-control', 'placeholder' => 'Payment Date')) !!} -->
                                        <input type="datetime-local" id="payment_date" name="payment_date" class="form-control">
                                    </div>
                                    @if ($errors->has('payment_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('payment_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br/>
                            <div class="form-group has-feedback row {{ $errors->has('book_id') ? ' has-error ' : '' }}">
                                {!! Form::label('book_id', 'Book Name', array('class' => 'col-md-3 control-label')); !!}
                                
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="book_id" id="book_id" for="book_id">
                                            <option disabled selected>Book Name</option>
                                            @foreach($books as $book)
                                                @if(old('book_id')==$book->id)
                                                    <option value="{{ $book->id }}" selected>{{ $book->book_name }}</option>
                                                @else
                                                    <option value="{{ $book->id }}">{{ $book->book_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('book_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br/>
                            <div class="form-group has-feedback row {{ $errors->has('amount') ? ' has-error ' : '' }}">
                                {!! Form::label('amount','Recived Amount', array('class' => 'col-md-3 control-label')); !!}
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::number('amount','NULL', array('id' => 'amount', 'class' => 'form-control', 'placeholder' => 'Recived Amount')) !!}

                                    </div>
                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br/>
                            <div id="count" class="form-group has-feedback row  {{ $errors->has('count') ? ' has-error ' : '' }}">
                                {!! Form::label('count','Count', array('class' => 'col-md-3 control-label' )); !!}
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::number('count','1', array('id' => 'count', 'class' => 'form-control','min'=>'0')) !!}

                                    </div>
                                    @if ($errors->has('count'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('count') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br/>
                            <div class="form-group has-feedback row {{ $errors->has('checkpay') ? ' has-error ' : '' }}">
                                {!! Form::label('checkpay', '', array('class' => 'col-md-3 control-label')); !!}
                                    <div class="col-md-4 ">
                                    @if(old('checkpay')==1)
                                    <input name="checkpay" checked id="checkpay" type="checkbox" data-toggle="toggle" data-onstyle="outline-dark" data-offstyle="outline-dark" data-on="Manual" data-off="Default"  >
                                    @else
                                    <input name="checkpay" id="checkpay" type="checkbox" data-toggle="toggle" data-onstyle="outline-dark" data-offstyle="outline-dark" data-on="Manual" data-off="Default" >
                                    @endif
                                    </div>
                                        @if ($errors->has('checkpay'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('checkpay') }}</strong>
                                            </span>
                                        @endif
                            </div>
                            <br/>
                            <div id="payPercentage" class="form-group has-feedback row  {{ $errors->has('payment_percentage') ? ' has-error ' : '' }}">
                                {!! Form::label('payment_percentage','Payment Percentage', array('class' => 'col-md-3 control-label' )); !!}
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::number('payment_percentage','5', array('id' => 'payment_percentage', 'class' => 'form-control','readonly' => 'true','max'=>'100','min'=>'0')) !!}

                                    </div>
                                    @if ($errors->has('payment_percentage'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('payment_percentage') }}</strong>
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
