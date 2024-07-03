<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home </title>
    <link rel="icon" href="images/site-icon.png" type="image/icon">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>


    <section class="text-gray-600 body-font">
        <div class="container px-2 py-2 mx-auto">
            <div class="flex flex-col text-center w-full mb-50">
                <h1 class="ml-3 text-xl font-medium">Government of Bihar</h1>
                <h1 class="ml-3 text-1xl title-font mb-4 text-gray-900">R&D Lab Science Section, Bihar Bal Bhawan Kilkari<br />(Department
                    of Education)<br /> and <br />
                   Training cum Research Center 'PRANJAL'<br />
                    (Public Health Engineering Department)
                </h1>
            </div>
        </div>
    </section>



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
                    (MIS) </br> 
                    </span>
            </a>
        
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <button onclick="window.location.href='add.php';"
                    class="mr-5 inline-flex items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none hover:bg-blue-600 rounded text-white text-base mt-4 md:mt-0">Add
                    data
                </button>

                <button onclick="window.location.href='about.php';"
                    class="mr-5 inline-flex items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none hover:bg-blue-600 rounded text-white text-base mt-4 md:mt-0">About
                    us
                </button>
            </nav>

        </div>
    </header>




    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                 <h1 class="text-gray-900 sm:text-2xl text-xl mt-2 mb-4">
                  <span class="text-blue-500 font-bold">UNICEF</span> Supported Pilot Studies 2022 - 23
                </h1>

                <p class="mb-8 leading-relaxed text-left"><b>Magnetic Arsenic Removal Unit - </b>Based on indigenous molecular magnetic arsenic repulsion
                    technology, deployed for pilot testing since 2 years.</p>
                <p class="mb-8 leading-relaxed text-left text-red-500">The pilot has concluded and closed on 11-6-2023.
                    FTK (Field testing kit) was used for regular assessment of arsenic concentration, which gives an
                    estimated value</p>
                <br />

                <form action="">
                    <div class="flex w-full md:justify-start justify-center items-end">
                        <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">
                            <label for="hero-field"
                                class="title-font sm:text-2xl text-xl mb-4 font-medium text-gray-900">Enter Filter
                                ID</label>
                            <input type="text" id="fid" name="id" value='BRAF01'
                                class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <input type="submit" value="OK"
                            class="inline-flex text-white bg-blue-500 border-0 py-2 px-4 focus:outline-none rounded text-lg">
                    </div>
                </form>

                <!-- Closable Table Button -->
                <div class="flex justify-center mt-14">
                    <button id="toggleTable"
                        class="inline-flex text-white bg-blue-500 border-0 py-2 px-4 focus:outline-none rounded text-lg">More
                        Filter ID</button>
                </div>

                <!-- Closable Table -->

                <div id="closableTable" class="overflow-x-auto mt-6 hidden">
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 bg-gray-100">Filter ID</th>
                                <th class="px-4 py-2 bg-gray-100">Sites</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">BRAF01</td>
                                <td class="border px-4 py-2">Middle School, Naya Mohammadpur, Koilwar, Bhojpur, Bihar
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">BRAF02</td>
                                <td class="border px-4 py-2">Middle School, Neknam Tola, Barhara Bhojpur, Bihar</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">BRAF03</td>
                                <td class="border px-4 py-2">Middle School, Chota Sasaram, UdwantNagar Bhojpur, Biharr
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">BRAF04</td>
                                <td class="border px-4 py-2">Kastruba Middle School , Dullhapur, Simri, Buxar,Bihar</td>
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">BRAF05</td>
                                <td class="border px-4 py-2">Utkramit School,Kharhatanr Simri, Buxar, Bihar</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">BRAF06</td>
                                <td class="border px-4 py-2">Middle School, Srirampur, Nathnagar, Bhagalpur, Bihar </br>
                                    ( Pilot not deployed )</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="Filter img" src="images/pilot-new.png">
            </div>
            
        </div>
    </section>
    
    
    

    <hr>

    <script>
        document.getElementById('toggleTable').addEventListener('click', function () {
            var table = document.getElementById('closableTable');
            if (table.classList.contains('hidden')) {
                table.classList.remove('hidden');
            } else {
                table.classList.add('hidden');
            }
        });
    </script>





<?php
    
// Extract ID variables

$id = $_REQUEST['id'] ?? 'BRAF01'; // fetch id value or with a default variable

// Setting Variables

$dir = 'data'; // default folder name, files (.csv) store inside it
$filename = $dir . '/' . $id . '.csv'; // file naming acc. to ID no.
$records = [];  // empty array to store all records

// Change/set the id for Filter ID input field

