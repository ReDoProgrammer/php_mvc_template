<html>
    <head>
    
    </head>
    <body>
        <h1>Home Page (index)</h1>
        <?php

        // $data ==> data that was passed via the view
        $testData = $data['test'];
        print_r($testData);
        // Get the data via functions
        // Functions are the attribute names of the table
        // $testData->fullname;
        // $testData->testAttribute2;

        // $data ==> data that was passed via the view
        // $parameters = $data['parameters'];

        // Get the data via an array
        // echo "Parameter 1: " . $parameters[0] . '<br>';
        // echo "Parameter 2: " . $parameters[1] . '<br>';
        // echo "Parameter 3: " . $parameters[2] . '<br>';

        ?>
    </body>
</html>