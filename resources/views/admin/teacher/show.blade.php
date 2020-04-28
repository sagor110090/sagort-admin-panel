@extends('layouts.app',['pageTitle' => __(' Teacher Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Teacher') }}
    @endslot
@endcomponent
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __(' Teacher') }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/teacher') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __(' Back') }}</button></a>
                        @if (Helper::authCheck('teacher-edit'))
                        <a href="{{ url('/admin/teacher/' . $teacher->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> {{ __('Edit') }}</button></a>
                        @endif

                        @if (Helper::authCheck('teacher-delete'))
                        <form method="POST" id="deleteButton{{$teacher->id}}" action="{{ url('admin/teacher' . '/' . $teacher->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="sweetalertDelete({{$teacher->id}})"><i class="fa fa-trash" aria-hidden="true"></i> {{ __('Delete') }}</button>
                        </form>
                        @endif
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $teacher->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $teacher->name }} </td></tr><tr><th> Address </th><td> {{ $teacher->address }} </td></tr><tr><th> Phone No </th><td> {{ $teacher->phone_no }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection