<div class="row mb-2">
        <div class="col-12">
            <!-- Circle Buttons -->
            <div class="card mb-4">
                <div class="card-body">
                        @if( Session::has('message_danger') )
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('flash_danger') }}</p>
                    @else
                    <form id="users-search" action="{{ route('users.index') }}" method="GET" class="form form-horizontal form-search">
                        <div class="row">
                            <div class="col-12 col-md-10">
                                <div class="row">
                                    <div class="col-6 col-md-6 mb-1">
                                        <div class="form-group">
                                            <label class="font-weight-bold">@lang('users.list.name')</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" class="form-control d-inline-flex" name="firstname"  value="{{ old('firstname', $request->firstname) }}">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" class="form-control d-inline-flex" name="lastname"  value="{{ old('lastname', $request->lastname) }}">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-1">
                                        <div class="form-group">
                                            <label class="font-weight-bold">@lang('users.list.gender')</label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="" selected>{{__('users.form.please_select') }}</option>
                                                @foreach ($genders as $key => $gender)
                                                <option value="{{$key}}" {{ old('agender', $request->gender) == $key ? 'selected' : '' }}>{{$gender}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-1">
                                        <div class="form-group">
                                            <label class="font-weight-bold">@lang('users.list.phone')</label>
                                            <input type="text" class="form-control" name="phone_number"  value="{{ old('phone_number', $request->phone_number) }}">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 mb-1">
                                            <div class="form-group">
                                                <label class="font-weight-bold">@lang('users.list.email')</label>
                                                <input type="text" class="form-control" name="email"  value="{{ old('email', $request->email) }}">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 d-flex align-items-end mb-1">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('button.search')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive cus-table">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center w-10">{{__('users.form.thumbnail')}}</th>
                                    <th>{{ __('users.list.name') }}</th>
                                    <th>{{ __('users.list.gender') }}</th>
                                    <th>{{ __('users.list.dob') }}</th>
                                    <th>{{ __('users.list.email') }}</th>
                                    <th>{{ __('users.list.phone') }}</th>
                                    <th>{{ __('users.list.address') }}</th>
                                    <th class="w-10">{{ __('users.list.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $suppliers as $users)
                                <tr>
                                    <td class="text-center d-flex justify-content-center align-items-center">
                                        <div class="crop-image d-flex justify-content-center align-items-center">
                                            <img class="thumbnail" src="{{$users->profile_image? getUploadUrl($users->profile_image, config('upload.users')) : asset('images/no-avatar.jpg') }}" />
                                        </div>
                                    </td>
                                    <td>{{ $users->firstname }} {{ $users->lastname }}</td>
                                    <td>{{ $users->getGender()}}</td>
                                    <td>{{ date('Y-m-d', strtotime($users->dob))}}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            <i class="fas fa-phone-square-alt text-success mr-1"></i>
                                        <div>
                                            {{ $users->phone1 }}<br/>
                                            {{ $users->phone2 ? $users->phone2: '' }}
                                        </div>
                                        </div>
                                    </td>
                                    <td>{{ str_limit($users->address, 30) }}</td>
                                    <td>
                                        <a class="btn) btn-sm btn-info btn-circle" 
                                            data-toggle="tooltip" 
                                            data-placement="top"
                                            data-original-title="{{__('button.show')}}"
                                            href="{{route('users.show', $users->id)}}"
                                        ><i class="far fa-eye"></i>
                                        </a>
                                        <a class="btn) btn-sm btn-warning btn-circle" 
                                            data-toggle="tooltip" 
                                            data-placement="top"
                                            data-original-title="{{__('button.edit')}}"
                                            href="{{route('users.edit', $users->id)}}"
                                        ><i class="far fa-edit"></i>
                                        </a>
                                        <button type="button"
                                            id="btn-deleted"
                                            class="btn btn-sm btn-danger btn-circle"
                                            onclick="deletePopup(this)"
                                            data-id="{{ $users->id }}"
                                            data-name="{{ $users->name}}"
                                            data-toggle="modal" data-target="#deletesupplier"
                                            title="{{__('button.delete')}}"
                                            ><i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $suppliers->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div><!--/row-->
    <!--Modal delete users-->
    <div class="modal fade" id="deletesupplier">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">       
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-trash"></i> {{__('users.confirm_delete')}}</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> 
            <!-- Modal body -->
            <div class="modal-body text-center">
                <div class="message">{{__('users.confirm_msg') }}</div>
                <div id="modal-name"></div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer d-flex justify-content-center">
                <form id="delete_supplier_form" action="{{route('users.destroy')}}" method="POST">
                    @csrf
                    <input type="hidden" type="form-control" name="supplier_id">
                    <button type="submit" class="btn btn-primary">{{__('button.ok')}}</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                        onclick="clearData()"
                    >{{__('button.close')}}</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    @push('footer-script')
    <script>
        function deletePopup(obj) {
            $('input[name="supplier_id"]').val($(obj).attr("data-id"));
            $("#modal-name" ).html($(obj).attr("data-name"));
        }
    
        function clearData() {
            $('input[name="supplier_id"]').val('');
            $("#modal-name" ).html('');
        }
    </script>
    @endpush