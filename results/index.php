<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
</head>
<body>
<section class="section">
    <div class="container">
    <?php
    // Set your password to view results
    $password = ""; 
    if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
    
        function results(){
            $db = new PDO("sqlite:../db.db");
            $qry = $db->prepare("SELECT * FROM datos");
    
            try {
                $qry->execute();
            }
            catch (Exception $ex) {
                echo $ex;
            }
    
    
            while($row = $qry->fetch()){
                //$cuqResult = (((($c1+$c3+$c5+$c7+$c9+$c11+$c13+$c15)-8)+(40-($c2+$c4+$c6+$c8+$c10+$c12+$c14+$c16)))/64)*100;
                $cuqResult = (((($row['c1']+$row['c3']+$row['c5']+$row['c7']+$row['c9']+$row['c11']+$row['c13']+$row['c15'])-8)+(40-($row['c2']+$row['c4']+$row['c6']+$row['c8']+$row['c10']+$row['c12']+$row['c14']+$row['c16'])))/64)*100;
                $rawHivBeforeResult = ($row['k1']+$row['k2']+$row['k3']+$row['k4']+$row['k5']+$row['k6']+$row['k7']+$row['k8']+$row['k9']+$row['k10']+$row['k11']+$row['k12']+$row['k13']+$row['k14']+$row['k15']+$row['k16']+$row['k17']+$row['k18']);
                $rawHivAfterResult = ($row['k19']+$row['k20']+$row['k21']+$row['k22']+$row['k23']+$row['k24']+$row['k25']+$row['k26']+$row['k27']+$row['k28']+$row['k29']+$row['k30']+$row['k31']+$row['k32']+$row['k33']+$row['k34']+$row['k35']+$row['k36']);
                
                $hivBeforeResult = round(($rawHivBeforeResult*100)/18,2);
                $hivAfterResult = round(($rawHivAfterResult*100)/18,2);
    
                echo "<tr>"."</td>"."<td class='id'>".$row['id']."</td><td class='date'>".date('m/d/Y H:i:s',$row['timestamp'])."<td class='age'>".$row['age']."</td><td class='gender'>".$row['gender']."</td><td class='studies'>".$row['studies']."</td><td class='exp1'>".$row['exp1']."</td><td class='exp2'>".$row['exp2']."</td><td>".$hivBeforeResult."</td><td>".$hivAfterResult."</td><td>".$cuqResult."</td></tr>";
            }
        }
    ?>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title subtitle">Results</p>
            </header>
            <div class="card-content">
                <div id="results" class="content">
                <input class="search mb-4" placeholder="Search" />
                <button onclick="tableToCSV()" style="float: right;" class="button mb-5 ">Export to CSV</button>
                <!-- <a href="../db.db" style="float: right;" class="button mb-5 mr-2">Download DB</a> -->

                    <table class="table">
                        <thead>
                            <tr>
                            <th>Conversation ID</th>
                            <th>Date</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Studies</th>
                            <th>Exp. 1</th>
                            <th>Exp. 2</th>
                            <th>KQ score (before) *</th>
                            <th>KQ score (after) *</th>
                            <th>CUQ score *</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php
                            results();
                            ?>
                        </tbody>
                    </table>
                    <p class="mt-4"><strong>* Out of 100</strong></p>
                </div>
            </div>
        </div>
    <?php } else{ ?>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title subtitle">Results</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <p>Login to see results.</p>
                    <form action="index.php" method="post">
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input class="input" name="password" type="password" placeholder="Type your password">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="button is-link" type="submit" value="Login">
                            </div>
                        </div>           
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</section>
<script>
    var options = {
    valueNames: [ 'id', 'age', 'gender', 'studies', 'exp1', 'exp2' ]
    };

    var userList = new List('results', options);

function tableToCSV() {
 
 // Variable to store the final csv data
 var csv_data = [];

 // Get each row data
 var rows = document.getElementsByTagName('tr');
 for (var i = 0; i < rows.length; i++) {

     // Get each column data
     var cols = rows[i].querySelectorAll('td,th');

     // Stores each csv row data
     var csvrow = [];
     for (var j = 0; j < cols.length; j++) {

         // Get the text data of each cell
         // of a row and push it to csvrow
         csvrow.push(cols[j].innerHTML);
     }

     // Combine each column value with comma
     csv_data.push(csvrow.join(","));
 }

 // Combine each row data with new line character
 csv_data = csv_data.join('\n');

 // Call this function to download csv file 
 downloadCSVFile(csv_data);

}

function downloadCSVFile(csv_data) {

 // Create CSV file object and feed
 // our csv_data into it
 CSVFile = new Blob([csv_data], {
     type: "text/csv"
 });

 // Create to temporary link to initiate
 // download process
 var temp_link = document.createElement('a');

 // Download csv file
 temp_link.download = "Encuesta VIHrtual-App.csv";
 var url = window.URL.createObjectURL(CSVFile);
 temp_link.href = url;

 // This link should not be displayed
 temp_link.style.display = "none";
 document.body.appendChild(temp_link);

 // Automatically click the link to
 // trigger download
 temp_link.click();
 document.body.removeChild(temp_link);
}
</script>
</body>
</html>
