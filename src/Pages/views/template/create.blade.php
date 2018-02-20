@extends("Jlib::layouts.dashboard")

@section('Title', _t("admin.create")." "._t("admin.$module"))

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="panel">
        <div class="panel-header">
            <i class="icon-check"></i>
            <h2>{{_t("admin.create")." "._t("admin.$module")}}</h2>
            <hr/>
        </div>
        <div class="panel-content">
            {!! Form::model($row,['url' => $scope.'/'.$module, 'method' => 'post','class'=>'form-horizontal style-form','enctype'=>'multipart/form-data'] ) !!}
            @include("pages::template.form")
            {!! Form::submit(__('admin.Save') ,['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop