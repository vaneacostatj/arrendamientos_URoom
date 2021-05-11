

<br>
<div class="container">
    <div class="row">


        <?php

        $route =base_url()."/public/addProperty";
        $template = "   
        <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
            <div class='card mb-3' style='max-width: 540px;'>
                <div class='row g-0'>
                    <div class='col-md-4'>
                        <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png' class='card-img-top' alt='...'>
                    </div>
                    <div class='col-md-8'>
                        <div class='card-body'>
                            <h5 class='card-title'>Card title</h5>
                            <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                            <a href='{$route}' class='btn btn-primary'> Delete </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";


        echo $template;

        ?>

    </div>
</div>

