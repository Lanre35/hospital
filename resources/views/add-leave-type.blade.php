<x-layout>
<div class="main-wrapper">
    <x-header/>

    <x-setting-sidebar/>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Leave Type</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('leave-type.store') }}" method="POST">
                        @csrf
                        @error('leaveType')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label>Leave Type <span class="text-danger">*</span></label>
                            <input name="leaveType" value="{{ old('leaveType') }}" class="form-control" type="text">
                        </div>
                        @error('numberOfDays')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label>Number of days <span class="text-danger">*</span></label>
                            <input name="numberOfDays" value="{{ old('numberOfDays') }}" class="form-control" type="text">
                        </div>
                        {{-- <input type="hidden" value="{{  }}"> --}}
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Add Leave Type</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>
