@extends('layouts.app')

@section('title')
    Scratch Cards | Create
@endsection

@section('content')
    <div class="container single-container">
        <form action="{{url('/scratch-card/add/new/'.$bid->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Create New</h3>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label for="" class="col-3">Name:</label>
                        <div class="col-9">
                            <input type="text" name="name" class="form-control form-control-sm">
                            {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-3">Amount:</label>
                        <div class="col-9">
                            <input type="number" min="0" value="0" name="amount" class="form-control form-control-sm" required>
                            {!! $errors->first('amount', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label for="" class="col-3">Image:</label>
                        <div class="col-9">
                            <input type="file" name="image" class="form-control-file form-control-sm">
                            {!! $errors->first('image', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-3">Status:</label>
                        <div class="col-9">
                            <select name="status" id="" class="form-control form-control-sm">
                                <option value="1">Unscratched</option>
                                <option value="0">Scratched</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <hr>
                    <button type="button" id="clearInputs" class="btn btn-sm btn-dark float-right">Clear</button>
                    <button type="submit" class="btn btn-sm btn-success mr-2 float-right">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection