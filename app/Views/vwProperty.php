</br></br>

<div class="container">
    <div class="row">


        <?php 
        foreach($property as $item){
            $template="
            <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='{$item->photos}' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$item->Country}</h5>
                        <p class='card-text'>
                        City: {$item->City}</br>
                        Location: {$item->Location}</br>
                        Value: {$item->Location}
                    
                        </p>
                        <a href='#' class='btn btn-primary'>Go somewhere</a>
                    </div>
                </div>
                </br>
            </div>";

            echo $template;


        }

        ?>

    </div>
</div>

