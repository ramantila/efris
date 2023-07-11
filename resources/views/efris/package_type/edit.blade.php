@extends('layouts.master')
@section('title')
    Package type
@endsection
@section('content')

<form action="{{ url('packages-type/update') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Full Name<span class="text-red">*</span></label>
                        <input id="title" type="text" class="form-control" placeholder="Package Name"
                        name="package"
                        required="">
                        <div class="help-block with-errors"></div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
@endsection
