<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Ant Design CSS -->
    <link href="https://cdn.jsdelivr.net/npm/antd/dist/antd.css" rel="stylesheet">

    <!-- Include your custom CSS file -->
    <link rel="stylesheet" href="{{ asset('css/layout.blade.css') }}">
    <title>Document</title>


    <!-- Any additional styles can be placed here -->
    <style>
        /* The side navigation menu */

        /* Ensure the Material Icons font is loaded */
        @import url('https://fonts.googleapis.com/icon?family=Material+Icons');

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            /* background: rgb(131,58,180); */
            /*background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgb(250, 115, 212) 100%); */
            /*background-color: #F8E6F8;*/

            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }


        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111111ac;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: #fef0f0;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #a337f189;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }


        /* Button Hamberger Bar */
        .custom-button {
            display: inline-block;
            width: 50px;
            height: 50px;
            font-size: 20px;
            line-height: 50px;
            color: white;
            background-color: #f6288f77;
            /* สีชมพู */
            text-align: center;
            cursor: pointer;
            border: none;
            /* border-radius: 50%; */
            /* ทำให้เป็นวงกลม */
        }

        /* เพิ่มเอฟเฟกต์เมื่อผู้ใช้เอาเมาส์ไปวางบนปุ่ม */
        .custom-button:hover {
            background-color: #FF69B480;
            /* เพิ่มสีพื้นหลังเมื่อ hover */
        }



        /* Dropdowns */
        .dropbtn {
            background-color: rgba(255, 255, 255, 0);
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;

        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 250px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .dropdown-content a {
            color: black;
            font-size: 16px;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /*.dropdown-content a:hover {background-color: #f1f1f1} */

        .dropdown-content a:hover {
            background-color: #f1f1f1;
            padding-left: 25px;
            /* เพิ่มการเฉียงด้านซ้าย */
            min-width: 250px;
        }



        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #ffffff00;
        }

/* Styles for the dropdown container */
.dropdown-right {
    position: absolute;
    top: 0px;
    right: 0px;
    display: inline-block;
}


/* Styles for the right-aligned button */
.custom-button-right {
    display: inline-block;
    width: 50px;
    height: 50px;
    font-size: 24px;
    line-height: 50px;
    color: white;
    background-color: #f6288f77;
    text-align: center;
    cursor: pointer;
    border: none;
    position: relative; /* Ensure dropdown aligns relative to the button */
}

/* Styles for the dropdown content */
.dropdown-content-right {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    top: 40px;
    right: 0; /* Align the dropdown content with the button */
    margin-right: 20px; /* Move dropdown content away from the right edge */
    border-radius: 7px; /* Apply rounded corners */
    opacity: 0.80; /* Set opacity to 50% */
}

/* Dropdown link styles */
.dropdown-content-right a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-radius: 7px; /* Apply rounded corners */
    opacity: 0.80; /* Set opacity to 50% */
}

/* Dropdown link hover effect */
.dropdown-content-right a:hover {
    background-color: #ddd;
    border-radius: 7px; /* Apply rounded corners */
    opacity: 0.80; /* Set opacity to 50% */
}

/* Show the dropdown when the button is clicked */
.show-dropdown {
    display: block;
    border-radius: 7px; /* Apply rounded corners */
    opacity: 0.80; /* Set opacity to 50% */
}

    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Page content -->
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex flex-column justify-content-center align-items-center">

                <div class="container-fluid">
                <div class="dropdown-right">
    <span class="custom-button-right material-icons" onclick="toggleDropdown()">&#xe8b8;</span>
    <div class="dropdown-content-right">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('profile.edit') }}">Profile</a>
        <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();">Log Out</a>
    </div>
</div>
                <div class="row">
                        <span class="custom-button" onclick="openNav()">&#9776;</span>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-lg-2">
                                    <!-- Sidebar -->
                                    <div id="mySidenav" class="sidenav">
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                        <a href="{{ url('/students') }}">Student</a>
                                        <a href="{{ url('/teachers') }}">Teacher</a>
                                        <a href="{{ url('/courses') }}">Course</a>
                                        <a href="{{ url('/batches') }}">Batches</a>
                                        <a href="{{ url('/enrollments') }}">Enrollment</a>
                                        <a href="{{ url('/payments') }}">Payment</a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            @isset($slot)
            {{ $slot }}
            @endisset
        </main>
    </div>


 <!-- Include the logout form -->
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

<script>
    function toggleDropdown() {
    const dropdown = document.querySelector('.dropdown-content-right');
    dropdown.classList.toggle('show-dropdown');
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.custom-button-right')) {
        const dropdowns = document.getElementsByClassName("dropdown-content-right");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show-dropdown')) {
                openDropdown.classList.remove('show-dropdown');
            }
        }
    }
}

</script>


    <!-- Bootstrap and other JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
