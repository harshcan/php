<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../login.php");
}


?>










<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sidebar Nav</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="flex">
    
    <nav class="sidemenu">
      <div class="my-w items-center flex mb-3 p-2">
        <h1 class="ml-5 my-fs text-white">WorkFlow</h1>
      </div>
      <div class="border mx-5 mb-7 my-tr-clr"></div>
      <div
        class="hover:text-white active text-grey-200 my-bc items-center my-br px-2 py-2 flex justify-start"
      >
        <div class="img mx-2 w-6">
          <img src="home2.svg" alt="" />
        </div>
        <div class="ml-1 txt"><span>Dashboard</span></div>
      </div>

      <div
        class="mt-2 hover:text-white txt-nor border my-bg my-bc my-br items-center px-2 py-2 flex justify-start"
      >
        <div class="img mx-2 w-6 mr-2">
          <img src="projects.svg" alt="" />
        </div>
        <div class="ml-1 txt"><span>Projects</span></div>
      </div>
      <div
        class="mt-2 hover:text-white txt-nor border my-bg my-bc my-br items-center px-2 py-2 flex justify-start"
      >
        <div class="img mx-2 w-6">
          <img class="transform scale-125" src="team.svg" alt="" />
        </div>
        <div class="ml-1 txt"><span>Teams</span></div>
      </div>
      <div
        class="mt-2 hover:text-white txt-nor border my-bg my-bc my-br items-center px-2 py-2 flex justify-start"
      >
        <div class="img mx-2 w-6">
          <img src="calender.svg" alt="" />
        </div>
        <div class="ml-1 text-grey-900 txt"><span>Calcender</span></div>
      </div>
      <div
        class="mt-2 hover:text-white txt-nor border my-bg my-bc my-br items-center px-2 py-2 flex justify-start"
      >
        <div class="img mx-2 w-6">
          <img src="document.svg" alt="" />
        </div>
        <div class="ml-1 txt"><span>Documents</span></div>
      </div>

      <a href='../logout.php'><div class="bottom my-bg hover:text-white mt-2 ml-1">
        <div class="img mx-2 w-6">
          <img src="logout.svg" alt="" />
        </div>
        <div class="ml-1 txt"><span>Logout</span></div>
      </div>
  </a>
    </nav>
    <section class="home w-full text-black">
      <header class="banner overflow-hidden flex border-b border-indigo-300 justify-center w-full bg-indigo-200">
        Redu is a very intorative company that helps you .
        <u class="ml-2 md-hidden"> Read more</u>
      </header>
      
      <section class="flex md-center border-grey-600 border-b">
          <div class="bars h-full md-block bg-yellow-200 p-2"><i class="fas fa-bars"></i></div>
        <div class="p-2 w-full">
          <header class="hov md-justify-center my-center h-20 my-mx flex">
            <img
              class="avatar ring ring-indigo-400 ring-offset-4"
              src="avatar.webp"
              alt=""
            />
            <div class="ml-5 my-font mt-1">
              <p><?php echo "". $_SESSION['useruid']?></p>
              <p>harshsingh@gmail.com</p>
            </div>
            <div class="btn md-hidden"><button class="btn-edit bg-blue-400 ml-4 text-white p-2 transform scale-75 my-outline-none">Edit profile</button></div>
           <img src="https://www.flaticon.com/svg/static/icons/svg/54/54833.svg" class="hidden my-hov-block h-6 w-6 mt-2" alt="">
           <div class="md-block div-img ml-auto w-6"><img src="https://www.flaticon.com/svg/static/icons/svg/892/892499.svg"></div>
          </header>
        </div>
        <div class="ml-auto md-hidden border h-100vh border-blue-600 my-w2">
          <div class="my-center pl-6 pt-6 pr-6 border-b-2 border-green-700">
            <img class="avatar-2" src="avatar.webp" alt="" />
            <div class="my-name">
              <?php
              include("../includes/dbh.inc.php");
              $query = "SELECT * FROM phpproject";
              $data = mysqli_connect($conn,$query);
              $total = mysqli_num_rows($data);
              ?>
            </div>
          </div>
          <div class="p-6">
            <div class="rectangle">
              <div class="upper">Total Revenue upto <b>:</b></div>
              <b class="lower">$55</b>
            </div>
            <div class="rectangle mt-4">
                <div class="upper">Total User</div>
                <b class="lower">25</b>
              </div>
              <div class="rectangle mt-4">
                  <div class="upper">Rank</div>
                  <b class="lower">Worm</b>
                </div>
          </div>
        </div>
      </section>
    </section>
  </body>
</html>
