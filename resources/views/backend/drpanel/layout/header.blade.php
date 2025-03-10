<div class="all-wrapper with-side-panel solid-bg-all">
    <div class="layout-w">
        <div class="menu-w color-scheme-light
            color-style-default menu-position-top
             menu-layout-compact sub-menu-style-over
             sub-menu-color-bright selected-menu-color-bright
             menu-activated-on-hover menu-has-selected-link">
            <div class="logo-w"><a class="logo" href="{{url('/doctor/dashboard')}}">
                    <div class="logo-element"></div>
                    <div class="logo-label">Aashwi Hospital</div>
                </a></div>
            <h1 class="menu-page-header">Page Header</h1>
            <ul class="main-menu">
                <li>
                    <div class="top-bar color-scheme-transparent">
                        <div class="top-menu-controls">

                            <div class="logged-user-w">
                                <div class="logged-user-i">
                                    <div class="avatar-w"><img alt=""
                                            src="{{ asset('backend/drpanel/img/Dr-Mihir-Metha-ENT-1.jpg') }}"></div>
                                    <div class="logged-user-menu color-style-bright">
                                        <div class="logged-user-avatar-info">
                                            <div class="avatar-w"><img alt=""
                                                    src="{{ asset('backend/drpanel/img/Dr-Mihir-Metha-ENT-1.jpg') }}">
                                            </div>
                                            <div class="logged-user-info-w">
                                                <div class="logged-user-name">{{$userData->first_name }} {{$userData->last_name }}</div>
                                                <div class="logged-user-role">Doctor</div>
                                            </div>
                                        </div>
                                        <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                                        <ul>
                                            <li>
                                                <a href="javascript:" onclick="logoutfun();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="sub-header"><span>Layouts</span></li>
                <li class="">
                <a href="{{url('doctor/dashboard')}}">
                        <div class="icon-w">
                            <div class="os-icon os-icon-layout"></div>
                        </div><span>Dashboard</span>
                    </a>
                </li>

                <li class="has-sub-menu"><a href="#">
                        <div class="icon-w">
                            <div class="os-icon os-icon-layers"></div>
                        </div><span>OPD patients</span>
                    </a>
                    <div class="sub-menu-w">
                        <div class="sub-menu-header">OPD patients</div>
                        <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                        <div class="sub-menu-i">
                            <ul class="sub-menu">
                                <li><a href="{{url('doctor/currunt-opd')}}">Current OPD </a></li>

                                <li><a href="{{url('doctor/opd-list')}}">OPD Patients</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="sub-header"><span>IPD patients</span></li>
                <li class=""><a href="/drpanel/ipd-list">
                        <div class="icon-w">
                            <div class="os-icon os-icon-package"></div>
                        </div><span>IPD patients</span>
                    </a>
                </li>
                <li class="has-sub-menu"><a href="#">
                        <div class="icon-w">
                            <div class="os-icon os-icon-file-text"></div>
                        </div><span>OT Management</span>
                    </a>
                    <div class="sub-menu-w">
                        <div class="sub-menu-header">OT Management</div>
                        <div class="sub-menu-icon"><i class="os-icon os-icon-file-text"></i></div>
                        <div class="sub-menu-i">
                            <ul class="sub-menu">
                                <li><a href="/drpanel/ot-management">OT Management</a></li>
                                <li><a href="/drpanel/ot-schedule">OT Schedule</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <script>
            function logoutfun() {
                if (confirm('Are You Sure You want to Logout ?')) {
                    window.location.href = "{{ url('staffLogout') }}";
                }
            }
        </script>
