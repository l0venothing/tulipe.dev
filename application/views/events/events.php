<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
    <h1>Nos Evenements</h1>
    <a href="<?php echo base_url(" Events/create ")?>" class="btn btn-primary">Cree un Evenement</a>
    <?php
    foreach($query->result() as $row){       
    ?>
        <div class="row">
            <div class="col-xs-3 col-xs-push-3">
                <div class="cadre panel panel-default">
                    <div class="panel panel-content">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <?php echo $row->nom; ?>
                            </li>
                            <li class="list-group-item">
                                <img class="img-responsive img-projets" src="<?= $row->image; ?>" </li>
                                <li class="list-group-item">
                                    <?php echo $row->adresse; ?>
                                </li>

                                <li class="list-group-item">
                                    <a href="<?php echo $row->lien; ?>"><?php echo $row->nom; ?></a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-xs-push-3 events-description">
                <div class="panel panel-content">
                    <div class="list-group">
                        <div class="list-group-item">
                            <?php echo $row->description; ?>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url("Events/more/$row->id")?>" class="btn btn-primary">En savoir plus</a>

        </div>
        <?php 
} ?>