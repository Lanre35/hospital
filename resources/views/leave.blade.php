<x-layout>
<div class="main-wrapper">
   <x-header/>

   <x-sidebar/>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-6">
                <h4 class="page-title">Leave Request</h4>
            </div>
            <div class="col-sm-4 col-6 text-right m-b-30">
                <a href="{{ route('leave.create') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add
                    Leave</a>
            </div>
        </div>
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <label class="focus-label">Employee Name</label>
                    <input type="text" class="form-control floating">
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus select-focus">
                    <label class="focus-label">Leave Type</label>
                    <select class="select floating">
                        <option> -- Select -- </option>
                        <option>Casual Leave</option>
                        <option>Medical Leave</option>
                        <option>Loss of Pay</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus select-focus">
                    <label class="focus-label">Leave Status</label>
                    <select class="select floating">
                        <option> -- Select -- </option>
                        <option> Pending </option>
                        <option> Approved </option>
                        <option> Rejected </option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <label class="focus-label">From</label>
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <label class="focus-label">To</label>
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <a href="#" class="btn btn-success btn-block"> Search </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Leave Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>No of Days</th>
                                <th>Reason</th>
                                <th class="text-center">Status</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="profile.html" class="avatar">R</a>
                                    <h2><a href="#">Albina Simonis <span>Nurse</span></a></h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>8 Aug 2018</td>
                                <td>8 Aug 2018</td>
                                <td>2 days</td>
                                <td>Family Function</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#"
                                            data-toggle="dropdown" aria-expanded="false">
                                            New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">New</a>
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Approved</a>
                                            <a class="dropdown-item" href="#">Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-leave.html"><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" title="Decline" data-toggle="modal"
                                                data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="profile.html" class="avatar">J</a>
                                    <h2><a> Cristina Groves <span>Doctor</span></a></h2>
                                </td>
                                <td>Medical Leave</td>
                                <td>13 Jul 2018</td>
                                <td>15 Jul 2018</td>
                                <td>3 days</td>
                                <td>Going to Vacation</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-green dropdown-toggle" href="#"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">New</a>
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Approved</a>
                                            <a class="dropdown-item" href="#">Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-leave.html"><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" title="Decline" data-toggle="modal"
                                                data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="profile.html" class="avatar">J</a>
                                    <h2><a>Mary Mericle <span>Accountant</span></a></h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>27 Jun 2018</td>
                                <td>28 Jun 2018</td>
                                <td>2 days</td>
                                <td>Going to Native Place</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-green dropdown-toggle" href="#"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">New</a>
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Approved</a>
                                            <a class="dropdown-item" href="#">Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-leave.html"><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" title="Decline" data-toggle="modal"
                                                data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="profile.html" class="avatar">H</a>
                                    <h2><a>Haylie Feeney <span>Laboratorist</span></a></h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>13 May 2018</td>
                                <td>13 May 2018</td>
                                <td>2 days</td>
                                <td>Not feeling well</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-red dropdown-toggle" href="#"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Declined
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">New</a>
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Approved</a>
                                            <a class="dropdown-item" href="#">Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-leave.html"><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" title="Decline" data-toggle="modal"
                                                data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="profile.html" class="avatar">R</a>
                                    <h2><a>Zoe Butler <span>Pharmacist</span></a></h2>
                                </td>
                                <td>Casual Leave</td>
                                <td>31 Mar 2018</td>
                                <td>31 Mar 2018</td>
                                <td>2 days</td>
                                <td>Birthday Function</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#"
                                            data-toggle="dropdown" aria-expanded="false">
                                            New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">New</a>
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Approved</a>
                                            <a class="dropdown-item" href="#">Declined</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-leave.html"><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" title="Decline" data-toggle="modal"
                                                data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="notification-box">
        <div class="msg-sidebar notifications msg-noti">
            <div class="topnav-dropdown-header">
                <span>Messages</span>
            </div>
            <div class="drop-scroll msg-list-scroll" id="msg_list">
                <ul class="list-box">
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Richard Miles </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item new-message">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">John Doe</span>
                                    <span class="message-time">1 Aug</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Tarah Shropshire </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Mike Litorus</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Catherine Manseau </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">D</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Domenic Houston </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">B</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Buster Wigton </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Rolland Webber </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Claire Mapes </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Melita Faucher</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Jeffery Lalor</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">L</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Loren Gatlin</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Tarah Shropshire</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="chat.html">See all messages</a>
            </div>
        </div>
    </div>
</div>
</div>
</x-layout>
