@extends('layouts.app', [
    'title' => trans($name . '.index.title', ['name' => CampaignLocalization::getCampaign()->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => route($name . '.index'), 'label' => trans($name . '.index.title')]
    ]
])
@inject('campaign', 'App\Services\CampaignService')


@section('content')

    <div class="row margin-bottom">
        <div class="col-md-12">
            @include('layouts.datagrid.search', ['route' => route($name . '.index')])

            @can('create', $model)
                <a href="{{ route($name . '.create') }}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i> <span class="hidden-xs hidden-sm">{{ trans($name . '.index.add') }}</span>
                </a>
            @endcan
            @foreach ($actions as $action)
                @if (empty($action['policy']) || (Auth::check() && Auth::user()->can($action['policy'], $model)))
                    <a href="{{ $action['route'] }}" class="btn pull-right btn-{{ $action['class'] }} margin-r-5">
                        {!! $action['label'] !!}
                    </a>
                @endif
            @endforeach
        </div>
    </div>

    @include('partials.errors')
    {{--@include('cruds._filters', ['route' => route($name . '.index'), 'filters' => $filters, 'filterService' => $filterService, 'name' => $name])--}}

    <div class="box no-border">
        {!! Form::open(['url' => route('bulk.process'), 'method' => 'POST']) !!}
        <div class="box-body no-padding">
            @include($name . '.datagrid')
        </div>
        <div class="box-footer">

            @if (auth()->check())
                @can('delete', $model)
                {!! Form::button('<i class="fa fa-trash"></i> ' . trans('crud.remove'), ['type' => 'submit', 'name' => 'delete', 'class' => 'btn-crud-multi btn btn-danger', 'style' => 'display:none', 'id' => 'crud-multi-delete']) !!}
                @endcan
                {!! Form::button('<i class="fa fa-download"></i> ' . trans('crud.export'), ['type' => 'submit', 'name' => 'export', 'class' => 'btn-crud-multi btn btn-primary', 'style' => 'display:none', 'id' => 'crud-multi-export']) !!}
                @if (Auth::user()->isAdmin())
                    {!! Form::button('<i class="fa fa-lock"></i> ' . trans('crud.actions.private'), ['type' => 'submit', 'name' => 'private', 'class' => 'btn-crud-multi btn btn-primary', 'style' => 'display:none', 'id' => 'crud-multi-private']) !!}
                    {!! Form::button('<i class="fa fa-unlock"></i> ' . trans('crud.actions.public'), ['type' => 'submit', 'name' => 'public', 'class' => 'btn-crud-multi btn btn-primary', 'style' => 'display:none', 'id' => 'crud-multi-public']) !!}
                @endif
            @endif

            <div class="pull-right">
                {{ $models->links() }}
            </div>
            {!! Form::hidden('entity', $name) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
