<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/assets/img/logo_brebes.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Administrator</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>

            </li>
            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a>
                    </li>
                    <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed
                            Sidebar</a></li>
                </ul>
            </li> --}}
            {{-- <li>
                <a href="../widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li> --}}

            <li class="treeview {{ Request::is('golongan') || Request::is('jabatan') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Master Data</span>
                    {{-- <i class="fa fa-pie-chart"></i>
                    <span>Charts</span> --}}
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('golongan.index') }}"><i class="fa fa-circle-o"></i> Data Golongan</a></li>
                    <li><a href="{{ route('jabatan.index') }}"><i class="fa fa-circle-o"></i> Data Jabatan</a></li>

                </ul>
            </li>


            <li class="{{ Request::is('pegawai') || Request::is('pegawai/create') ? 'active' : '' }}">
                <a href="{{ route('pegawai.index') }}">
                    <i class="fa fa-users"></i> <span>Data Pegawai</span>
                </a>
            </li>

            <li
                class="treeview {{ Request::is('pasangan') || Request::is('pasangan/create') || Request::is('anak') || Request::is('anak/create') || Request::is('orangtua') || Request::is('orangtua/create') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Riwayat Keluarga</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('pasangan') || Request::is('pasangan/create') ? 'active' : '' }}"><a
                            href="{{ route('pasangan.index') }}"><i class="fa fa-circle-o"></i>
                            Suami/Isteri</a></li>
                    <li class="{{ Request::is('anak') || Request::is('anak/create') ? 'active' : '' }}"><a
                            href="{{ route('anak.index') }}"><i class="fa fa-circle-o"></i> Anak</a></li>
                    <li class="{{ Request::is('orangtua') || Request::is('orangtua/create') ? 'active' : '' }}"> <a
                            href="{{ route('orangtua.index') }}">
                            <i class="fa fa-circle-o"></i> Orang Tua</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('pendidikan') || Request::is('pendidikan/create') ? 'active' : '' }}">
                <a href="{{ route('pendidikan.index') }}">
                    <i class="fa fa-graduation-cap"></i> <span>Riwayat Pendidikan</span>
                </a>
            </li>

            <li
                class="treeview {{ Request::is('riwayatgolongan') || Request::is('riwayatgolongan/create') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Kepegawaian</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li
                        class="{{ Request::is('riwayatgolongan') || Request::is('riwayatgolongan/create') ? 'active' : '' }}">
                        <a href="{{ route('riwayatgolongan.index') }}"><i class="fa fa-circle-o"></i>
                            Pangkat/Golongan</a>
                    </li>
                    <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Jabatan</a>
                    </li>
                    <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Gaji Berkala</a>
                    </li>
                    <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Diklat</a></li>
                    <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Cuti</a></li>
                    <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Hukuman</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-print"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> Nominatif</a>
                    </li>
                    <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> DUK</a>
                    </li>
                    <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Bezetting</a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i> <span>Management Access</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> Permission</a>
                    </li>
                    <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Role</a>
                    </li>
                    <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Type User</a></li>
                    <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> User</a></li>
                </ul>
            </li>

            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="../calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">3</small>
                        <small class="label pull-right bg-blue">17</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="../mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-yellow">12</small>
                        <small class="label pull-right bg-green">16</small>
                        <small class="label pull-right bg-red">5</small>
                    </span>
                </a>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li class="active"><a href="pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li> --}}


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
