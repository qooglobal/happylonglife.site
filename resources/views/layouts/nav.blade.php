<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>

        </div>
        <div class="text-center">
            <h5 class="text-primary">
                8xbet
            </h5>
        </div>
        <div class="toggle-icon ms-auto">
            <i class="bx bx-arrow-to-left">
            </i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a class="has-arrow" href="{{ url('/dashboard') }}">
                <div class="parent-icon">
                    <i class="bx bx-home-circle">
                    </i>
                </div>
                <div class="menu-title">
                    Dashboard
                </div>
            </a>

        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-user">
                    </i>
                </div>
                <div class="menu-title">
                    Urls
                </div>
            </a>
            <ul>

                <li>
                    <a href="{{ url('/getUrls') }}">
                        <i class="bx bx-right-arrow-alt">
                        </i>
                        Urls Listing
                    </a>
                </li>


            </ul>
        </li>

    </ul>

</div>
