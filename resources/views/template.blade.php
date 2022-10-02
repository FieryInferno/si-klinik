<!DOCTYPE html>
<html class="default" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <script type="module" crossorigin="" src="http://rubick-vue.left4code.com/assets/index.20120bfc.js"></script>
    <link rel="stylesheet" href="http://rubick-vue.left4code.com/assets/index.68055fc5.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  </head>
  <body class="main">
    <div id="app" data-v-app="">
      <div class="py-2">
        <div class="mobile-menu md:hidden">
          <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto"><img alt="Midone Tailwind HTML Admin Template" class="w-6" src="Midone%20-%20Vuejs%20Admin%20Template_files/logo.9a88cec5.svg" /></a>
            <a href="javascript:;" class="mobile-menu-toggler">
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
                class="lucide w-8 h-8 text-white transform -rotate-90"
              >
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
              </svg>
            </a>
          </div>
          <div class="scrollable" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
              <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
              <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                  <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                    <div class="simplebar-content" style="padding: 0px;">
                      <a href="javascript:;" class="mobile-menu-toggler">
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
                          class="lucide w-8 h-8 text-white transform -rotate-90"
                        >
                          <circle cx="12" cy="12" r="10"></circle>
                          <line x1="15" y1="9" x2="9" y2="15"></line>
                          <line x1="9" y1="9" x2="15" y2="15"></line>
                        </svg>
                      </a>
                      <ul class="scrollable__content py-2">
                        <li>
                          <a href="javascript:;" class="menu menu--active menu--open">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Dashboard
                              <div class="menu__sub-icon transform rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <ul>
                            <li>
                              <a href="javascript:;" class="menu menu--active">
                                <div class="menu__icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                  </svg>
                                </div>
                                <div class="menu__title">
                                  Overview 1
                                  <!---->
                                </div>
                              </a>
                              <!---->
                            </li>
                            <li>
                              <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                  </svg>
                                </div>
                                <div class="menu__title">
                                  Overview 2
                                  <!---->
                                </div>
                              </a>
                              <!---->
                            </li>
                            <li>
                              <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                  </svg>
                                </div>
                                <div class="menu__title">
                                  Overview 3
                                  <!---->
                                </div>
                              </a>
                              <!---->
                            </li>
                            <li>
                              <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                  </svg>
                                </div>
                                <div class="menu__title">
                                  Overview 4
                                  <!---->
                                </div>
                              </a>
                              <!---->
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Menu Layout
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 01-8 0"></path>
                              </svg>
                            </div>
                            <div class="menu__title">
                              E-Commerce
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                <path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Inbox
                              <!---->
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <line x1="22" y1="12" x2="2" y2="12"></line>
                                <path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                                <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                <line x1="10" y1="16" x2="10.01" y2="16"></line>
                              </svg>
                            </div>
                            <div class="menu__title">
                              File Manager
                              <!---->
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Point of Sale
                              <!---->
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Chat
                              <!---->
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <line x1="10" y1="9" x2="8" y2="9"></line>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Post
                              <!---->
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Calendar
                              <!---->
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li class="menu__devider my-6"></li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Crud
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 010 7.75"></path>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Users
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <rect x="7" y="7" width="3" height="9"></rect>
                                <rect x="14" y="7" width="3" height="5"></rect>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Profile
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                <line x1="9" y1="21" x2="9" y2="9"></line>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Pages
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li class="menu__devider my-6"></li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                <path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Components
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="9" y1="3" x2="9" y2="21"></line>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Forms
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                        <li>
                          <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                <line x1="22" y1="12" x2="2" y2="12"></line>
                                <path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                                <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                <line x1="10" y1="16" x2="10.01" y2="16"></line>
                              </svg>
                            </div>
                            <div class="menu__title">
                              Widgets
                              <div class="menu__sub-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                                  <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                              </div>
                            </div>
                          </a>
                          <!---->
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div>
          </div>
        </div>
        <div class="flex mt-[4.7rem] md:mt-0">
          <nav class="side-nav">
            <a aria-current="page" href="http://rubick-vue.left4code.com/" class="router-link-active router-link-exact-active intro-x flex items-center pl-5 pt-4" tag="a">
              <span class="hidden xl:block text-white text-lg ml-3">SI KLINIK</span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
              <li>
                <a href="#" class="side-menu {{ $title === 'Dashboard' ? 'side-menu--active' : '' }}">
                  <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                      <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                  </div>
                  <div class="side-menu__title">Dashboard</div>
                </a>
                <!---->
              </li>
              <li>
                <a href="javascript:;" class="side-menu dropdown {{ $title === 'Wilayah' || $title === 'Pegawai' ? 'side-menu--active' : '' }}">
                  <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                      <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"></path>
                      <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                      <line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                  </div>
                  <div class="side-menu__title">
                    Master Data
                    <div class="side-menu__sub-icon transform rotate-180">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                        <polyline points="6 9 12 15 18 9"></polyline>
                      </svg>
                    </div>
                  </div>
                </a>
                <ul class="v-enter-active v-enter-to" style="display:  {{ $title === 'Wilayah' || $title === 'Pegawai' ? 'block' : 'none' }};">
                  <li>
                    <a href="{{ url('wilayah') }}" class="side-menu {{ $title === 'Wilayah' ? 'side-menu--active' : '' }}">
                      <div class="side-menu__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                          <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                      </div>
                      <div class="side-menu__title">
                        Wilayah
                      </div>
                    </a>
                    <!---->
                  </li>
                  <li>
                    <a href="{{ url('user') }}" class="side-menu {{ $title === 'User' ? 'side-menu--active' : '' }}">
                      <div class="side-menu__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                          <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                      </div>
                      <div class="side-menu__title">
                        User
                      </div>
                    </a>
                    <!---->
                  </li>
                  <li>
                    <a href="{{ url('pegawai') }}" class="side-menu {{ $title === 'Pegawai' ? 'side-menu--active' : '' }}">
                      <div class="side-menu__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                          <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                      </div>
                      <div class="side-menu__title">
                        Pegawai
                      </div>
                    </a>
                    <!---->
                  </li>
                  <li>
                    <a href="{{ url('tindakan') }}" class="side-menu">
                      <div class="side-menu__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                          <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                      </div>
                      <div class="side-menu__title">
                        Tindakan
                      </div>
                    </a>
                    <!---->
                  </li>
                  <li>
                    <a href="http://rubick-vue.left4code.com/top-menu/dashboard-overview-1" class="side-menu">
                      <div class="side-menu__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                          <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                      </div>
                      <div class="side-menu__title">
                        Obat
                      </div>
                    </a>
                    <!---->
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:;" class="side-menu">
                  <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                      <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"></path>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                      <path d="M16 10a4 4 0 01-8 0"></path>
                    </svg>
                  </div>
                  <div class="side-menu__title">
                    Pendaftaran Pasien
                  </div>
                </a>
                <!---->
              </li>
              <li>
                <a href="http://rubick-vue.left4code.com/inbox" class="side-menu">
                  <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                      <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                      <path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                    </svg>
                  </div>
                  <div class="side-menu__title">
                    Tindakan dan Obat
                  </div>
                </a>
                <!---->
              </li>
              <li>
                <a href="http://rubick-vue.left4code.com/file-manager" class="side-menu">
                  <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide">
                      <line x1="22" y1="12" x2="2" y2="12"></line>
                      <path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                      <line x1="6" y1="16" x2="6.01" y2="16"></line>
                      <line x1="10" y1="16" x2="10.01" y2="16"></line>
                    </svg>
                  </div>
                  <div class="side-menu__title">
                    Tagihan
                  </div>
                </a>
                <!---->
              </li>
            </ul>
          </nav>
          <div class="content">
            <div class="top-bar">
              <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Application</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
              </nav>
              <div class="dropdown intro-x w-8 h-8" data-tw-placement="bottom-end">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" aria-expanded="false" data-tw-toggle="dropdown" role="button">
                  <img src="{{ asset('images/user.jpg') }}" />
                </div>
                <div class="dropdown-menu w-56" id="_36jr2i1n9" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 32px);" data-popper-placement="bottom-end">
                  <ul class="dropdown-content bg-primary text-white">
                    <li>
                      <div class="dropdown-header !font-normal">
                        <div class="font-medium">Kevin Spacey</div>
                        <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                      </div>
                    </li>
                    <li><hr class="dropdown-divider border-white/[0.08]" /></li>
                    <li>
                      <a class="dropdown-item cursor-pointer hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                          <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                          <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Profile
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item cursor-pointer hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                          <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                          <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        Add Account
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item cursor-pointer hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                          <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                          <path d="M7 11V7a5 5 0 0110 0v4"></path>
                        </svg>
                        Reset Password
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item cursor-pointer hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                          <circle cx="12" cy="12" r="10"></circle>
                          <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"></path>
                          <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        Help
                      </a>
                    </li>
                    <li><hr class="dropdown-divider border-white/[0.08]" /></li>
                    <li>
                      <a class="dropdown-item cursor-pointer hover:bg-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                          <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
                          <circle cx="16" cy="12" r="3"></circle>
                        </svg>
                        Logout
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    } );
    const dropdown = document.getElementsByClassName("dropdown"),
          modal = document.getElementsByClassName('showModal');
    let i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.children[1].children[0].classList.toggle("rotate-180");
        this.classList.toggle("side-menu--open");
        const dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }

    for (i = 0; i < modal.length; i++) {
      modal[i].addEventListener("click", function() {
        const modalContent = document.getElementById(this.dataset.target);
        modalContent.classList.toggle('show');
        window.onclick = (event) => {
          if (event.target == modalContent) {
            modalContent.classList.toggle('show');
          }
        }
      });
    }
  </script>
</html>
