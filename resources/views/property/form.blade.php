<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('textProperties') }}
            {{ Form::text('textProperties', $property->textProperties, ['class' => 'form-control' . ($errors->has('textProperties') ? ' is-invalid' : ''), 'placeholder' => 'Textproperties']) }}
            {!! $errors->first('textProperties', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $property->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('details') }}
            {{ Form::text('details', $property->details, ['class' => 'form-control' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => 'Details']) }}
            {!! $errors->first('details', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('urlimage') }}
            {{ Form::text('urlimage', $property->urlimage, ['class' => 'form-control' . ($errors->has('urlimage') ? ' is-invalid' : ''), 'placeholder' => 'Urlimage']) }}
            {!! $errors->first('urlimage', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('viewProperties') }}
            {{ Form::text('viewProperties', $property->viewProperties, ['class' => 'form-control' . ($errors->has('viewProperties') ? ' is-invalid' : ''), 'placeholder' => 'Viewproperties']) }}
            {!! $errors->first('viewProperties', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>