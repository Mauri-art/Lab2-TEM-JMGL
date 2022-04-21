<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cod_product') }}
            {{ Form::text('cod_product', $producto->cod_product, ['class' => 'form-control' . ($errors->has('cod_product') ? ' is-invalid' : ''), 'placeholder' => 'Cod Product']) }}
            {!! $errors->first('cod_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nameProd') }}
            {{ Form::text('nameProd', $producto->nameProd, ['class' => 'form-control' . ($errors->has('nameProd') ? ' is-invalid' : ''), 'placeholder' => 'Nameprod']) }}
            {!! $errors->first('nameProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descProd') }}
            {{ Form::text('descProd', $producto->descProd, ['class' => 'form-control' . ($errors->has('descProd') ? ' is-invalid' : ''), 'placeholder' => 'Descprod']) }}
            {!! $errors->first('descProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('typeProd') }}
            {{ Form::text('typeProd', $producto->typeProd, ['class' => 'form-control' . ($errors->has('typeProd') ? ' is-invalid' : ''), 'placeholder' => 'Typeprod']) }}
            {!! $errors->first('typeProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costUnit') }}
            {{ Form::text('costUnit', $producto->costUnit, ['class' => 'form-control' . ($errors->has('costUnit') ? ' is-invalid' : ''), 'placeholder' => 'Costunit']) }}
            {!! $errors->first('costUnit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantExist') }}
            {{ Form::text('cantExist', $producto->cantExist, ['class' => 'form-control' . ($errors->has('cantExist') ? ' is-invalid' : ''), 'placeholder' => 'Cantexist']) }}
            {!! $errors->first('cantExist', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>