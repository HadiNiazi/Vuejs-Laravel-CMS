@extends('layouts.master')
@section('content')

 <!-- Content -->
 <div class="container-fluid flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
      Dashboard
      <div class="text-muted text-tiny mt-1"><small class="font-weight-normal">Today is Tuesday, 8 February 2018</small></div>
    </h4>

    <!-- Counters -->
    <div class="row">
      <div class="col-sm-6 col-xl-3">

        <div class="card mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="lnr lnr-cart display-4 text-success"></div>
              <div class="ml-3">
                <div class="text-muted small">Monthly sales</div>
                <div class="text-large">2362</div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-6 col-xl-3">

        <div class="card mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="lnr lnr-earth display-4 text-info"></div>
              <div class="ml-3">
                <div class="text-muted small">Monthly visits</div>
                <div class="text-large">687,123</div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-6 col-xl-3">

        <div class="card mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="lnr lnr-gift display-4 text-danger"></div>
              <div class="ml-3">
                <div class="text-muted small">Products</div>
                <div class="text-large">985</div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-6 col-xl-3">

        <div class="card mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="lnr lnr-users display-4 text-warning"></div>
              <div class="ml-3">
                <div class="text-muted small">Users</div>
                <div class="text-large">105,652</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- / Counters -->

    <!-- Statistics -->
    <div class="card mb-4">
      <h6 class="card-header with-elements">
        <div class="card-header-title">Statistics</div>
        <div class="card-header-elements ml-auto">
          <label class="text m-0">
            <span class="text-light text-tiny font-weight-semibold align-middle">
              SHOW STATS
            </span>
            <span class="switcher switcher-sm d-inline-block align-middle mr-0 ml-2">
              <input type="checkbox" class="switcher-input" checked>
              <span class="switcher-indicator">
                <span class="switcher-yes"></span>
                <span class="switcher-no"></span>
              </span>
            </span>
          </label>
        </div>
      </h6>
      <div class="row no-gutters row-bordered">
        <div class="col-md-8 col-lg-12 col-xl-8">
          <div class="card-body">
            <div style="height: 210px;">
              <canvas id="statistics-chart-1"></canvas>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-12 col-xl-4">
          <div class="card-body">

            <!-- Numbers -->
            <div class="row">
              <div class="col-6 col-xl-5 text-muted mb-3">Total sales</div>
              <div class="col-6 col-xl-7 mb-3">
                <span class="text-big">10,332</span>
                <sup class="text-success">+12%</sup>
              </div>
              <div class="col-6 col-xl-5 text-muted mb-3">Income amount</div>
              <div class="col-6 col-xl-7 mb-3">
                <span class="text-big">$1,534</span>
                <sup class="text-danger">-5%</sup>
              </div>
              <div class="col-6 col-xl-5 text-muted mb-3">Total budget</div>
              <div class="col-6 col-xl-7 mb-3">
                <span class="text-big">$10,534</span>
                <sup class="text-success">+12%</sup>
              </div>
              <div class="col-6 col-xl-5 text-muted mb-3">Page views</div>
              <div class="col-6 col-xl-7 mb-3">
                <span class="text-big">21,332</span>
                <sup class="text-danger">-12%</sup>
              </div>
              <div class="col-6 col-xl-5 text-muted mb-3">Completed tasks</div>
              <div class="col-6 col-xl-7 mb-3">
                <span class="text-big">12</span>
                <sup class="text-success">+12%</sup>
              </div>
            </div>
            <!-- / Numbers -->

          </div>
        </div>
      </div>
    </div>
    <!-- / Statistics -->

    <div class="row">

      <!-- Charts -->
      <div class="col-sm-6 col-xl-4">

        <div class="card mb-4">
          <h6 class="card-header with-elements border-0 pr-0 pb-0">
            <div class="card-header-title">Sales</div>
            <div class="card-header-elements ml-auto">
              <div class="btn-group mr-3">
                <button type="button" class="btn btn-sm btn-default icon-btn borderless rounded-pill md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown">
                  <i class="ion ion-ios-more"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" id="sales-dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">Action 1</a>
                  <a class="dropdown-item" href="javascript:void(0)">Action 2</a>
                </div>
              </div>
            </div>
          </h6>
          <div class="mt-3">
            <div style="height:100px;">
              <canvas id="statistics-chart-2"></canvas>
            </div>
          </div>
          <div class="card-footer text-center py-2">
            <div class="row">
              <div class="col">
                <div class="text-muted small">Target</div>
                <strong class="text-big">500</strong>
              </div>
              <div class="col">
                <div class="text-muted small">Current</div>
                <strong class="text-big">421</strong>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-6 col-xl-4">

        <div class="card mb-4">
          <div class="card-body">
            <div class="float-right text-success">
              <small class="ion ion-md-arrow-round-up text-tiny"></small> 12%
            </div>
            <div class="text-muted small">Total revenue</div>
            <div class="text-xlarge">$1,534</div>
          </div>
          <div class="px-2">
            <div class="w-100" style="height: 117px;">
              <canvas id="statistics-chart-3"></canvas>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-6 col-xl-4">

        <div class="card mb-4">
          <div class="card-body pb-0">
            <div class="text-right small mb-4">Aug 2017 - Feb 2018</div>
            <div class="my-3" style="height: 86px;">
              <canvas id="statistics-chart-4"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-xs btn-outline-primary icon-btn float-right"><i class="ion ion-md-sync"></i></button>
            Unique visitors
          </div>
        </div>

      </div>
      <div class="col-sm-6 col-xl-3">

        <div class="card mb-4">
          <h6 class="card-header bg-success text-white">
            <i class="ion ion-md-cash"></i>&nbsp;
            Revenue
          </h6>
          <div class="bg-success text-white">
            <div class="d-flex align-items-center position-relative mt-4" style="height:140px;">
              <div class="w-100 position-absolute" style="height:140px;top:0;">
                <canvas id="statistics-chart-5"></canvas>
              </div>
              <div class="w-100 text-center text-xlarge">85</div>
            </div>
            <div class="text-center mt-3 mb-4">
              Sales today
            </div>
          </div>
          <div class="card-footer border-0 text-center py-3">
            <div class="row">
              <div class="col">
                <div class="text-muted small mb-1">Target</div>
                <strong class="text-big">$1225</strong>
              </div>
              <div class="col">
                <div class="text-muted small mb-1">Current</div>
                <strong class="text-big">$654</strong>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- / Charts -->

      <div class="col-xl-9">

        <div class="row">
          <div class="col-md-6">

            <!-- Tasks -->
            <div class="card mb-4">
              <h6 class="card-header with-elements">
                <div class="card-header-title">Tasks</div>
                <div class="card-header-elements ml-auto">
                  <button type="button" class="btn btn-default btn-xs md-btn-flat">Show more</button>
                </div>
              </h6>
              <div style="height: 234px" id="tasks-inner">
                <div class="card-body">
                  <p class="text-muted small">Today</p>
                  <div class="custom-controls-stacked">
                    <label class="ui-todo-item custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-label">Buy products</span>
                      <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">58 mins left</span>
                    </label>
                    <label class="ui-todo-item custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-label">Reply to emails</span>
                    </label>
                    <label class="ui-todo-item custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-label">Write blog post</span>
                      <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">20 hours left</span>
                    </label>
                    <label class="ui-todo-item custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" checked>
                      <span class="custom-control-label">Wash my car</span>
                    </label>
                  </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                  <p class="text-muted small">Tomorrow</p>
                  <div class="custom-controls-stacked">
                    <label class="ui-todo-item custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-label">Buy antivirus</span>
                    </label>
                    <label class="ui-todo-item custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-label">Jane's Happy Birthday</span>
                    </label>
                    <label class="ui-todo-item custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-label">Call mom</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Type your task">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-primary">Add</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Tasks -->

          </div>
          <div class="col-md-6">

            <!-- Team ToDo -->
            <div class="card mb-4">
              <h6 class="card-header with-elements">
                <div class="card-header-title">Team TODO</div>
                <div class="card-header-elements ml-auto">
                  <button type="button" class="btn btn-default btn-xs md-btn-flat">Show more</button>
                </div>
              </h6>
              <div style="height: 300px" id="team-todo-inner">
                <div class="card-body">
                  <div class="rounded ui-bordered p-3 mb-3">
                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                    <div class="media align-items-center mt-3">
                      <img src="{{ asset('img/avatars/12-small.png')}}" class="d-block ui-w-30 rounded-circle" alt>
                      <div class="media-body ml-2">Arthur Duncan</div>
                      <div class="text-muted small text-nowrap">02/08/2018</div>
                    </div>
                  </div>
                  <div class="rounded ui-bordered p-3 mb-3">
                    Sit meis deleniti eu, pri vidit meliore docendi ut.
                    <div class="media align-items-center mt-3">
                      <img src="{{ asset('img/avatars/11-small.png')}}" class="d-block ui-w-30 rounded-circle" alt>
                      <div class="media-body ml-2">Belle Ross</div>
                      <div class="text-muted small text-nowrap">02/06/2018</div>
                    </div>
                  </div>
                  <div class="rounded ui-bordered p-3">
                    Cum ea graeci tractatos.
                    <div class="media align-items-center mt-3">
                      <img src="{{ asset('img/avatars/10-small.png')}}" class="d-block ui-w-30 rounded-circle" alt>
                      <div class="media-body ml-2">Wayne Morgan</div>
                      <div class="text-muted small text-nowrap">02/04/2018</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Team ToDo -->

          </div>
        </div>

      </div>
      <div class="col-md-8">

        <!-- Sale stats -->
        <div class="card mb-4">
          <h6 class="card-header with-elements">
            <div class="card-header-title">Sale stats</div>
            <div class="card-header-elements ml-auto">
              <button type="button" class="btn btn-default btn-xs md-btn-flat">Show more</button>
            </div>
          </h6>
          <div class="table-responsive">
            <table class="table card-table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Sales</th>
                  <th>Cancelled</th>
                  <th>Delivered</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>02/08/2018</td>
                  <td>12</td>
                  <td>1</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>02/07/2018</td>
                  <td>16</td>
                  <td>2</td>
                  <td>8</td>
                </tr>
                <tr>
                  <td>02/06/2018</td>
                  <td>5</td>
                  <td>0</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>02/05/2018</td>
                  <td>21</td>
                  <td>1</td>
                  <td>10</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- / Sale stats -->

      </div>
      <div class="col-md-4">

        <!-- Type gadgets chart -->
        <div class="card mb-4">
          <h6 class="card-header with-elements">
            <div class="card-header-title">Type gadgets</div>
            <div class="card-header-elements ml-auto">
              <button type="button" class="btn btn-outline-primary btn-xs icon-btn md-btn-flat">
                <i class="ion ion-md-sync"></i>
              </button>
            </div>
          </h6>
          <div class="py-4 px-3">
            <div style="height:162px;">
              <canvas id="statistics-chart-6"></canvas>
            </div>
          </div>
        </div>
        <!-- / Type gadgets chart -->

      </div>
      <div class="col-md-6 col-lg-12 col-xl-6">

        <!-- Comments -->
        <div class="card mb-4">
          <h6 class="card-header">Comments</h6>
          <div class="card-body">
            <div class="media pb-1 mb-3">
              <img src="{{ asset('img/avatars/9-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
              <div class="media-body ml-3">
                <a href="javascript:void(0)">Amanda Warner</a>
                <span class="text-muted">commented on</span>
                <a href="javascript:void(0)">Article Name</a>
                <p class="my-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                <div class="clearfix">
                  <a href="javascript:void(0)" class="float-right text-lightest small">
                    <span class="ion ion-ios-thumbs-down"></span>
                  </a>
                  <a href="javascript:void(0)" class="float-right text-lightest small">
                    <span class="ion ion-ios-thumbs-up mr-2"></span>
                  </a>
                  <span class="float-left text-muted small">2 hours ago</span>
                </div>
              </div>
            </div>
            <div class="media pb-1 mb-3">
              <img src="{{ asset('img/avatars/8-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
              <div class="media-body ml-3">
                <a href="javascript:void(0)">Hallie Lewis</a>
                <span class="text-muted">commented on</span>
                <a href="javascript:void(0)">Article Name</a>
                <p class="my-1">Vivendum torquatos ut nec, sit audiam deterruisset ei, cu sed nibh autem scriptorem. Ea quo vidit deleniti constituto, ex qui malis mollis iudicabit, viris fabellas id has.</p>
                <div class="clearfix">
                  <a href="javascript:void(0)" class="float-right text-lightest small">
                    <span class="ion ion-ios-thumbs-down"></span>
                  </a>
                  <a href="javascript:void(0)" class="float-right text-lightest small">
                    <span class="ion ion-ios-thumbs-up mr-2"></span>
                  </a>
                  <span class="float-left text-muted small">2 hours ago</span>
                </div>
              </div>
            </div>
            <div class="media">
              <img src="{{ asset('img/avatars/7-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
              <div class="media-body ml-3">
                <a href="javascript:void(0)">Alice Hampton</a>
                <span class="text-muted">commented on</span>
                <a href="javascript:void(0)">Article Name</a>
                <p class="my-1">Eam facilis laboramus reprehendunt ei, ex esse fastidii per.</p>
                <div class="clearfix">
                  <a href="javascript:void(0)" class="float-right text-lightest small">
                    <span class="ion ion-ios-thumbs-down"></span>
                  </a>
                  <a href="javascript:void(0)" class="float-right text-lightest small">
                    <span class="ion ion-ios-thumbs-up mr-2"></span>
                  </a>
                  <span class="float-left text-muted small">2 hours ago</span>
                </div>
              </div>
            </div>
          </div>
          <a href="javascript:void(0)" class="card-footer d-block text-center text-body small font-weight-semibold">SHOW MORE</a>
        </div>
        <!-- / Comments -->

      </div>
      <div class="col-md-6 col-lg-12 col-xl-6">

        <!-- Support tickets -->
        <div class="card mb-4">
          <h6 class="card-header">Support tickets</h6>
          <div class="card-body">
            <div class="pb-1 mb-3">
              <div class="badge badge-outline-warning float-right">Feature</div>
              <a href="javascript:void(0)">Lorem ipsum dolor sit amet, vis erat denique in.</a>&nbsp;
              <span class="text-muted">#34563</span>
              <br>
              <small class="text-muted">Created by <a href="javascript:void(0)" class="text-body">Mike Greene</a> &nbsp;·&nbsp; 1 day ago</small>
            </div>
            <div class="pb-1 mb-3">
              <div class="badge badge-outline-danger float-right">Bug</div>
              <a href="javascript:void(0)">Dicunt prodesset te vix.</a>&nbsp;
              <span class="text-muted">#34524</span>
              <br>
              <small class="text-muted">Created by <a href="javascript:void(0)" class="text-body">Leon Wilson</a> &nbsp;·&nbsp; 1 day ago</small>
            </div>
            <div class="pb-1 mb-3">
              <div class="badge badge-outline-success float-right">Question</div>
              <a href="javascript:void(0)">Sit meis deleniti eu, pri vidit meliore docendi ut?</a>&nbsp;
              <span class="text-muted">#34563</span>
              <br>
              <small class="text-muted">Created by <a href="javascript:void(0)" class="text-body">Allie Rodriguez</a> &nbsp;·&nbsp; 1 day ago</small>
            </div>
            <div class="pb-1 mb-3">
              <div class="badge badge-outline-secondary float-right">Enhancement</div>
              <a href="javascript:void(0)">Eu tantas offendit mnesarchum sit, vide novum ad pri.</a>&nbsp;
              <span class="text-muted">#34563</span>
              <br>
              <small class="text-muted">Created by <a href="javascript:void(0)" class="text-body"> Kenneth Frazier</a> &nbsp;·&nbsp; 1 day ago</small>
            </div>
            <div>
              <div class="badge badge-outline-danger float-right">Bug</div>
              <a href="javascript:void(0)">Dicunt prodesset te vix.</a>&nbsp;
              <span class="text-muted">#34524</span>
              <br>
              <small class="text-muted">Created by <a href="javascript:void(0)" class="text-body">Leon Wilson</a> &nbsp;·&nbsp; 1 day ago</small>
            </div>
          </div>
          <a href="javascript:void(0)" class="card-footer d-block text-center text-body small font-weight-semibold">SHOW MORE</a>
        </div>
        <!-- / Support tickets -->

      </div>
    </div>

  </div>

@endsection
