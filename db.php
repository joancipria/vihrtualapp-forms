<?php
    // Connect / create database
	$conn=new SQLite3('./db.db') or die("Unable to open database!");
	
    // Create 'datos' table if not exists
	$query="CREATE TABLE IF NOT EXISTS `datos`(id TEXT PRIMARY KEY NOT NULL, age TEXT, gender TEXT, studies TEXT, exp1 TEXT, exp2 TEXT, k1 TEXT, k2 TEXT, k3 TEXT, k4 TEXT, k5 TEXT, k6 TEXT, k7 TEXT, k8 TEXT, k9 TEXT, k10 TEXT, k11 TEXT, k12 TEXT, k13 TEXT, k14 TEXT, k15 TEXT, k16 TEXT, k17 TEXT, k18 TEXT, k19 TEXT, k20 TEXT, k21 TEXT, k22 TEXT, k23 TEXT, k24 TEXT, k25 TEXT, k26 TEXT, k27 TEXT, k28 TEXT, k29 TEXT, k30 TEXT, k31 TEXT, k32 TEXT, k33 TEXT, k34 TEXT, k35 TEXT, k36 TEXT, c1 TEXT, c2 TEXT, c3 TEXT, c4 TEXT, c5 TEXT, c6 TEXT, c7 TEXT, c8 TEXT, c9 TEXT, c10 TEXT, c11 TEXT, c12 TEXT, c13 TEXT, c14 TEXT, c15 TEXT, c16 TEXT)"; 
	$conn->exec($query);
    
    // Stores form result
    function store($id, $age, $gender, $studies, $exp1, $exp2, $k1, $k2, $k3, $k4, $k5, $k6, $k7, $k8, $k9, $k10, $k11, $k12, $k13, $k14, $k15, $k16, $k17, $k18, $k19, $k20, $k21, $k22, $k23, $k24, $k25, $k26, $k27, $k28, $k29, $k30, $k31, $k32, $k33, $k34, $k35, $k36, $c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10, $c11, $c12, $c13, $c14, $c15, $c16){
        $db = new PDO("sqlite:db.db");
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $qry = $db->prepare(
            'INSERT INTO datos (id, age, gender, studies, exp1, exp2, k1, k2, k3, k4, k5, k6, k7, k8, k9, k10, k11, k12, k13, k14, k15, k16, k17, k18, k19, k20, k21, k22, k23, k24, k25, k26, k27, k28, k29, k30, k31, k32, k33, k34, k35, k36, c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13, c14, c15, c16) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        
        try {
            $qry->execute(array($id, $age, $gender, $studies, $exp1, $exp2, $k1, $k2, $k3, $k4, $k5, $k6, $k7, $k8, $k9, $k10, $k11, $k12, $k13, $k14, $k15, $k16, $k17, $k18, $k19, $k20, $k21, $k22, $k23, $k24, $k25, $k26, $k27, $k28, $k29, $k30, $k31, $k32, $k33, $k34, $k35, $k36, $c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10, $c11, $c12, $c13, $c14, $c15, $c16));
        }
        catch (Exception $ex) {
            console_log($ex);
        }
        
        return $db->lastInsertId();
        
    }

    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
    ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }
?>