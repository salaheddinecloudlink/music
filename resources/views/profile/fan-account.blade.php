@extends('layouts.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-xs-12">
                    <h4 class="page-title">Activities</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="max-width-auto" style="max-width: 1100px;">
                            <div class="d-flex align-items-center justify-content-center">
                                <ul class="nav m-t-0 nav-tabs nav-justified my_tab my_tab2" role="tablist">
                                    <li role="presentation" class="nav-item active">
                                        <a href="#history" style="margin-bottom: 0 !important;" class="nav-link"
                                            aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span
                                                class="visible-xs"><i class="fa fa-archive"></i></span><span
                                                class="hidden-xs">
                                                Email Notification</span></a>
                                    </li>
                                    <li role="presentation" class="nav-item">
                                        <a href="#upgrade" style="margin-bottom: 0 !important;" class="nav-link"
                                            aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span
                                                class="visible-xs"><i class="fa fa-lock"></i></span><span
                                                class="hidden-xs">
                                                Change Password</span></a>
                                    </li>
                                    <li role="presentation" class="nav-item">
                                        <a href="#payment" style="margin-bottom: 0 !important;" class="nav-link"
                                            aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span
                                                class="visible-xs"><i class="fa fa-times"></i></span><span
                                                class="hidden-xs">
                                                Delete Account</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active p-b-40" id="history">
                                    <div class="table-responsive m-b-10">
                                        <table class="table table-bordered text-nowrap align-middle">
                                            <tbody>
                                                <tr>
                                                    <td>Email About Videos Posted by Artist your Follow</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes" name="chkPassPort" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo" name="chkPassPort"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Email About Music Posted by Artist your Follow</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes2" name="chkPassPort2" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo2" name="chkPassPort2"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Email About News Posted by Artist your Follow</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes3" name="chkPassPort3" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo3" name="chkPassPort3"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Reminder Emails</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes4" name="chkPassPort4" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo4" name="chkPassPort4"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Get notifications you may have missed.</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes5" name="chkPassPort5" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo5" name="chkPassPort5"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Promotion Emails</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes6" name="chkPassPort6" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo6" name="chkPassPort6"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Get tips about Uruploadz”s Tools.</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes7" name="chkPassPort7" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo7" name="chkPassPort7"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>News Emails</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes8" name="chkPassPort8" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo8" name="chkPassPort8"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Learn about new Features on Uruploadz</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes9" name="chkPassPort9" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo9" name="chkPassPort9"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Get Reminders about your favorite Artist Activities.</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes0" name="chkPassPort0" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo0" name="chkPassPort0"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Learn about new Features on Uruploadz</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes11" name="chkPassPort11" checked>
                                                            Yes
                                                            <input type="radio" id="chkNo11" name="chkPassPort11"
                                                                class="m-l-10">
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pause All</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="radio" id="chkYes12" name="chkPassPort12">
                                                            Yes
                                                            <input type="radio" id="chkNo12" name="chkPassPort12"
                                                                class="m-l-10" checked>
                                                            No
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <div class="pull-right">
                                            <button class="btn btn-success">Update</button>
                                            <button class="btn btn-dark">Cancel</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="upgrade">
                                    <form class="form-material form-horizontal">

                                        <div class="d-flex justify-content-center">
                                            <div class="password-form">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="col-md-12" for="example-text">Old Password
                                                                <span class="text-danger">*</span></label>
                                                            <div class="col-md-12">
                                                                <input type="text" required="" id="example-text"
                                                                    name="example-text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="col-md-12" for="example-text">New Password
                                                                <span class="text-danger">*</span></label>
                                                            <div class="col-md-12">
                                                                <input type="text" required="" id="example-text"
                                                                    name="example-text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="col-md-12" for="example-text">Confirm
                                                                Password <span class="text-danger">*</span></label>
                                                            <div class="col-md-12">
                                                                <input type="text" required="" id="example-text"
                                                                    name="example-text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success save-btn waves-effect waves-light m-r-10">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="payment">
                                    <div class="row justify-content-center m-b-20">
                                        <div class="col-lg-9 col-md-10 col-sm-12">
                                            <div class="card" style="background: #f7fafc;">
                                                <div class="card-body p-5">
                                                    <div
                                                        class="free-package m-b-20 align-items-center justify-content-between">
                                                        <div>
                                                            <h2 class="font-bold m-t-0 m-b-0 ">Are you sure you want
                                                                to delete your account ?
                                                            </h2>
                                                        </div>

                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Quidem rerum consectetur nihil beatae quo dolores mollitia
                                                        quos tempore, architecto enim at neque officia.
                                                    </p>
                                                    <div class="m-t-30">
                                                        <a href="#upgrade" class="btn btn-inverse">Delete
                                                            Account</a>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
