<x-layout>
<div class="main-wrapper">
   <x-header/>

   <x-setting-sidebar/>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Edit Role</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('roles.update', [$roleId->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        @error('roleName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label>Role Name <span class="text-danger">*</span></label>
                            <input name="roleName" class="form-control" value="{{ $roleId->roleName }}" type="text">
                        </div>
                        <div class="form-group">
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label class="display-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="role_active"
                                    value="active">
                                <label class="form-check-label" for="role_active">
                                    Active
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="role_inactive"
                                    value="inactive">
                                <label class="form-check-label" for="role_inactive">
                                    Inactive
                                </label>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>
