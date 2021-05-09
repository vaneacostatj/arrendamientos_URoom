</br></br>

<div class="container">
    <div class="row">


        <?php 
        
        foreach($property as $item){

            $deleteRoute = base_url()."/public/deleteProperty?ID={$item->ID}";
            $updateRoute = base_url()."/public/updateProperty?ID={$item->ID}";
            $template="
            <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='{$item->photos}' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$item->Dwelling}</h5>
                        <p class='card-text'>
                        País: {$item->Country}
                        City: {$item->City}</br>
                        Location: {$item->Location}</br>
                        Value: {$item->Location}
                    
                        </p>
                        <a href='{$deleteRoute}' class='btn btn-danger'>delete</a>
                        <a href='{$updateRoute}' class='btn btn-primary'>Update</a>
                    </div>
                </div>
                </br>
            </div>";

            echo $template;


        }

        ?>

    </div>
</div>

