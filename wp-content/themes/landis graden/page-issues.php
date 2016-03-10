<?php get_header();
$data = get_option('page_issues');
foreach ($data as $key=>$value) {
    $data[$key] = stripslashes($value);
}
$data_banner = get_option('page_issues_banner');
foreach ($data_banner as $key=>$value) {
    $data_banner[$key] = stripslashes($value);
}

$block1_img = $data_banner['block1_img'];
$block2_title = $data['block2_title'];
?>
<div class="container-fluid" style="background-image: url('<?php echo $data_banner['block1_img']?>'); background-attachment: fixed; background-size: cover; min-height: 550px;">
    <div class="row">
        <div>
            <div class="col-xs-12 text-center title-text white-text" style="padding-left: 0px;padding-right: 0px;margin-top:20%;">
                <h1><?php echo $data_banner['block1_title']?></h1>
                <span><?php echo $data_banner['block1_body']?></span>
            </div>
        </div> 
    </div>
</div>
<div class="container-fluid">
    <div class="row" style="padding-top: 65px;">
        <div class="col-xs-12 text-center">
            <h1><?php echo $block2_title ?></h1>
        </div>
        <div class="col-xs-12 col-sm-6 text-center col-sm-offset-3 revealOnScroll" data-animation="flipInX">
            <p><?php echo $data['block2_body'] ?></p>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <p><?php echo $data['block2_issue_body'] ?></p>
        </div>
        <!-- If only 1 issue entered -->
        <?php if (! empty($data['block2_issue1']) && empty($data['block2_issue2'])) { ?>
        <div id="issue1" class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
            <h3><?php echo $data['block2_issue1_title']?></h3>
        </div>
        <div id="issue1_body" class="col-xs-12 issue-body">
            <h3><?php echo $data['block2_issue1_title']?></h3>
            <p><?php echo $data['block2_issue1']?></p>
        </div>
        <!-- If 2 issues entered -->
        <?php } if (!empty($data['block2_issue2']) && empty($data['block2_issue3'])){ ?>
        <div class="col-xs-12 no-pad">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center">
                <div id="issue1" class="col-xs-6">
                    <h3><?php echo $data['block2_issue1_title']?></h3>
                </div>
                <div id="issue2" class="col-xs-6">
                    <h3><?php echo $data['block2_issue2_title']?></h3>
                </div>
            </div>
            <div id="issue1_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue1_title']?></h3>
                <p><?php echo $data['block2_issue1']?></p>
            </div>        
            <div id="issue2_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue2_title']?></h3>
                <p><?php echo $data['block2_issue2']?></p>
            </div>
        </div>
        <!-- If 3 issues entered -->
        <?php } if (!empty($data['block2_issue3']) && empty($data['block2_issue4'])){ ?>
        <div class="col-xs-12 no-pad">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div id="issue1" class="col-xs-4">
                    <h3><?php echo $data['block2_issue1_title']?></h3>
                </div>
                <div id="issue2" class="col-xs-4">
                    <h3><?php echo $data['block2_issue2_title']?></h3>
                </div>
                <div id="issue3" class="col-xs-4">
                    <h3><?php echo $data['block2_issue3_title']?></h3>
                </div>
            </div>
            <div id="issue1_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue1_title']?></h3>
                <p><?php echo $data['block2_issue1']?></p>
            </div>        
            <div id="issue2_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue2_title']?></h3>
                <p><?php echo $data['block2_issue2']?></p>
            </div>
            <div id="issue3_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue3_title']?></h3>
                <p><?php echo $data['block2_issue3']?></p>
            </div>
        </div>
        <!-- If 4 issues entered -->
        <?php } if (!empty($data['block2_issue4']) && empty($data['block2_issue5'])){ ?>
        <div class="col-xs-12 no-pad">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div id="issue1" class="col-xs-4">
                    <h3><?php echo $data['block2_issue1_title']?></h3>
                </div>
                <div id="issue2" class="col-xs-4">
                    <h3><?php echo $data['block2_issue2_title']?></h3>
                </div>
                <div id="issue3" class="col-xs-4">
                    <h3><?php echo $data['block2_issue3_title']?></h3>
                </div>
                <div id="issue4" class="col-xs-4">
                    <h3><?php echo $data['block2_issue4_title']?></h3>
                </div>
            </div>
            <div id="issue1_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue1_title']?></h3>
                <p><?php echo $data['block2_issue1']?></p>
            </div>        
            <div id="issue2_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue2_title']?></h3>
                <p><?php echo $data['block2_issue2']?></p>
            </div>
            <div id="issue3_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue3_title']?></h3>
                <p><?php echo $data['block2_issue3']?></p>
            </div>
            <div id="issue4_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue4_title']?></h3>
                <p><?php echo $data['block2_issue4']?></p>
            </div>
        </div>
        <!-- If 5 issues entered -->
        <?php } if (!empty($data['block2_issue5']) && empty($data['block2_issue6'])){ ?>
        <div class="col-xs-12 no-pad">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div id="issue1" class="col-xs-4">
                    <h3><?php echo $data['block2_issue1_title']?></h3>
                </div>
                <div id="issue2" class="col-xs-4">
                    <h3><?php echo $data['block2_issue2_title']?></h3>
                </div>
                <div id="issue3" class="col-xs-4">
                    <h3><?php echo $data['block2_issue3_title']?></h3>
                </div>
                <div id="issue4" class="col-xs-4">
                    <h3><?php echo $data['block2_issue4_title']?></h3>
                </div>
                <div id="issue5" class="col-xs-4">
                    <h3><?php echo $data['block2_issue5_title']?></h3>
                </div>
            </div>
            <div id="issue1_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue1_title']?></h3>
                <p><?php echo $data['block2_issue1']?></p>
            </div>        
            <div id="issue2_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue2_title']?></h3>
                <p><?php echo $data['block2_issue2']?></p>
            </div>
            <div id="issue3_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue3_title']?></h3>
                <p><?php echo $data['block2_issue3']?></p>
            </div>
            <div id="issue4_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue4_title']?></h3>
                <p><?php echo $data['block2_issue4']?></p>
            </div>
            <div id="issue5_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue5_title']?></h3>
                <p><?php echo $data['block2_issue5']?></p>
            </div>
        </div>
        <!-- If 6 issues entered -->
        <?php } if (!empty($data['block2_issue6']) && empty($data['block2_issue7'])){ ?>
        <div class="col-xs-12 no-pad">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div id="issue1" class="col-xs-4">
                    <h3><?php echo $data['block2_issue1_title']?></h3>
                </div>
                <div id="issue2" class="col-xs-4">
                    <h3><?php echo $data['block2_issue2_title']?></h3>
                </div>
                <div id="issue3" class="col-xs-4">
                    <h3><?php echo $data['block2_issue3_title']?></h3>
                </div>
                <div id="issue4" class="col-xs-4">
                    <h3><?php echo $data['block2_issue4_title']?></h3>
                </div>
                <div id="issue5" class="col-xs-4">
                    <h3><?php echo $data['block2_issue5_title']?></h3>
                </div>
                <div id="issue6" class="col-xs-4">
                    <h3><?php echo $data['block2_issue6_title']?></h3>
                </div>
            </div>
            <div id="issue1_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue1_title']?></h3>
                <p><?php echo $data['block2_issue1']?></p>
            </div>        
            <div id="issue2_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue2_title']?></h3>
                <p><?php echo $data['block2_issue2']?></p>
            </div>
            <div id="issue3_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue3_title']?></h3>
                <p><?php echo $data['block2_issue3']?></p>
            </div>
            <div id="issue4_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue4_title']?></h3>
                <p><?php echo $data['block2_issue4']?></p>
            </div>
            <div id="issue5_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue5_title']?></h3>
                <p><?php echo $data['block2_issue5']?></p>
            </div>
            <div id="issue6_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue6_title']?></h3>
                <p><?php echo $data['block2_issue6']?></p>
            </div>
        </div>
        <!-- If 7 issues entered -->
        <?php } if (!empty($data['block2_issue7']) && empty($data['block2_issue8'])){ ?>
        <div class="col-xs-12 no-pad">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div id="issue1" class="col-xs-4">
                    <h3><?php echo $data['block2_issue1_title']?></h3>
                </div>
                <div id="issue2" class="col-xs-4">
                    <h3><?php echo $data['block2_issue2_title']?></h3>
                </div>
                <div id="issue3" class="col-xs-4">
                    <h3><?php echo $data['block2_issue3_title']?></h3>
                </div>
                <div id="issue4" class="col-xs-4">
                    <h3><?php echo $data['block2_issue4_title']?></h3>
                </div>
                <div id="issue5" class="col-xs-4">
                    <h3><?php echo $data['block2_issue5_title']?></h3>
                </div>
                <div id="issue6" class="col-xs-4">
                    <h3><?php echo $data['block2_issue6_title']?></h3>
                </div>
                <div id="issue7" class="col-xs-4">
                    <h3><?php echo $data['block2_issue7_title']?></h3>
                </div>
            </div>
            <div id="issue1_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue1_title']?></h3>
                <p><?php echo $data['block2_issue1']?></p>
            </div>        
            <div id="issue2_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue2_title']?></h3>
                <p><?php echo $data['block2_issue2']?></p>
            </div>
            <div id="issue3_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue3_title']?></h3>
                <p><?php echo $data['block2_issue3']?></p>
            </div>
            <div id="issue4_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue4_title']?></h3>
                <p><?php echo $data['block2_issue4']?></p>
            </div>
            <div id="issue5_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue5_title']?></h3>
                <p><?php echo $data['block2_issue5']?></p>
            </div>
            <div id="issue6_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue6_title']?></h3>
                <p><?php echo $data['block2_issue6']?></p>
            </div>
            <div id="issue7_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue7_title']?></h3>
                <p><?php echo $data['block2_issue7']?></p>
            </div>
        </div>
        <!-- If 8 issues entered -->
        <?php } if (!empty($data['block2_issue8']) && empty($data['block2_issue9'])){ ?>
        <div class="col-xs-12 no-pad">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div id="issue1" class="col-xs-4">
                    <h3><?php echo $data['block2_issue1_title']?></h3>
                </div>
                <div id="issue2" class="col-xs-4">
                    <h3><?php echo $data['block2_issue2_title']?></h3>
                </div>
                <div id="issue3" class="col-xs-4">
                    <h3><?php echo $data['block2_issue3_title']?></h3>
                </div>
                <div id="issue4" class="col-xs-4">
                    <h3><?php echo $data['block2_issue4_title']?></h3>
                </div>
                <div id="issue5" class="col-xs-4">
                    <h3><?php echo $data['block2_issue5_title']?></h3>
                </div>
                <div id="issue6" class="col-xs-4">
                    <h3><?php echo $data['block2_issue6_title']?></h3>
                </div>
                <div id="issue7" class="col-xs-4">
                    <h3><?php echo $data['block2_issue7_title']?></h3>
                </div>
                <div id="issue8" class="col-xs-4">
                    <h3><?php echo $data['block2_issue8_title']?></h3>
                </div>
            </div>
            <div id="issue1_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue1_title']?></h3>
                <p><?php echo $data['block2_issue1']?></p>
            </div>        
            <div id="issue2_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue2_title']?></h3>
                <p><?php echo $data['block2_issue2']?></p>
            </div>
            <div id="issue3_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue3_title']?></h3>
                <p><?php echo $data['block2_issue3']?></p>
            </div>
            <div id="issue4_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue4_title']?></h3>
                <p><?php echo $data['block2_issue4']?></p>
            </div>
            <div id="issue5_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue5_title']?></h3>
                <p><?php echo $data['block2_issue5']?></p>
            </div>
            <div id="issue6_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue6_title']?></h3>
                <p><?php echo $data['block2_issue6']?></p>
            </div>
            <div id="issue7_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue7_title']?></h3>
                <p><?php echo $data['block2_issue7']?></p>
            </div>
            <div id="issue8_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue8_title']?></h3>
                <p><?php echo $data['block2_issue8']?></p>
            </div>
        </div>
        <!-- If 9 issues entered -->
        <?php } if (!empty($data['block2_issue9'])){ ?>
        <div class="col-xs-12 no-pad">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div id="issue1" class="col-xs-4">
                    <h3><?php echo $data['block2_issue1_title']?></h3>
                </div>
                <div id="issue2" class="col-xs-4">
                    <h3><?php echo $data['block2_issue2_title']?></h3>
                </div>
                <div id="issue3" class="col-xs-4">
                    <h3><?php echo $data['block2_issue3_title']?></h3>
                </div>
                <div id="issue4" class="col-xs-4">
                    <h3><?php echo $data['block2_issue4_title']?></h3>
                </div>
                <div id="issue5" class="col-xs-4">
                    <h3><?php echo $data['block2_issue5_title']?></h3>
                </div>
                <div id="issue6" class="col-xs-4">
                    <h3><?php echo $data['block2_issue6_title']?></h3>
                </div>
                <div id="issue7" class="col-xs-4">
                    <h3><?php echo $data['block2_issue7_title']?></h3>
                </div>
                <div id="issue8" class="col-xs-4">
                    <h3><?php echo $data['block2_issue8_title']?></h3>
                </div>
                <div id="issue9" class="col-xs-4">
                    <h3><?php echo $data['block2_issue9_title']?></h3>
                </div>
            </div>
            <div id="issue1_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue1_title']?></h3>
                <p><?php echo $data['block2_issue1']?></p>
            </div>        
            <div id="issue2_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue2_title']?></h3>
                <p><?php echo $data['block2_issue2']?></p>
            </div>
            <div id="issue3_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue3_title']?></h3>
                <p><?php echo $data['block2_issue3']?></p>
            </div>
            <div id="issue4_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue4_title']?></h3>
                <p><?php echo $data['block2_issue4']?></p>
            </div>
            <div id="issue5_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue5_title']?></h3>
                <p><?php echo $data['block2_issue5']?></p>
            </div>
            <div id="issue6_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue6_title']?></h3>
                <p><?php echo $data['block2_issue6']?></p>
            </div>
            <div id="issue7_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue7_title']?></h3>
                <p><?php echo $data['block2_issue7']?></p>
            </div>
            <div id="issue8_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue8_title']?></h3>
                <p><?php echo $data['block2_issue8']?></p>
            </div>
            <div id="issue9_body" class="col-xs-12 issue-body">
                <h3><?php echo $data['block2_issue9_title']?></h3>
                <p><?php echo $data['block2_issue9']?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="container-fluid">
    <div class="row row2">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center">
            <h1><?php echo $data['block3_title']?></h1>
            <p><?php echo $data['block3_body']?></p>
        </div>
    </div>
    <div class="row row2" style="background: url('<?php echo $data['block3_img'] ?>'); min-height: 450px; z-index: 0; color: #fff;">
        <div class="col-xs-12 revealOnScroll" data-animation="flipInX">
            <div class="col-xs-12 col-sm-6" style="padding-left: 30px;padding-right: 30px;" >
                <h1>Join Team Landis.</h1>
                <?php  if (isset($_POST['join-submit']) && ! empty($_POST['message_email'])) { 
    $email = $_POST['message_email'];
} ?>
                <form id="join-team" action="<?php echo home_url();?>/join" method="post">
                    <div class="row">
                        <input id="join_email" class="form-width" type="text" name="message_email" placeholder="email address" value="<?php echo esc_attr($_POST['message_email']); ?>" style="color:darkgray;">
                    </div>
                    <div class="row">
                        <input id="join-btn" type="submit" name="join-submit" class="btn btn-primary" value="Next">
                    </div>
                </form>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-12 col-sm-5">
                <h1>Contribute.</h1>
                <button class="btn lmd-give-btn">$35</button>
                <button class="btn lmd-give-btn">$100</button>
                <button class="btn lmd-give-btn">$250</button>
                <button class="btn lmd-give-btn">$500</button>
                <button class="btn lmd-give-btn">$1000</button>
                <br>
                <a href="<?php echo home_url();?>/donate">
                    <button class="btn btn-primary" style="padding: 45px;padding-top: 15px; padding-bottom: 15px; text-transform: uppercase; margin-top: 20px; font-family: 'Open-bold', sans-serif;" >Next</button>
                </a>
            </div>
        </div>
    </div>
</div>
<? get_footer(); ?>