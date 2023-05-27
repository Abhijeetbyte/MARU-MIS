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
                                  <h1 class="ml-3 text-1xl title-font mb-4
                                      text-gray-900">Bihar Bal Bhawan Kilkari<br/>(Department
                                          of Education)<br/> and <br/>
                                                  Research cum training center "PRANJAL"<br/>
                                                      (Public health Engineering Department)
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
                <span class="ml-3 text-xl">Arsenic Project (MIS)</span>
            </a>
            
            
            
         
            <nav class="md:ml-auto flex flex-wrap items-center text-base
                    justify-center">
                
                 
                 <button  onclick="window.location.href='add.php';" class= "mr-5 inline-flex items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none hover:bg-blue-600 rounded text-white text-base mt-4 md:mt-0">Add data
                </button>
                
                 <button  onclick="window.location.href='about.php';" class="mr-5 inline-flex items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none hover:bg-blue-600 rounded text-white text-base mt-4 md:mt-0">About us
                </button>
                
               
    
            </nav>

        </div>
    </header>


    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-3xl text-2xl mb-4 font-medium text-gray-900"> Magnetic Arsenic Removal
                    Unit
                </h1>
                <p class="mb-8 leading-relaxed">Based on indigenous
                    molecular magnetic arsenic repulsion technology,
                    deployed for pilot testing since 2 years.</p>

                    <form action="">
                    <div class="flex w-full md:justify-start justify-center items-end">
                        <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">

                            <label for="hero-field" class="leading-7 text-sm
                                    text-gray-600">Filter ID</label>
                            <input type="text" id="fid" name="id" value='BRAF01' class="w-full bg-gray-100 rounded border
                                    bg-opacity-50 border-gray-300 focus:ring-2
                                    focus:ring-indigo-200 focus:bg-transparent
                                    focus:border-indigo-500 text-base outline-none
                                    text-gray-700 py-1 px-3 leading-8
                                    transition-colors duration-200 ease-in-out">
                        </div>
                        <input type="submit" value="OK" class="inline-flex text-white bg-blue-500 border-0
                                py-2 px-4 focus:outline-none rounded text-lg">
                    </div>
                </form>

            </div>
            
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="Filter img" src="images/Arsenic-Filter.png">
            </div>
        </div>
    </section>




<?php



// Extract POST variables

$id = $_REQUEST['id'] ?? 'BRAF01'; // fetch id value or with a default variable




// Setting Variables

$dir = 'data'; // default folder name, files (.csv) store inside it
$filename = $dir . '/' . $id . '.csv'; // file naming acc. to ID no.
$records = [];  // empty array to store all records
$last_record = [];  // empty array to store last record




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




  // Get the last row data

  $last_record = array_slice($records, count($records)-1);

  // extract specific columns data for highlights
  $data_3 = $last_record[0][2] ?? '0'; // value or with a default variable;
  $data_4 = $last_record[0][3] ?? '0'; // value or with a default variable;
  $data_5 = $last_record[0][4] ?? '0'; // alue or with a default variable;



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
                        <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo round($data_5/1000,2); ?>K Liters</h2>
                        <p class="leading-relaxed">Served</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-blue-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <circle cx="9" cy="8" r="7"></circle>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $data_4; ?> ppb</h2>
                        <p class="leading-relaxed">Arsenic (source)</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-blue-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <circle cx="9" cy="8" r="7"></circle>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $data_3; ?> ppb</h2>
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
                <button onclick="toggleSection()" class = "inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg " >More</button>
            </div>

        </div>
    </section>


    

<section style="display: none;" id="TableSection">

<div class="flex flex-col overflow-x-auto">
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
              <td class="whitespace-nowrap px-6 py-4 font-medium"><?=$cell_data[0]?></td>
              <td class="whitespace-nowrap px-6 py-4"><?=$cell_data[1]?></td>
              <td class="whitespace-nowrap px-6 py-4"><?=$cell_data[2]?></td>
              <td class="whitespace-nowrap px-6 py-4"><?=$cell_data[3]?></td>
              <td class="whitespace-nowrap px-6 py-4"><?=$cell_data[4]?></td>
              <td class="whitespace-nowrap px-6 py-4"><?=$cell_data[5]?></td>
              <td class="whitespace-nowrap px-6 py-4"><?=$cell_data[6]?></td>
    
            </tr>
            <?php  } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<br/>
<br/>
 <div class="flex justify-center container px-5 py-20 mx-auto flex
                flex-wrap">
                <button class = "inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg "> <a href="https://marumis.tech/data/<?php echo $id; ?>.csv" target="_blank">Download</a> </button>
  </div>
<br/>
<br/>
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
                Copyright © 2023 Arsenic Quality Logger. designed by
                <a href="http://www.kilkaribihar.in/" class="text-white
                        ml-1" rel="noopener noreferrer" target="_blank">Bihar Bal Bhawan Kilkari</a>
            </p>
        </div>
    </footer>




</body>

</html>