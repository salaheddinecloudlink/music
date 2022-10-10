@extends('layouts.main_admin')

@section('content')
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-xs-12">
                    <h4 class="page-title">General</h4>
                </div>
            </div>

            <div class="dashoard-container">
                <div class="white-box p-0">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 content-summery">
                            <div class="d-flex align-items-center">
                                <div class="dash-summery bg-primary d-flex align-items-center justify-content-center">
                                    <i class="ti-video-camera"></i>
                                </div>
                                <div>
                                    <p class="mb-0">Total Viedos Uploaded</p>
                                    <h1 class="dash-summery-heading m-b-0 m-t-0">3645</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 content-summery">
                            <div class="d-flex align-items-center">
                                <div class="dash-summery bg-success d-flex align-items-center justify-content-center">
                                    <i class="ti-music-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0">Total Musics Uploaded</p>
                                    <h1 class="dash-summery-heading m-b-0 m-t-0">4012</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 content-summery">
                            <div class="d-flex align-items-center">
                                <div class="dash-summery bg-dark d-flex align-items-center justify-content-center">
                                    <i class="ti-image"></i>
                                </div>
                                <div>
                                    <p class="mb-0">Total Albums Uploaded</p>
                                    <h1 class="dash-summery-heading m-b-0 m-t-0">6030</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="white-box">
                            <div class="chart-heading m-b-20">
                                <div>
                                    <h4 class="dash-heading m-t-0">Artist subscription</h4>
                                    <p class="dash-subheading mb-0">Subscription overview of artist</p>
                                </div>

                                <select class="custome_txt p-1 dash-select">
                                    <option selected="">Yearly</option>
                                    <option>Monthly</option>
                                </select>
                            </div>

                            <div id="artist"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="white-box">
                            <div class="chart-heading m-b-20">
                                <div>
                                    <h4 class="dash-heading m-t-0">Advertiser Subscription</h4>
                                    <p class="dash-subheading mb-0">Subscription overview of advertiser</p>
                                </div>

                                <select class="custome_txt p-1 dash-select">
                                    <option selected="">Yearly</option>
                                    <option>Monthly</option>
                                </select>
                            </div>

                            <div id="advertiser"></div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="white-box">
                            <div>
                                <div>
                                    <h4 class="dash-heading m-t-0 m-b-40">To Do List</h4>
                                </div>
                                <!-- ============================================================== -->
                                <!-- To do list widgets -->
                                <!-- ============================================================== -->
                                <div class="to-do-widget m-t-20" id="todo">

                                    <!-- /.modal -->
                                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                        <li class="list-group-item p-0" data-role="task">
                                            <div class="custom-control p-l-0 custom-checkbox w-100">
                                                <input type="checkbox" class="m-r-10" id="customCheck">
                                                <label class="custom-control-label w-100" for="customCheck">
                                                    <span>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry.</span> <span
                                                        class="badge badge-pill badge-danger float-right">Today</span>
                                                </label>
                                            </div>
                                            <ul class="assignedto d-flex m-l-20">
                                                <li class="m-r-5"><img src="../plugins/images/users/1.jpg" width="40"
                                                        height="40" class="rounded-circle" alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Steave"></li>
                                                <li class="m-r-5"><img src="../plugins/images/users/2.jpg" width="40"
                                                        height="40" class="rounded-circle" alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Jessica"></li>
                                                <li class="m-r-5"><img src="../plugins/images/users/3.jpg" width="40"
                                                        height="40" class="rounded-circle" alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Priyanka"></li>
                                            </ul>
                                        </li>

                                        <li class="list-group-item p-0 m-t-30" data-role="task">
                                            <div class="custom-control p-l-0 custom-checkbox w-100">
                                                <input type="checkbox" class="m-r-10" id="customCheck2">
                                                <label class="custom-control-label w-100" for="customCheck2">
                                                    <span>Lorem Ipsum is simply dummy text of the
                                                        printing</span><span
                                                        class="badge badge-pill badge-primary pull-right">1
                                                        week </span>
                                                </label>
                                            </div>
                                            <div class="item-date m-l-20"> 26 jun 2017</div>
                                        </li>

                                        <li class="list-group-item p-0 m-t-30" data-role="task">
                                            <div class="custom-control p-l-0 custom-checkbox w-100">
                                                <input type="checkbox" class="m-r-10" id="customCheck3">
                                                <label class="custom-control-label w-100" for="customCheck3">
                                                    <span>Give Purchase report to</span> <span
                                                        class="badge badge-pill badge-info pull-right">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="assignedto d-flex m-l-20">
                                                <li class="m-r-5"><img src="../plugins/images/users/2.jpg"
                                                        width="40" height="40" class="rounded-circle"
                                                        alt="user" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Jessica"></li>
                                                <li class="m-r-5"><img src="../plugins/images/users/4.jpg"
                                                        width="40" height="40" class="rounded-circle"
                                                        alt="user" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Priyanka"></li>
                                            </ul>
                                        </li>

                                        <li class="list-group-item p-0 m-t-30" data-role="task">
                                            <div class="custom-control p-l-0 custom-checkbox w-100">
                                                <input type="checkbox" class="m-r-10" id="customCheck4">
                                                <label class="custom-control-label w-100" for="customCheck4">
                                                    <span>Lorem Ipsum is simply dummy text of the
                                                        printing</span><span
                                                        class="badge badge-pill badge-warning pull-right">2
                                                        week </span>
                                                </label>
                                            </div>
                                            <div class="item-date m-l-20"> 26 jun 2017</div>
                                        </li>

                                        <li class="list-group-item p-0 m-t-30" data-role="task">
                                            <div class="custom-control p-l-0 custom-checkbox w-100">
                                                <input type="checkbox" class="m-r-10" id="customCheck5">
                                                <label class="custom-control-label w-100" for="customCheck5">
                                                    <span>Give Purchase report to</span> <span
                                                        class="badge badge-pill badge-danger pull-right">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="assignedto d-flex m-l-20">
                                                <li class="m-r-5"><img src="../plugins/images/users/1.jpg"
                                                        width="40" height="40" class="rounded-circle"
                                                        alt="user" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Jessica"></li>
                                                <li class="m-r-5"><img src="../plugins/images/users/6.jpg"
                                                        width="40" height="40" class="rounded-circle"
                                                        alt="user" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Priyanka"></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="white-box">
                            <h4 class="dash-heading m-t-0 m-b-40">Giving access</h4>
                            <div class="table-responsive" id="history">
                                <table class="table text-nowrap vertical-align-middle">
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Email</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="../plugins/images/users/1.jpg" width="40" height="40"
                                                    class="rounded-circle m-r-5" alt="user">
                                                <span class="font-medium">Steve Gection</span>
                                            </td>
                                            <td>stevugection@gmail.com</td>
                                            <td>
                                                <select class="custome_txt p-1 dash-select">
                                                    <option value="1" selected>Subscriber</option>
                                                    <option value="2">Manager</option>
                                                    <option value="2">Admin</option>
                                                    <option value="2">Content Writer</option>
                                                    <option value="2">Project Editor</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../plugins/images/users/7.jpg" width="40" height="40"
                                                    class="rounded-circle m-r-5" alt="user">
                                                <span class="font-medium">Kali Charan</span>
                                            </td>
                                            <td>kaliabhai@gmail.com</td>
                                            <td>
                                                <select class="custome_txt p-1 dash-select">
                                                    <option value="1">Subscriber</option>
                                                    <option value="2" selected>Manager</option>
                                                    <option value="2">Admin</option>
                                                    <option value="2">Content Writer</option>
                                                    <option value="2">Project Editor</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../plugins/images/users/3.jpg" width="40" height="40"
                                                    class="rounded-circle m-r-5" alt="user">
                                                <span class="font-medium">Laxmi Shah</span>
                                            </td>
                                            <td>lxishah@gmail.com</td>
                                            <td>
                                                <select class="custome_txt p-1 dash-select">
                                                    <option value="1">Subscriber</option>
                                                    <option value="2">Manager</option>
                                                    <option value="2" selected>Admin</option>
                                                    <option value="2">Content Writer</option>
                                                    <option value="2">Project Editor</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../plugins/images/users/6.jpg" width="40" height="40"
                                                    class="rounded-circle m-r-5" alt="user">
                                                <span class="font-medium">JahaPanna</span>
                                            </td>
                                            <td>jahapanna55@gmail.com</td>
                                            <td>
                                                <select class="custome_txt p-1 dash-select">
                                                    <option value="1">Subscriber</option>
                                                    <option value="2">Manager</option>
                                                    <option value="2">Admin</option>
                                                    <option value="2" selected>Content Writer</option>
                                                    <option value="2">Project Editor</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../plugins/images/users/5.jpg" width="40" height="40"
                                                    class="rounded-circle m-r-5" alt="user">
                                                <span class="font-medium">Pappu Bhai</span>
                                            </td>
                                            <td>pappudon@gmail.com</td>
                                            <td>
                                                <select class="custome_txt p-1 dash-select">
                                                    <option value="1">Subscriber</option>
                                                    <option value="2">Manager</option>
                                                    <option value="2">Admin</option>
                                                    <option value="2">Content Writer</option>
                                                    <option value="2" selected>Project Editor</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
