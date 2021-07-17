<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package resta
 */

get_header();
$services_meta = ! empty( resta_meta( 'service_accordions') ) ? resta_meta( 'service_accordions') : '';
$service_faqs = ! empty( resta_meta( 'service_faqs') ) ? resta_meta( 'service_faqs') : '';
$brochure = ! empty( resta_meta( 'brochure') ) ? resta_meta( 'brochure') : '';
$download_icon = RESTA_DIR_ICON_IMG_URI . 'download.svg';
$count = 0;
if( have_posts() ) {
    while( have_posts() ) : the_post();
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

    // print_r($services_meta);
    ?>
        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_area2" style="background-image: url(<?php echo esc_url( $featured_img_url )?>)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3><?php the_title()?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- service_details_start  -->
    <div class="service_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="service_details_left">
                        <h3><?php the_title()?></h3>
                        <?php
                            if ( $services_meta != '' ) {
                                ?>
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php
                                        foreach( $services_meta as $single_item ) {
                                            $count++;
                                            ?>
                                            <a class="<?=($count=='1'?'active 1':'')?>" id="v-pills-<?=$count?>-tab" data-toggle="pill" href="#v-pills-<?=$count?>" role="tab" aria-controls="v-pills-<?=$count?>" aria-selected="<?=$count=='1'?'true':'false'?>"><?=$single_item['title']?></a>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <?php
                        $inner_count = 0;
                        if ( $services_meta != '' ) {
                            foreach( $services_meta as $single_item ) {
                                $inner_count++;
                                ?>
                                <div class="tab-pane fade<?=($inner_count=='1'?' show active':'')?>" id="v-pills-<?=$inner_count?>" role="tabpanel" aria-labelledby="v-pills-<?=$inner_count?>-tab">
                                    <div class="service_details_info">
                                        <h3><?=$single_item['title']?></h3>
                                        <p><?=$single_item['description']?></p>
                                    </div>
                                    <div class="service_thumb">
                                        <?php
                                            if( $single_item['image_id'] ) {
                                                echo wp_get_attachment_image( $single_item['image_id'], 'resta_service_details_thumb_754x410', '', array('alt' => get_the_title() ) );
                                            }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <?php
                        if ( $service_faqs != '' ) {
                            ?>
                            <div class="accordion_area">
                                <div class="faq_ask">
                                    <h3>Frequently ask</h3>
                                    <div id="accordion">
                                        <?php
                                        $faq_count = 0;
                                        foreach( $service_faqs as $single_item ) {
                                            $faq_count++;
                                            ?>
                                            <div class="card">
                                                <div class="card-header" id="heading<?=$faq_count?>">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapse<?=$faq_count?>" aria-expanded="false"
                                                            aria-controls="collapse<?=$faq_count?>">
                                                            <?=$single_item['title']?></span>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapse<?=$faq_count?>" class="collapse" aria-labelledby="heading<?=$faq_count?>"
                                                    data-parent="#accordion" style="">
                                                    <div class="card-body"><?=$single_item['description']?></div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        
                        if ( $brochure != '' ) {
                        ?>
                        <div class="download_brochure d-flex align-items-center justify-content-between">
                            <div class="download_left d-flex align-items-center">
                                <div class="icon">
                                    <img src="<?php echo esc_url($download_icon)?>" alt="download icon">
                                </div>
                                <div class="download_text">
                                    <h3>Download Our Brochure</h3>
                                    <p>Esteem spirit temper too say adieus who direct.</p>
                                </div>
                            </div>
                            <div class="download_right">
                                <a class="boxed-btn3-line" href="<?php echo esc_url($brochure)?>">Download Now</a>
                            </div>
                        </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- service_details_start  -->
    <?php 
    endwhile;
}

// Footer============
get_footer();