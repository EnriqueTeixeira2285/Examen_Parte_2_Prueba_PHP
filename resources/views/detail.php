
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
 
<!-- Tema opcional -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
 
<!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <?=$name?></h4>
                        <small><cite title="San Francisco, USA"> <?=$address?> <i class="glyphicon glyphicon-map-marker">
                        </i></cite></smal
                        <p>Email :
                             <?=$email?>
                            <br />Phone :
                            <?=$phone?>
                            <br />Position :
                            <?=$position?>
                             <br />Salary :
                            <?=$salary?>
                             <br />Skills : <br />
                       
                           <?php for ($i=0; $i <count($ski) ; $i++) { ?>
                                <?="<p style='text-indent: 1cm;''>".$ski[$i]."<br></p>"?>
                           <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
