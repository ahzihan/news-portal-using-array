<?php
$myArray = array(
    array('photo' => '1.jpg', 'heading' => 'POS trends shaping the future of retail', 'description' => 'POS systems have gone from merely being a tool to record sales transactions to a robust platform for improving customer experience. The point of sale system is the very heart and soul of any business, one that can integrate marketing, inventory, accounting and data analytics and create synergy between them. According to a report from Grand View Research, global point of sale terminals market is expected to reach USD 108.46 billion by the year 2025. As business owners depend on data to make better decisions for their businesses and customers demand unique shopping experiences, POS systems are becoming the bridge between businesses and consumers.'),
    array('photo' => '2.jpg', 'heading' => 'Misha Sawdagar and Zayed Khan at odds with 18 organisations', 'description' => "Bangladesh Film Producers' Association President Khorshed Alam Khosru told The Daily Star that the actions are in the basis of Misha Sawdagor's irresponsibility, going to the USA before clearing previous allegations, and Zayed Khan's anti-interest activities against artistes that could result in confrontation if he enters the BFDC premises."),
    array('photo' => '3.jpg', 'heading' => 'Cricket’s summer in a bubble a lesson for everyone', 'description' => "Despite England's five-year unbeaten record in home series coming to an end when Australia's Mitchell Starc swept Adil Rashid for a boundary at Old Trafford in the third ODI on Wednesday, the England and Wales Cricket Board (ECB) would still have been proud of what they achieved this summer -- cricket's first summer in a bio-secure bubble.
    The summer was indeed a very successful one as it saw of 18 fixtures -- six Tests, six ODIs and six T20Is split into four series -- completed in just a span of three months with no major collateral damage. It goes without saying that what the ECB has pulled off is not only exemplary but also an inspiration for the rest of the world."),
    array('photo' => '4.jpg', 'heading' => 'Trump or Biden? Peruvian shamans try to predict US election winner', 'description' => "Shaman teacher Ana María Simeón, during the ritual held in a low-lit room of an old building in downtown Lima, said she was in favor of Biden.
    That is why we are cleansing him (...) we have seen that they are attacking him with witchcraft, with a black doll, with a voodoo doll they are shadowing to remove him, said the shaman with necklaces wrapped around her neck.
    During the ritual, the shamans, dressed in Andean ponchos and cloaks, rubbed medicinal plants, fruits and even a live snake on photos of Democratic candidate Biden and Republican Trump."),
);
$profile=array('name'=>'Akbar Hossain','photo'=>'6.jpg');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>    
            /* Set black background color, white text and some padding */
            .content{
                max-height: 200px;
                overflow: hidden;
            }
            
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Messages</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>        
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container text-center">    
            <div class="row">
                <div class="col-sm-3 well">
                    <div class="well">
                        <p><a href="#"><?php echo $profile['name']; ?></a></p>
                        <img src="img/<?php echo $profile['photo']; ?>" class="img-circle" height="65" width="65" alt="Avatar">
                    </div>
                    <div class="well">
                        <p><a href="#">Interests</a></p>
                        <p>
                            <span class="label label-default">News</span>
                            <span class="label label-primary">W3Schools</span>
                            <span class="label label-success">Labels</span>
                            <span class="label label-info">Football</span>
                            <span class="label label-warning">Gaming</span>
                            <span class="label label-danger">Friends</span>
                        </p>
                    </div>
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p><strong>Ey!</strong></p>
                        People are looking at your profile. Find out who.
                    </div>
                    <p><a href="#">Link</a></p>
                    <p><a href="#">Link</a></p>
                    <p><a href="#">Link</a></p>
                </div>
                <div class="col-sm-7">
                    <?php foreach ($myArray as $value) { ?>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="content well">
                                <img src="img/<?php echo $value['photo']; ?>" class="img-circle" height="100" width="100" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="content well">
                                <h4><?php echo $value['heading']; ?></h4>
                                <p style="text-align: justify;"><?php echo $value['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
                <div class="col-sm-2 well">
                    
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <p>Footer Text</p>
        </footer>

    </body>
</html>

