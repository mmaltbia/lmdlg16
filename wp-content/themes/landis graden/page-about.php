<?php 

get_header(); 
$data = get_option('page_about');
$data_banner = get_option('page_about_banner');
foreach ($data as $key=>$value) {
    $data[$key] = stripslashes($value);
}

$block1_img = $data_banner['block1_img'];
$block3_panel1_title = $data['block3_panel1_title'];



?>
<!-- Container 1 -->
<div class="container-fluid" style="background-image: url('<?php echo $block1_img?>'); background-attachment: fixed; background-size: stretch; min-height: 550px;">
    <div class="row">
        <div>
            <div class="col-xs-12 text-center title-text white-text" style="padding-left: 0px;padding-right: 0px;margin-top:20%;">
                <h1><?php echo $data_banner['block1_title']?></h1>
                <span><?php echo $data_banner['block1_body']?></span>
            </div>
        </div> 
    </div>
</div>
<div class="container-fluid" style="padding-bottom: 100px;">
    <div class="row" style="background: #dcdcdc; padding:50px; padding-top: 100px; padding-bottom: 100px;">
       <?php
            if(empty($data['block2_video'])){ ?>
                
        <div class="col-xs-12 text-center" style="background: #fff;padding: 60px; position: relative; box-shadow: 2px 2px 7px #999;">
            <p><?php echo $data['block2_body']?></p>
            <div class="text-center" style="margin-left:-35px">
                <img src="<?php echo get_bloginfo('template_directory')?>/images/quote.svg" style="position:absolute; top: -16px;">
            </div>
        </div>
    <?php } else { ?>
        <div class="col-xs-12 col-sm-7" style="background: #fff;padding: 60px; position: relative; box-shadow: 2px 2px 7px #999;">
            <p><?php echo $data['block2_body']?></p>
            <div class="text-center" style="margin-left:-35px">
                <img src="<?php echo get_bloginfo('template_directory')?>/images/quote.svg" style="position:absolute; top: -16px;">
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xib_-YfVtS0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    <?php } ?>
        
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center block">
            <h1 class="gray-box"><?php echo $data['block3_title'] ?></h1>
        </div>
        <div class="col-xs-12 col-sm-6 text-center col-sm-offset-3">
            <p><?php echo $data['block3_body'] ?></p>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePanel1" aria-expanded="true" aria-controls="collapseOne" style="font-weight:bold;">
                                <?php echo $data['block3_panel1_title'] ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsePanel1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <?php echo $data['block3_panel1'] ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePanel2" aria-expanded="false" aria-controls="collapseTwo" style="font-weight:bold;">
                                <?php echo $data['block3_panel2_title'] ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsePanel2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <?php echo $data['block3_panel2'] ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-weight:bold;">
                                <?php echo $data['block3_panel3_title'] ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <?php echo $data['block3_panel3'] ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-weight:bold;">
                                <?php echo $data['block3_panel4_title'] ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <?php echo $data['block3_panel4'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    get_footer();
?>