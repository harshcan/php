<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="components/all.min.css">
</head>
<style>

    * {
        margin: 0;
        padding: 0;
        font-family: system-ui;
    }

    .my-bg{
        background: red;
    }
    .items-center-my {
        display: grid;
        place-items: center;
    }
    .btn-danger{
        border-color: #dc3545;
    }
    .my-section:nth-child(2){
    margin-top: .5rem;
    justify-content: flex-end;
    display: flex;
    }
    .mr-40{
        margin-right: 40rem;
    }
    .my-bg-err{
        background: #FFCFCF;
        color: #FF0000;
    }
    @media (max-width:360px) {
    #bars-i{display: block;}

    label {
        text-transform: uppercase;
        letter-spacing: 1px;
    }
</style>

<body>

    <header class="text-gray-700 body-font">
        <div class="container mx-auto flex p-5 my-header md:flex-row items-center">
            <div class="hidden mr-5" id="bars-i"><i class="fas fa-bars"></i></div>
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-600 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Redu</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center my-own-a">
                <a class="mr-5 hover:text-black">Home</a>
                <a class="mr-5 hover:text-black">Tasks</a>
                <a class="mr-5 hover:text-black">About Us</a>
                <a class="mr-5 hover:text-black" href="login.php">Login</a>
            </nav>
            <a href="register.php" class="my-w-full">
                <button class="my-btn-div flex items-center bg-indigo-600 text-white border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-base mt-4 md:mt-0">
                    Register
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </a>
        </div>
    </header>