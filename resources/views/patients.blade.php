<x-layout>
  <div class="main-wrapper">
        <x-header/>

        <x-sidebar/>

        <div class="page-wrapper">
            <div class="content">
                @if (session('success'))
                    <div class="alert alert-success">
                        <span class="text-center">{{ session('success') }}</span>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{ route('patients.create') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Age</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Email</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($patients as $patient)

                                        <tr>
                                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt="">{{ $patient->firstname }} {{ $patient->lastname }}</td>
                                            <td>{{ $patient->age }}</td>
                                            <td>{{ $patient->address }}</td>
                                            <td>{{ $patient->phone }}</td>
                                            <td>{{ $patient->email }}</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{ route('patients.edit', [$patient->id]) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="{{ route('patients.destroy', [$patient->id]) }}" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>

        </div>
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Patient?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <form action="{{ route('patients.destroy', [$patient->id]) }}" style="display: inline" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
						</div>
					</div>
				</div>
			</div>

		</div>
    </div>
</x-layout>
