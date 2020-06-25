<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
{{--<link rel="icon" href="{{asset('pics/icon.png')}}">--}}
<!-- CSS -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
{{--    <link href="{{ asset('assets/vendors/sweetalert/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>--}}

<!-- Font Awesome -->
    {{--<link rel="stylesheet" href="{{asset('css/all.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/admin_index.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        #qid {
            padding: 10px 15px;
            -moz-border-radius: 50px;
            -webkit-border-radius: 50px;
            border-radius: 20px;
        }

        label.btn {
            padding: 18px 60px;
            white-space: normal;
            -webkit-transform: scale(1.0);
            -moz-transform: scale(1.0);
            -o-transform: scale(1.0);
            -webkit-transition-duration: .3s;
            -moz-transition-duration: .3s;
            -o-transition-duration: .3s
        }

        label.btn:hover {
            text-shadow: 0 3px 2px rgba(0, 0, 0, 0.4);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1)
        }

        label.btn:hover {
            text-shadow: 0 3px 2px rgba(0, 0, 0, 0.4);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1)
        }

        label.btn-block {
            text-align: left;
            position: relative
        }

        label .btn-label {
            position: absolute;
            left: 0;
            top: 0;
            display: inline-block;
            padding: 0 10px;
            background: rgba(0, 0, 0, .15);
            height: 100%
        }

        label .glyphicon {
            top: 34%
        }

        .element-animation1 {
            animation: animationFrames ease .8s;
            animation-iteration-count: 1;
            transform-origin: 50% 50%;
            -webkit-animation: animationFrames ease .8s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -ms-animation: animationFrames ease .8s;
            -ms-animation-iteration-count: 1;
            -ms-transform-origin: 50% 50%
        }

        .element-animation2 {
            animation: animationFrames ease 1s;
            animation-iteration-count: 1;
            transform-origin: 50% 50%;
            -webkit-animation: animationFrames ease 1s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -ms-animation: animationFrames ease 1s;
            -ms-animation-iteration-count: 1;
            -ms-transform-origin: 50% 50%
        }

        .element-animation3 {
            animation: animationFrames ease 1.2s;
            animation-iteration-count: 1;
            transform-origin: 50% 50%;
            -webkit-animation: animationFrames ease 1.2s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -ms-animation: animationFrames ease 1.2s;
            -ms-animation-iteration-count: 1;
            -ms-transform-origin: 50% 50%
        }

        .element-animation4 {
            animation: animationFrames ease 1.4s;
            animation-iteration-count: 1;
            transform-origin: 50% 50%;
            -webkit-animation: animationFrames ease 1.4s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -ms-animation: animationFrames ease 1.4s;
            -ms-animation-iteration-count: 1;
            -ms-transform-origin: 50% 50%
        }

        @keyframes animationFrames {
            0% {
                opacity: 0;
                transform: translate(-1500px, 0px)
            }

            60% {
                opacity: 1;
                transform: translate(30px, 0px)
            }

            80% {
                transform: translate(-10px, 0px)
            }

            100% {
                opacity: 1;
                transform: translate(0px, 0px)
            }
        }

        @-webkit-keyframes animationFrames {
            0% {
                opacity: 0;
                -webkit-transform: translate(-1500px, 0px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translate(30px, 0px)
            }

            80% {
                -webkit-transform: translate(-10px, 0px)
            }

            100% {
                opacity: 1;
                -webkit-transform: translate(0px, 0px)
            }
        }

        @-ms-keyframes animationFrames {
            0% {
                opacity: 0;
                -ms-transform: translate(-1500px, 0px)
            }

            60% {
                opacity: 1;
                -ms-transform: translate(30px, 0px)
            }
            80% {
                -ms-transform: translate(-10px, 0px)
            }

            100% {
                opacity: 1;
                -ms-transform: translate(0px, 0px)
            }
        }

        .modal-header {
            background-color: transparent;
            color: inherit
        }

        .modal-body {
            min-height: 205px
        }

        #loadbar {
            position: absolute;
            width: 62px;
            height: 77px;
            top: 2em
        }

        .blockG {
            position: absolute;
            background-color: #FFF;
            width: 10px;
            height: 24px;
            -moz-border-radius: 8px 8px 0 0;
            -moz-transform: scale(0.4);
            -moz-animation-name: fadeG;
            -moz-animation-duration: .8800000000000001s;
            -moz-animation-iteration-count: infinite;
            -moz-animation-direction: linear;
            -webkit-border-radius: 8px 8px 0 0;
            -webkit-transform: scale(0.4);
            -webkit-animation-name: fadeG;
            -webkit-animation-duration: .8800000000000001s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-direction: linear;
            -ms-border-radius: 8px 8px 0 0;
            -ms-transform: scale(0.4);
            -ms-animation-name: fadeG;
            -ms-animation-duration: .8800000000000001s;
            -ms-animation-iteration-count: infinite;
            -ms-animation-direction: linear;
            -o-border-radius: 8px 8px 0 0;
            -o-transform: scale(0.4);
            -o-animation-name: fadeG;
            -o-animation-duration: .8800000000000001s;
            -o-animation-iteration-count: infinite;
            -o-animation-direction: linear;
            border-radius: 8px 8px 0 0;
            transform: scale(0.4);
            animation-name: fadeG;
            animation-duration: .8800000000000001s;
            animation-iteration-count: infinite;
            animation-direction: linear
        }

        #rotateG_01 {
            left: 0;
            top: 28px;
            -moz-animation-delay: .33s;
            -moz-transform: rotate(-90deg);
            -webkit-animation-delay: .33s;
            -webkit-transform: rotate(-90deg);
            -ms-animation-delay: .33s;
            -ms-transform: rotate(-90deg);
            -o-animation-delay: .33s;
            -o-transform: rotate(-90deg);
            animation-delay: .33s;
            transform: rotate(-90deg)
        }

        #rotateG_02 {
            left: 8px;
            top: 10px;
            -moz-animation-delay: .44000000000000006s;
            -moz-transform: rotate(-45deg);
            -webkit-animation-delay: .44000000000000006s;
            -webkit-transform: rotate(-45deg);
            -ms-animation-delay: .44000000000000006s;
            -ms-transform: rotate(-45deg);
            -o-animation-delay: .44000000000000006s;
            -o-transform: rotate(-45deg);
            animation-delay: .44000000000000006s;
            transform: rotate(-45deg)
        }

        #rotateG_03 {
            left: 26px;
            top: 3px;
            -moz-animation-delay: .55s;
            -moz-transform: rotate(0deg);
            -webkit-animation-delay: .55s;
            -webkit-transform: rotate(0deg);
            -ms-animation-delay: .55s;
            -ms-transform: rotate(0deg);
            -o-animation-delay: .55s;
            -o-transform: rotate(0deg);
            animation-delay: .55s;
            transform: rotate(0deg)
        }

        #rotateG_04 {
            right: 8px;
            top: 10px;
            -moz-animation-delay: .66s;
            -moz-transform: rotate(45deg);
            -webkit-animation-delay: .66s;
            -webkit-transform: rotate(45deg);
            -ms-animation-delay: .66s;
            -ms-transform: rotate(45deg);
            -o-animation-delay: .66s;
            -o-transform: rotate(45deg);
            animation-delay: .66s;
            transform: rotate(45deg)
        }

        #rotateG_05 {
            right: 0;
            top: 28px;
            -moz-animation-delay: .7700000000000001s;
            -moz-transform: rotate(90deg);
            -webkit-animation-delay: .7700000000000001s;
            -webkit-transform: rotate(90deg);
            -ms-animation-delay: .7700000000000001s;
            -ms-transform: rotate(90deg);
            -o-animation-delay: .7700000000000001s;
            -o-transform: rotate(90deg);
            animation-delay: .7700000000000001s;
            transform: rotate(90deg)
        }

        #rotateG_06 {
            right: 8px;
            bottom: 7px;
            -moz-animation-delay: .8800000000000001s;
            -moz-transform: rotate(135deg);
            -webkit-animation-delay: .8800000000000001s;
            -webkit-transform: rotate(135deg);
            -ms-animation-delay: .8800000000000001s;
            -ms-transform: rotate(135deg);
            -o-animation-delay: .8800000000000001s;
            -o-transform: rotate(135deg);
            animation-delay: .8800000000000001s;
            transform: rotate(135deg)
        }

        #rotateG_07 {
            bottom: 0;
            left: 26px;
            -moz-animation-delay: .99s;
            -moz-transform: rotate(180deg);
            -webkit-animation-delay: .99s;
            -webkit-transform: rotate(180deg);
            -ms-animation-delay: .99s;
            -ms-transform: rotate(180deg);
            -o-animation-delay: .99s;
            -o-transform: rotate(180deg);
            animation-delay: .99s;
            transform: rotate(180deg)
        }

        #rotateG_08 {
            left: 8px;
            bottom: 7px;
            -moz-animation-delay: 1.1s;
            -moz-transform: rotate(-135deg);
            -webkit-animation-delay: 1.1s;
            -webkit-transform: rotate(-135deg);
            -ms-animation-delay: 1.1s;
            -ms-transform: rotate(-135deg);
            -o-animation-delay: 1.1s;
            -o-transform: rotate(-135deg);
            animation-delay: 1.1s;
            transform: rotate(-135deg)
        }

        @-moz-keyframes fadeG {
            0% {
                background-color: #000
            }

            100% {
                background-color: #FFF
            }
        }

        @-webkit-keyframes fadeG {
            0% {
                background-color: #000
            }

            100% {
                background-color: #FFF
            }
        }

        @-ms-keyframes fadeG {
            0% {
                background-color: #000
            }

            100% {
                background-color: #FFF
            }
        }

        @-o-keyframes fadeG {
            0% {
                background-color: #000
            }
            100% {
                background-color: #FFF
            }
        }

        @keyframes fadeG {
            0% {
                background-color: #000
            }

            100% {
                background-color: #FFF
            }
        }

    </style>
    @yield('header_styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" class="toggled">
    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>QO</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><i class="fa fa-book"></i> Quiz Online</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('images/admin_stuffs/new-user.png')}}" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs">Hello, NguyenDucTong</span>
                        </a>
                        {{--                        <ul class="dropdown-menu">--}}
                        {{--                            <!-- User image -->--}}
                        {{--                            <li class="user-header" style="height: auto;">--}}
                        {{--                                <img src="{{asset('images/admin_stuffs/new-user.png')}}" class="img-circle" alt="User Image">--}}
                        {{--                                <p>--}}
                        {{--                                    --}}{{--{{\Auth::user()->first_name}} {{\Auth::user()->last_name}}--}}
                        {{--                                    --}}{{--<small>Ngày sinh: {{\Carbon\Carbon::createFromFormat('Y-m-d', \Auth::user()->dob)->format('d-m-Y')}}</small>--}}
                        {{--                                    --}}{{--<small>SĐT: {{\Auth::user()->phone}}</small>--}}
                        {{--                                    --}}{{--<small>Email: {{\Auth::user()->email}}</small>--}}
                        {{--                                    --}}{{--<small>Tham gia vào {{\Auth::user()->created_at->format('d/m/Y')}}</small>--}}
                        {{--                                </p>--}}
                        {{--                            </li>--}}
                        {{--                            <!-- Menu Body -->--}}
                        {{--                            <li class="user-body" style="height: fit-content;">--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-12 text-center p-1">--}}
                        {{--                                        <a href="#" class="fix-info"><i class="fa fa-wrench"></i> Chỉnh sửa thông tin</a>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <!-- /.row -->--}}
                        {{--                            </li>--}}
                        {{--                            <!-- Menu Footer-->--}}
                        {{--                            <li class="user-footer">--}}
                        {{--                                <a href="#" class="btn btn-default btn-block"--}}
                        {{--                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
                        {{--                                    Đăng xuất--}}
                        {{--                                </a>--}}
                        {{--                                <form id="logout-form" action="#" method="POST" style="display: none;">--}}
                        {{--                                    {{ csrf_field() }}--}}
                        {{--                                </form>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        @include('sidebars._left_menu')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <aside class="content-wrapper">
        @yield('content')
        <div class="modal-content">
            <div class="modal-header">
                <h3><span style="color: blue">Câu hỏi môn : {{$question['mon']}}</span>
                    <p>{{$question['question']}}</p></h3>
            </div>
            <div class="modal-body">
                <div class="col-xs-3 col-xs-offset-5">
                    <div id="loadbar" style="display: none;">
                        <div class="blockG" id="rotateG_01"></div>
                        <div class="blockG" id="rotateG_02"></div>
                        <div class="blockG" id="rotateG_03"></div>
                        <div class="blockG" id="rotateG_04"></div>
                        <div class="blockG" id="rotateG_05"></div>
                        <div class="blockG" id="rotateG_06"></div>
                        <div class="blockG" id="rotateG_07"></div>
                        <div class="blockG" id="rotateG_08"></div>
                    </div>
                </div>
                {!! $question['answer'] !!}
                <div class="quiz" id="quiz" data-toggle="buttons">
                    @foreach($arr as $ques)
                        <label class="element-animation1 btn btn-lg btn-primary btn-block" onclick="isCorrect(this)"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 id="a1"
                                                                                                 name="q_answer"
                                                                                                 value="{!! $ques !!}"><span>{!! $ques !!}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer text-muted">
                <a class="btn btn-success" href="#" onclick="reload()">Câu tiếp theo</a></div>
        </div>

    </aside>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Developed by <b style="color: red">Nguyễn Đức Tông</b></strong>. All right reserved.
    </footer>
</div>


<!-- Script -->
<!-- jQuery 3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
{{--<script src="{{asset('js/jquery-ui.min.js')}}"></script>--}}
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.js')}}"></script>
<script>
    function reload() {
        location.reload();
    }
    function isCorrect(ele) {
        var choice = $(ele).find('input:radio').val();

        $('#loadbar').show();
        // $('#quiz input').on('change', function() {
        //    $('input[name=q_answer]:checked', '#quiz').css({"background": "orange"});
        // });
        $('#quiz').fadeOut();
        setTimeout(function () {
            $("#answer").html($(ele).checking(choice));
            $('#quiz').show();
            if ($(ele).checking(choice)) {
                $(ele).css({"background": "green"});
            } else {
                $(ele).css({"background": "red"});

            }
            $('#loadbar').fadeOut();

            /* something else */
        }, 1500);
    };

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $(function () {
        var loading = $('#loadbar').hide();
        $(document)
            .ajaxStart(function () {
                loading.show();
            }).ajaxStop(function () {
            loading.hide();
        });


        // $("label.btn").on('click', function (event) {
        //     var choice = $(this).find('input:radio').val();
        //
        //     $('#loadbar').show();
        //     // $('#quiz input').on('change', function() {
        //     //    $('input[name=q_answer]:checked', '#quiz').css({"background": "orange"});
        //     // });
        //     $('#quiz').fadeOut();
        //     setTimeout(function () {
        //         $("#answer").html($(this).checking(choice));
        //         $('#quiz').show();
        //         if ($(this).checking(choice)) {
        //             $(event.target).css({"background": "green"});
        //         } else {
        //             $(event.target).css({"background": "red"});
        //
        //         }
        //         $('#loadbar').fadeOut();
        //
        //         /* something else */
        //     }, 1500);
        // });

        var ans = "{!! $question['answer'] !!}";

        $.fn.checking = function (ck) {
            if (ck !== ans)

                return false;

            else
                return true;
        };
    });

</script>
@yield('footer_script')
</body>
</html>
