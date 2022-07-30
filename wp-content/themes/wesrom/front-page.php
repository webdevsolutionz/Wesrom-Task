<?php
get_header(); ?>
<!-- BANNER STArT -->
<section class="banner">
    <div class="container">
        <h3 class="sub-title">
            <?php the_field('banner_title'); ?>
        </h3>
        <h1>
           <?php the_field('banner_description'); ?>
        </h1>
        <a href="<?php the_field('banner_cta_link'); ?>" class="BTN-BG"><?php the_field('banner_cta'); ?></a>
    </div>
</section>
<!-- BANNER END -->

<!-- GROW BUSINESS START-->
<section class="grow-business">
    <div class="container">

        <?php if( have_rows('partners_details') ):?>
                    <?php  while( have_rows('partners_details') ) : the_row();?>
        <div class="card">
            <div class="thumbnail">
                <?php $partner_img = get_sub_field('partner_logo');?>
                <img src="<?php echo $partner_img['url']; ?>" alt="<?php echo $partner_img['alt']; ?>">
            </div>
            <?php the_sub_field('description');?>
            <a href="<?php the_sub_field('button_link');?>" class="BTN-BG"><?php the_sub_field('button_label');?></a>
        </div>
         <?php endwhile;?><?php endif;?>
    </div>
</section>
<!-- GROW BUSINESS END -->

<!-- OUR SERVICE START -->
<secion class="our-service">
    <div class="container">
        <h2><?php the_field('services_title'); ?></h2>
         <?php the_field('services_description'); ?>
        <div class="services-wrap">
        <?php if( have_rows('service_details') ):?>
                    <?php  while( have_rows('service_details') ) : the_row();?>    
            <div class="card">
                <h4><?php the_sub_field('title');?></h4>
               <?php the_sub_field('description');?>
                <a href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_label');?><img src="<?php bloginfo('template_url'); ?>/assets/images/right-arrow.png" alt="Arrow">
                </a>
            </div>
             <?php endwhile;?><?php endif;?>
        </div>
        <div class="btn-wrap"><a href="<?php the_field('book_a_free_consultation_link'); ?>" class="BTN-BG"><?php the_field('book_a_free_consultation_label'); ?></a></div>
    </div>
</secion>
<!-- OUR SERVICE END -->

<!-- WORK WITH US strat -->
<section class="work-us">
    <div class="container">
        <h2><?php the_field('work_with_us_title'); ?></h2>
        <div class="card-wrapper">
            <div class="col-left">
                 <?php if( have_rows('work_with_us_details_left_column') ):?>
                    <?php  while( have_rows('work_with_us_details_left_column') ) : the_row();?>   
                <div class="card">
                    <div class="card-head">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/check-arrow.png" alt="list-item">
                        <h3><?php the_sub_field('title');?></h3>
                    </div>
                    <?php the_sub_field('description');?>
                </div>
                <?php endwhile;?><?php endif;?>
  
            </div>
            <div class="col-right">
                <?php if( have_rows('work_with_us_details_right_column') ):?>
                    <?php  while( have_rows('work_with_us_details_right_column') ) : the_row();?>  
                <div class="card">
                    <div class="card-head">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/check-arrow.png" alt="list-item">
                        <h3><?php the_sub_field('title');?></h3>
                    </div>
                   <?php the_sub_field('description');?>
                </div>
                 <?php endwhile;?><?php endif;?>
            </div>
        </div>
    </div>
</section>
<!-- WORK WITH US END -->

<!-- TESTIMONIAL START -->
<section class="testimonial">
    <div class="container">
        <h2><?php the_field('testimonial_title'); ?></h2>
    </div>
    <div class="testimonial-slides">
        <?php if( have_rows('testimonial_slides') ):?>
                    <?php  while( have_rows('testimonial_slides') ) : the_row();?>  
        <div class="item">
            <div class="inner-item">
                 <?php the_sub_field('description');?>
                <span class="title">
                     <?php the_sub_field('author');?>
                </span>
                <span class="sub-title">
                     <?php the_sub_field('author_rank');?>
                </span>
                 <?php the_sub_field('author_image');?>
            </div>
        </div>
        <?php endwhile;?><?php endif;?>

    </div>
</section>
<!-- TESTIMONIAL  -->

<!-- EXPERT START-->
<section class="engage-expert">
<div class="container">
    <div class="form-wrapper">
        <h2>
           <?php the_field('contact_us_title'); ?>
        </h2>
        <p>
            <?php the_field('contact_us_description'); ?>
        </p>
        <form id="form1" onsubmit="getFormValue(event)">
            <input type="text" placeholder="Full Name*" id="fullname" name="fullname" required>
            <input type="text" placeholder="Email*" id="email" name="email">
            <input type="number" placeholder="Phone Number" name="phonenumber" id="phonenumber" required>
            <input type="text" placeholder="Website" id="website" name="website" required>
            <textarea name="details" id="details" placeholder="Further Details" rows="" required></textarea>
            <label class="submit-wrap">
                <input type="submit" value="SUBMIT REQUEST" class="BTN-BG"><span>
                    <?php the_field('privacy_policy_message'); ?>
                </span></label>

        </form>

            <script>
                    function getFormValue(e) {
                            e.preventDefault();
                            const fullName = document.getElementById("fullname").value;
                            const emailAddress = document.getElementById("email").value;
                            const phoneNumber = document.getElementById("phonenumber").value;
                            const websiteAddress = document.getElementById("website").value;
                            const furtherDetails = document.getElementById("details").value;
                            console.log(fullName + emailAddress + phoneNumber + websiteAddress + furtherDetails);
                    }
            </script>
    </div>
</div>
</section>
<!-- EXPERT END -->
<?php get_footer(); ?>