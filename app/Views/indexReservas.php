<div class="class" id="fondoHome">
            </br></br>
            
            <div class="container">
                <div class="row">

<?php
//var_dump($getLog);
//var_dump($getLogProp);

        $user= $getLog->user;

        foreach($property as $item){

           
            $reservRoute = base_url("/public/readReserve?user={$user}")."";
            $template="
     


            <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
                <div class='card text-white bg-secondary mb-3' style='width: 18rem;'>
                    <img src='{$item->photos}' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$item->Dwelling}</h5>
                        <p class='card-text'>
                        País: {$item->Country}
                        City: {$item->City}</br>
                        Location: {$item->Location}</br>
                        Value: {$item->Location}
                    
                        </p>
                        <a href='{$reservRoute}' class='btn btn-outline-warning'>Reserve</a>
                    </div>
                </div>
                </br>
            </div>
            ";

            echo $template;


        }
?>
</div>
    </div>
    </div>
