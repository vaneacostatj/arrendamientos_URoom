<div class="" id="fondoHome2">
    </br></br>

    <div class="container p-5">
        <div class="row">


            <?php

            foreach ($property as $item) {

                if ($item->Zone == "Rural") {

                    $Reserve = base_url() . "/public/indexReservas?ID={$item->ID}";

                    $template = "                
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
                            <a href='{$Reserve}' class='btn btn-outline-warning'>Reserve</a>
                        </div>
                    </div>
                    </br>
                </div>";

                    echo $template;
                };
            };


            ?>

        </div>
    </div>
</div>