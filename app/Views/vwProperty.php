<div class="container">
    <div class="row">


        <?php 
        foreach($createRegister as $item){

            $route = base_url()."/deleteProperty?id={$item->id}";
            $template ="   
            <div class='card' style='width: 18rem;'>
                <img src='{$item->photos}' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'> Apartamento </h5>
                    <p class='card-text'>
                    
                    Document: {$item->document}   City: {$item->city} 
                    Country: {$item->country}     address: {$item->address}  
                    rooms: {$item->rooms}         bathrooms: {$item->bathrooms} 
                    area: {$item->area}           gas: {$item->gas}   
                    transport: {$item->transport} location: {$item->location} 
                    value: {$item->value}
                    
                    </p>
                    <a href='{$route}' class='btn btn-primary'>Go somewhere</a>
                </div>
            </div> ";

            echo $template;   

            }
            


        ?>

    </div>
</div>









