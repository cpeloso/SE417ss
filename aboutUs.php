<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align:center;font-weight:bold;">ABOUT US</h2>
    <p style="text-align:center;">We are an e-commerce website! Feel free to shop around safely knowing that your information is safe.</p>

    <?php
        //$thing = fortniteAPICall("POST", "https://fortnite-public-api.theapinetwork.com/prod09/store/get");
    ?>
    <p><?php?></p>

    <?php

        $thing = file_get_contents('https://fortnite-public-api.theapinetwork.com/prod09/store/get');

        $thing = json_decode($thing, true);

        /*
        foreach($thing[items] as $thi)
        {
            foreach($thi as $th)
            {
                if($th instanceof JSONObject)
                {
                    foreach($th as $t)
                    {
                        echo $t;
                    }
                }
                else{
                    echo $th;
                    echo "<br>";
                }


            }
        }
        */

        for($i = 0; $i < count($thing); $i++)
        {
            if($i == 6)
            {
                foreach($thing["items"] as $it)
                {
                    $count = 0;
                    foreach($it["item"] as $it2)
                    {
                        if($count == 2)
                        {
                            ?>
                            <img src="<?php echo $it2; ?>" alt="ShopImage" style="width:100px;height:100px;" />
                            <?php
                        }
                        elseif($count == 3)
                        {
                            
                        }
                        else{
                            echo $it2;
                            echo "<br>";
                        }
                        $count++;

                    }
                    echo "<br>";
                }
            }


        }



        
    ?>

    <img src="google.com" alt="google" >

    <script>

        

    </script>

    

</body>
</html>