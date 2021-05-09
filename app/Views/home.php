<div>
    <img src="https://i.imgur.com/hhGpmFr.jpg" class="img-fluid" alt="Responsive image">
</div>
</br></br>

<div class="container" style = "float: right">
    <div class="row">


        <?php 
        
        foreach($property as $item){

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
                            <a href='#' class='btn btn-primary'>Reserve</a>
                        </div>
                    </div>
                    </br>
                </div>";
    
                echo $template;     

        }

        ?>

    </div>
</div>
<div class="container" style = "float: letf" >
    <div class="row">

    <img src="https://i.imgur.com/NKLDJMJ.jpg" class="img-fluid" alt="Responsive image">
       

    </div>
</div>