echo"<script type='text/javascript'>
var nameField = document.getElementById('fid');
nameField.value = '$id';
</script>";




// Check data file

if(file_exists($filename)) {

} else {

    echo"<script type='text/javascript'>alert('Record not found, Try again !');
    </script>";
    die();  // error handler
}




// Open & read data file

if (($handle = fopen($filename, "r")) !== FALSE) {  


  if (flock($handle, LOCK_SH)) { // shared lock the file while reading

    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {   // extract rows data
      $records[] = $row; // append in a array
    }
    

    flock($handle, LOCK_UN); // unlock the file after reading

    } else {
        echo "<script type='text/javascript'>alert('Error encountered while getting shared lock on file !');
        </script>";
        die(); // error handler
    }

    
    fclose($handle);
   


  } else {

    echo"<script type='text/javascript'>alert('Error encountered, while opening or reading file !');
    </script>";
    die();  // error handler
  }


  /* Get the last row data

  $last_record []  = array_slice($records, count($records)-1);

  // extract specific columns data for highlights
  // $data_3 = $last_record[0][2] ?? '0'; // value or with a default variable;
  // $data_4 = $last_record[0][3] ?? '0'; // value or with a default variable;
  // $data_5 = $last_record[0][4] ?? '0'; // alue or with a default variable;
  
*/




// Find the minimum value in column 2
$data_3 = null; // Initialize the variable to hold the minimum value

foreach ($records as $record) {
    if (isset($record[2])) {
        $value = intval($record[2]);
        if ($data_3 === null || $value < $data_3) {
            $data_3 = $value;
        }
    }
}



// Find the maximum value in column 3
$data_4 = null; // Initialize the variable to hold the maximum value

foreach ($records as $record) {
    if (isset($record[3])) {
        $value = intval($record[3]);
        if ($data_4 === null || $value > $data_4) {
            $data_4 = $value;
        }
    }
}




// Find the maximum value in column 4
$data_5 = null; // Initialize the variable to hold the maximum value

foreach ($records as $record) {
    if (isset($record[4])) { // Check if the value in column 5 exists
        $value = intval($record[4]); // Convert the value to an integer
        if ($data_5 === null || $value > $data_5) { // Compare with the current maximum value
            $data_5 = $value; // Update the maximum value if a higher value is found
        }
    }
}





?>




    <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-2xl text-1xl font-medium title-font mb-4 text-gray-900">Highlights</h1>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-blue-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">
                            <?php echo round($data_5/1000,2); ?>K Liters
                        </h2>
                        <p class="leading-relaxed">Served</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-blue-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <circle cx="9" cy="8" r="7"></circle>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">
                            <?php echo $data_4; ?> ppb
                        </h2>
                        <p class="leading-relaxed">Arsenic (source)</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-blue-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <circle cx="9" cy="8" r="7"></circle>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">
                            <?php echo $data_3; ?> ppb
                        </h2>
                        <p class="leading-relaxed">Arsenic (filter)</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-blue-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">5</h2>
                        <p class="leading-relaxed">Places</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center container px-5 py-20 mx-auto flex
                flex-wrap">
                <button onclick="toggleSection()"
                    class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg ">More</button>
            </div>

        </div>
    </section>




    <section style="display: none;" id="TableSection">

        <div class="flex flex-col overflow-x-auto mb-10">
            <div class="sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium blue:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">ID</th>
                                    <th scope="col" class="px-6 py-4">Date and Time</th>
                                    <th scope="col" class="px-6 py-4">Filter (ppb)</th>
                                    <th scope="col" class="px-6 py-4">Raw (ppb)</th>
                                    <th scope="col" class="px-6 py-4">Flow (Ltrs.)</th>
                                    <th scope="col" class="px-6 py-4">Geolocation</th>
                                    <th scope="col" class="px-6 py-4">Remark</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($records as $cell_data){ ?>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                        <?=$cell_data[0]?>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <?=$cell_data[1]?>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <?=$cell_data[2]?>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <?=$cell_data[3]?>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <?=$cell_data[4]?>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <?=$cell_data[5]?>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <?=$cell_data[6]?>
                                    </td>

                                </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <hr>


        <div class="flex justify-center container px-5 py-20 mb-10 mx-auto flex flex-wrap">
            <a href="download.php?id=<?php echo $id; ?>" target="_blank">
                <button
                    class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">
                    Download
                </button>
            </a>
        </div>


    </section>



    <script>
        function toggleSection() {
            var section = document.getElementById("TableSection");
            if (section.style.display === "none") {
                section.style.display = "block";
            } else {
                section.style.display = "none";
            }
        }
    </script>




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
