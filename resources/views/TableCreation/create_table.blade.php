<script src="{{ url('assets/js/validation.js') }}"></script>
@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
{!! Form::open(['url' => 'Tbl', 'class' => 'form-horizontal', 'id'=>'Tbl_Table']) !!}
<div class="container-fluid">
    <div class="container-fluid">
        <div class="col-sm-6">

            <div class='form-group'>
                {!! Form::label('name', 'Table No *', ['class' => 'col-sm-3 control-label']) !!}
                <div class='col-sm-8'>
                    {!! Form::text('name', null, ['class' => 'form-control input-sm required', 'placeholder'=>'Table No']) !!}
                </div>
            </div>

            <div class='form-group'>
                <div class='col-sm-offset-3 col-sm-8'>
                    {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
                </div>
            </div>
        </div>

    </div>
</div>
{!! Form::close() !!}
