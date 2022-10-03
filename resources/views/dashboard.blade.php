@extends('template')
@section('content')
  <div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
      <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-8">
          <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
          </div>
          <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 448 512"
                      width="24"
                      height="24"
                      fill="rgb(var(--color-primary) / var(--tw-text-opacity))"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide report-box__icon text-primary"
                    >
                      <path d="M224 0c70.7 0 128 57.3 128 128s-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 39.5-161.2c77.2 12 136.3 78.8 136.3 159.4c0 17-13.8 30.7-30.7 30.7H265.1 182.9 30.7C13.8 512 0 498.2 0 481.3c0-80.6 59.1-147.4 136.3-159.4l39.5 161.2 33.4-123.9z"/>
                    </svg>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                  <div class="text-base text-slate-500 mt-1">Pegawai</div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide report-box__icon text-pending"
                    >
                      <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                      <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                  <div class="text-base text-slate-500 mt-1">Tindakan</div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 384 512"
                      width="24"
                      height="24"
                      fill="rgb(var(--color-warning) / var(--tw-text-opacity))"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide report-box__icon text-warning"
                    >
                        <path d="M0 32C0 14.3 14.3 0 32 0H352c17.7 0 32 14.3 32 32V64c0 17.7-14.3 32-32 32H32C14.3 96 0 81.7 0 64V32zm32 96H352V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zM160 240v48H112c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V352h48c8.8 0 16-7.2 16-16V304c0-8.8-7.2-16-16-16H224V240c0-8.8-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                    </svg>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                  <div class="text-base text-slate-500 mt-1">Obat</div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide report-box__icon text-success"
                    >
                      <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                  <div class="text-base text-slate-500 mt-1">Pasien</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 mt-8">
          <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">Patient Report</h2>
            <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="lucide w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"
              >
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              <input type="text" class="form-control sm:w-56 box pl-10" data-v-df406f70="" value="30 Sep, 2022 - 30 Oct, 2022" />
            </div>
          </div>
          <div class="intro-y box p-5 mt-12 sm:mt-5">
            <div class="flex flex-col md:flex-row md:items-center">
              <div class="flex">
                <div>
                  <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">$15,000</div>
                  <div class="mt-0.5 text-slate-500">This Month</div>
                </div>
                <div class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5"></div>
                <div>
                  <div class="text-slate-500 text-lg xl:text-xl font-medium">$10,000</div>
                  <div class="mt-0.5 text-slate-500">Last Month</div>
                </div>
              </div>
              <div class="dropdown md:ml-auto mt-5 md:mt-0" data-tw-placement="bottom-end">
                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                  Filter by Category
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 ml-2">
                    <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
                </button>
                <div class="dropdown-menu w-40">
                  <ul class="dropdown-content overflow-y-auto h-32">
                    <li><a class="dropdown-item cursor-pointer">PC &amp; Laptop</a></li>
                    <li><a class="dropdown-item cursor-pointer">Smartphone</a></li>
                    <li><a class="dropdown-item cursor-pointer">Electronic</a></li>
                    <li><a class="dropdown-item cursor-pointer">Photography</a></li>
                    <li><a class="dropdown-item cursor-pointer">Sport</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="report-chart">
              <div style="height: 275px;">
                <canvas class="mt-6 -mb-6" style="display: block; box-sizing: border-box; height: 275px; width: 453px;" width="453" height="275"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection