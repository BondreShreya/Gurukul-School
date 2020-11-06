@extends('layout.mainlayout')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <h2 class="card-category">STUDENTS</h2>
                  <h2 class="card-title">5</h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user-secret"></i>
                  </div>
                  <h2 class="card-category">TEACHERS</h2>
                  <h2 class="card-title">4</h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-briefcase"></i>
                  </div>
                  <h2 class="card-category">EMPLOYEES</h2>
                  <h2 class="card-title">0</h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-inr"></i>
                  </div>
                  <h2 class="card-category">FEES COLLECTION</h2>
                  <h2 class="card-title">0.0</h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">TO-DO-LIST</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-dark">
                    <th><i class="fa fa-code"><span class="pl-1">TASK</span><i?</th>
                      <th><i class="fa fa-user"><span class="pl-1">ASSIGNED USER</span></i></th>
                      <th><i class="fa fa-calendar"><span class="pl-1">DATE</span></i></th>
                      <th><i class="fa fa-cogs"><span class="pl-1">PRIORITY</span></i></th>
                      <th><i class="fa fa-cog"><span class="pl-1">STATUS</span></i></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">TODAY'S TASKS:</span>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
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
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ANNOUNCEMENT</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-dark">
                      <th><i class="fa fa-code"><span class="pl-1">FOR</span><i?</th>
                      <th><i class="fa fa-user"><span class="pl-1">TYPE</span></i></th>
                      <th><i class="fa fa-calendar"><span class="pl-1">SUBJECT</span></i></th>
                      <th><i class="fa fa-cogs"><span class="pl-1">DESCRIPTION</span></i></th>
                      <th><i class="fa fa-cog"><span class="pl-1">ANNOUNCED BY</span></i></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        
                      </tr>
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    
        @endsection