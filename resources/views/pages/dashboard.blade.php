@extends('layouts.app')
    
    @section('content')
    <div class="container-fluid py-4">
        <div class="row">
       
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                      <h5 class="font-weight-bolder">
                        105
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                        since last week
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                      <h5 class="font-weight-bolder">
                        204
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                      <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        
      </div>
    @endsection
    @section('scripts')
  <script>
   
  </script>
@endsection
  
