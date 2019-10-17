@extends('layouts.master')
@section('title', __('users.form.title'))
@section('content')
<div id="users-list">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between border-bottom mb-5 pb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('dashboard.title') }}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('users.index') }}">
                        <span class="sub-title">{{ __('users.sub_title') }}</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="sub-title">{{  $users->lastname }} {{  $users->firstname }}</span>
                </li>
            </ol>
        </nav>
        <a href="{{route('users.index')}}" 
            class="btn btn-primary"
            data-toggle="tooltip" 
            data-placement="left" title="" 
            data-original-title="{{__('users.sub_title')}}"
        ><i class="fas fa-list"></i> {{__('users.sub_title')}}</a>
    </div>
    <div class="row mb-2">
        <div class="col-12 tab-card">
            <!-- Circle Buttons -->
            <div class="card mb-4">
                <div id="supplierList" class="card-body collapse show">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="addsupplier" class="tab-pane active">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="border-top-0">{{__('users.list.name')}}:</th>
                                        <td class="border-top-0">{{ $users->lastname }} {{ $users->firstname }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('users.list.gender')}}:</th>
                                        <td>{{ $users->getGender() }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('users.list.dob')}}:</th>
                                        <td>{{ date('Y-m-d', strtotime($users->dob)) }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('users.list.email')}}:</th>
                                        <td>{{ $users->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('users.list.phone')}}: </th>
                                        <td> 
                                            <div class="d-flex flex-row">
                                            <i class="fas fa-phone-square-alt text-success mr-1"></i>
                                            <div>
                                                {{ $users->phone1 }}<br/>
                                                {{ $users->phone2 ? $users->phone2: '' }}
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('users.list.address')}}:</th>
                                        <td>{{ $users->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('users.form.thumbnail')}}:</th>
                                        <td>
                                            <div class="w-50">
                                                <img class="img-thumbnail" src="{{$users->profile_image? getUploadUrl($users->profile_image, config('upload.users')) : asset('images/no-avatar.jpg') }}" />
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                              </table>
                            <div class="form-group w-50 d-inline-flex">
                                <a href="{{route('users.edit', $users->id)}}" class="btn btn-primary w-25 mr-2">{{__('button.edit')}}</a>
                                <a href="{{route('users.index')}}" class="btn btn-secondary w-25">{{__('button.return')}}</a>
                            </div>
                        </div><!--/tab-add-users-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/row-->
</div>
@endsection