@extends('layouts.app')

@section('template_title')
    {{ $property->name ?? "{{ __('Show') Property" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Property</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('properties.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Textproperties:</strong>
                            {{ $property->textProperties }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $property->price }}
                        </div>
                        <div class="form-group">
                            <strong>Details:</strong>
                            {{ $property->details }}
                        </div>
                        <div class="form-group">
                            <strong>Urlimage:</strong>
                            {{ $property->urlimage }}
                        </div>
                        <div class="form-group">
                            <strong>Viewproperties:</strong>
                            {{ $property->viewProperties }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
