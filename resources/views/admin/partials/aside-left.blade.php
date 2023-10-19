<div id="sidebar" class="sidebar">
    <div class="sidebar-content">
        <!-- sidebar-menu  -->
        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">
                    Categories
                </li>
                <li class="active">
                    <a href="{{ route('admin.index') }}">
                        <i class="ti-dashboard"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="maincat ">
                    <a href="#">
                        <i class="ti-plug"></i>
                        <span class="menu-text">Components</span>
                    </a>
                    <div class="subcat">
                        <ul>
                            <li>
                                <a href="{{ route('admin.cp_datetime') }}">Date & Time</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.cp_bstoggle') }}">Bootstrap Toggle</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="maincat ">
                    <a href="#">
                        <i class="ti-palette"></i>
                        <span class="menu-text">UI Elements</span>
                    </a>
                    <div class="subcat">
                        <ul>
                            <li>
                                <a href="{{ route('admin.ui_typography') }}">Typography</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.ui_colors') }}">Colors</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.ui_fontawesome') }}">Fontawesome Icons</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.ui_themify') }}">Themify Icons</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.ui_buttons') }}">Buttons</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.ui_cards') }}">Cards</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.ui_modals') }}">Modals</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.ui_toastr') }}">Toastr Notifications</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="maincat ">
                    <a href="#">
                        <i class="ti-layout-grid2"></i>
                        <span class="menu-text">Tables</span>
                    </a>
                    <div class="subcat">
                        <ul>
                            <li>
                                <a href="{{ route('admin.tb_basic') }}">Basic Tables</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.tb_datatables') }}">Datatables</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="maincat ">
                    <a href="#">
                        <i class="ti-write"></i>
                        <span class="menu-text">Forms</span>
                    </a>
                    <div class="subcat">
                        <ul>
                            <li>
                                <a href="{{ route('admin.fm_control') }}">Form Control</a>
                            </li>
                            <li class="tier1 ">
                                <a href="#"><span class="menu-text">CKEditor</span></a>
                                <div class="subcat">
                                    <ul>
                                        <li>
                                            <a href="{{ route('admin.fm_ckeditor_inline') }}">Inline</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.fm_ckeditor_classic') }}">Classic</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.fm_ckeditor_balloon') }}">Balloon</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.fm_ckeditor_block') }}">Balloon Block</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.fm_ckeditor_document') }}">Document</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="maincat ">
                    <a href="#">
                        <i class="ti-bar-chart"></i>
                        <span class="menu-text">Charts</span>
                    </a>
                    <div class="subcat">
                        <ul>
                            <li>
                                <a href="{{ route('admin.ch_apexcharts') }}">Apex Charts</a>
                            </li>
                            <li>
                                <a href="javascript:;">amCharts</a>
                            </li>
                            <li>
                                <a href="javascript:;">Morris Charts</a>
                            </li>
                            <li>
                                <a href="javascript:;">Flot Charts</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header-menu">
                    Extra
                </li>
                <li class="maincat ">
                    <a href="#">
                        <i class="ti-file"></i>
                        <span class="menu-text">Pages</span>
                    </a>
                    <div class="subcat">
                        <ul>
                            <li>
                                <a href="{{ route('admin.pg_login') }}" target="_blank">Login</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="maincat">
                    <a href="#">
                        <i class="ti-layers-alt"></i>
                        <span class="menu-text">Multi-Levels Menu</span>
                    </a>
                    <div class="subcat">
                        <ul>
                            <li class="tier1">
                                <a href="javascript:;">Tier 1</a>
                                <div class="subcat">
                                    <ul>
                                        <li><a href="javascript:;">Level 2</a></li>
                                        <li><a href="javascript:;">Level 2</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">Submenu</a>
                            </li>
                            <li>
                                <a href="javascript:;">Submenu</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a href="{{ route('admin.ex_calendar') }}">
                        <i class="ti-calendar"></i>
                        <span class="menu-text">Calendar</span>
                        <span class="badge badge-pill badge-primary">New</span>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/boolfalse-am" target="_blank">
                        <i class="ti-github"></i>
                        <span class="menu-text">BoolFalse</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
</div>
