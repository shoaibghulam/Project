
        <!--====== WORK PART START ======-->

    <section id="work" class="work-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-25">
                        <h2 class="title">My Recent Works</h2>
                        
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
              
               <?php 
                $x=0;
                foreach($work as $work): 
                if($x==9){
                    break;
                }
                $x++;
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="<?php echo base_url(); ?>assets/images/work/<?php echo $work->wthumb; ?>" alt="work" width="360px" height="360px">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title"><?php echo $work->wtitle; ?></h3>
                                <ul>
                                    <li><a class="image-popup" href="<?php echo base_url(); ?>assets/images/work/<?php echo $work->wthumb; ?>"><i class="lni-plus"></i></a></li>
                                    <li><a href="<?php echo $work->wlink; ?>"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
                    <?php endforeach;?>
             </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-more text-center mt-50">
                        <a class="main-btn" href="#">more works</a>
                    </div> <!-- work more -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== WORK PART ENDS ======-->
