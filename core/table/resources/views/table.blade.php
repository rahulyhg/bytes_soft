@extends('core.base::layouts.master')
@section('content')
    <div class="table-wrapper">
        @if ($table->isHasFilter())
            <div class="table-configuration-wrap" @if (request()->has('filter_table_id')) style="display: block;" @endif>
                <span class="configuration-close-btn btn-show-table-options"><i class="fa fa-times"></i></span>
                {!! $table->renderFilter() !!}
            </div>
        @endif
        <div class="portlet light bordered portlet-no-padding">
            <div class="portlet-title">
                <div class="caption">
                    @if ($actions)
                        <div class="wrapper-action">
                            <div class="btn-group">
                                <a class="btn btn-default dropdown-toggle" href="#" data-toggle="dropdown">{{ trans('core.table::general.bulk_actions') }}
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($actions as $action)
                                        <li>
                                            {!! $action !!}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @if ($table->isHasFilter())
                                <button class="btn btn-primary btn-show-table-options">{{ trans('core.table::general.filters') }}</button>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    @section('main-table')
                        {!! $dataTable->table(compact('id', 'class'), false) !!}
                    @show
                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')
    {!! $dataTable->scripts() !!}
@stop