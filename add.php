<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Data</title>
    <link rel="icon" href="images/site-icon.png" type="image/icon">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>



    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col
                md:flex-row
                items-center">

            <a class="flex title-font font-medium items-center text-gray-900
                    mb-4
                    md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10
                        h-10 text-white
                        p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2
                            12l10 5 10-5"></path>
                </svg>
                <span class="title-font sm:text-3xl text-2xl mb-4 ml-4 font-medium text-gray-900">Arsenic Project
                    (MIS)
                </span>
            </a>

            <nav class="md:ml-auto flex flex-wrap items-center text-base
                    justify-center">
                <nav class="md:ml-auto flex flex-wrap items-center text-base
                    justify-center">


                    <button onclick="window.location.href='index.php';"
                        class="mr-5 inline-flex items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none hover:bg-blue-900 rounded text-white text-base mt-4 md:mt-0">Back
                    </button>

                    <button onclick="window.location.href='about.php';"
                        class="mr-5 inline-flex items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none hover:bg-blue-900 rounded text-white text-base mt-4 md:mt-0">About
                        us
                    </button>

                </nav>
            </nav>

        </div>
    </header>


    <!-- class="border-0 border-b-2 border-gray-300  focus:border-blue-600" -->


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
            <div class="flex flex-col w-full mb-20">

                <form method="post" action="">

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="id" id="floating_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_id"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Filter
                            ID</label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="password" name="pass" id="floating_password"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />

                        <label for="floating_password"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password
                        </label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="datetime-local" name="date-time" id="date-time"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_date-time"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date
                            and Time</label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="location" id="location"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="location"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Geolocation</label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="filter-conc" id="floating_filter-conc"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <label for="floating_filter-conc"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Concentration
                            (Filter) in ppb </label>
                    </div>


                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="raw-conc" id="floating_raw-conc"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_raw-conc"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Concentration
                                (Raw) in ppb</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="flow" id="floating_flow"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_flow"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Flow
                                reading in Ltrs.</label>
                        </div>
                    </div>

                    <div class="relative mb-4">
                        <label for="remark" class="leading-7 text-sm text-gray-600">Remark</label>
                        <textarea id="remark" name="remarks"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                            placeholder="Write something..."></textarea>
                    </div>



                    <button type="submit"
                        class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg ">Submit</button>
                </form>

            </div>
        </div>

    </section>


    <script>
        var locationInput = document.getElementById("location");
        navigator.geolocation.getCurrentPosition(function (position) {
            locationInput.value = position.coords.latitude + "," + position.coords.longitude;
        });

    </script>


    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

// Extract POST variables

 $id = $_POST['id']; 
 $password = $_POST['pass'];
 $datetime = $_POST['date-time'];
 $location = $_POST['location'];
 $fconc = $_POST['filter-conc'];
 $rconc = $_POST['raw-conc'];
 $flow = $_POST['flow'];
 $remark = $_POST['remarks']; 
 
 
 
 // Setting Variables

$dir = 'data'; // default folder name, files (.csv) store inside it
$filename = $dir . '/' . $id . '.csv'; // file naming acc. to ID no.
$ids = array("BRAF01","BRAF02","BRAF03","BRAF04","BRAF05","BRAF06");  // IDs
 


// Validate password

if ($password !== 'xxxxxxxx') { // session password
    echo "<script>alert('Incorrect password, try again!');history.go(-1);
    </script>";

    exit();  // Terminate the current script
}



// Check for valid ID

foreach ($ids as $val) {  // iterate through array
    
    if($val == $id){  // match true

        $conf_id = true ;     
    }
}
if(!$conf_id){  // false

 echo "<script>alert('Invalid ID, try again!'); history.go(-1);
</script>";

    exit(); // Terminate the current script
}


    
    
// Create folder if it does not exist

if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}




// Open file in append mode (also creates , if file does not exists)

$file = fopen($filename, 'a+');

// Acquire exclusive lock on file to prevent concurrent access
    if (flock($file, LOCK_EX)) {
        fputcsv($file, [$id, $datetime, $fconc, $rconc, $flow, $location, $remark]);
        
        // Release the lock
        flock($file, LOCK_UN);


    echo "<script>alert('Submitted successfully!'); history.go(-1);</script>";
} else {
    echo "<script>alert('Unsuccessful ! Try after few minutes'); history.go(-1);</script>";
}

 // Close the file
 fclose($file);
   
}
  ?>




    <footer class="text-white body-font bg-blue-500">
        <div class="container px-5 py-3 mx-auto flex items-center flex-col">
            <p class="text-1xl text-white sm:ml-4 sm:pl-4 sm:py-2 sm:mt-0
                    mt-4">
                Copyright © 2024 Arsenic Project Pilot MIS. designed by
                <a href="http://www.kilkaribihar.in/" class="text-white
                        ml-1" rel="noopener noreferrer" target="_blank">R&D Lab Science Section, Bihar Bal Bhawan
                    Kilkari</a>
            </p>
        </div>
    </footer>



</body>

</html>
