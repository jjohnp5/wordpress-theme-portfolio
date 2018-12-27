<?php
/**
 * Template Name: Home Page
 *

 */
$landing_image = get_field('background');
$profile_picture = get_field('profile_picture');

$git_link = get_field('git_link');
$box_1_title = get_field('box_1');
$box_1_desc = get_field('box_1_desc');
$box_2_title = get_field('box_2');
$box_2_desc = get_field('box_2_desc');
$box_3_title = get_field('box_3');
$box_3_desc = get_field('box_3_desc');

$section_3_title = get_field('section_3_title');
$summary_title = get_field('summary_title');
$summary_content = get_field('summary_content');
$experience_title = get_field('experience_title');
$experience_content = get_field('experience_content');

get_header(); ?>


<section class="banner row" style="background: url('<?php echo $landing_image['url'];?>') no-repeat; background-size: cover;">


    <div class="quote">
        <h3 class="quote-text">
        <?php echo get_field('quote');?>
        </h3>
        <h6>&origof; <?php echo get_field('author'); ?> &imof;</h6>
    </div>

</section>
<div id="profile-picture">
    <img src="<?php echo $profile_picture['url']?>" />
</div>
<section class="about row" id="about">
<div class="col-12 col-md-8 offset-md-2">
        <div class="story">
            <div class="section-title">
                <h1><?php echo the_author_meta('display_name', 1); ?></h1>
            </div>
            
            <div class="github"><a href="<?php echo $git_link; ?>" target="_blank"><i
                class="devicon-github-plain"></i></a><span class="label">Github</span></div>
                <br><br><br>
                <div class="row">
            <div class="profile-personal col-sm-6">
                <h3><?php echo $box_1_title; ?></h3>
                <?php echo $box_1_desc; ?>
            </div>

            <div class="profile-education col-sm-6">
            <h3><?php echo $box_2_title; ?></h3>
            <?php echo $box_2_desc; ?>
            </div>
            </div>
            <br><hr><br>
            <div class="row">
            <div class="profile-other col-sm-6 offset-sm-3">
            <h3><?php echo $box_3_title; ?></h3>
            <?php echo $box_3_desc; ?>
            </div>
            </div>
            
        </div>
        </div>
</section>
<section class="resume-container row">
    <div id="resume" class="col-12 col-md-8 offset-md-2">
            <div class="resume">
            <br><hr class="border border-secondary"><br>
            <div class="section title">
                <h1><?php echo $section_3_title; ?></h1>
            </div>
            <br><hr><br>
            <div class="row">
            <div class="summary col-sm-6">
                <div><h3><?php echo $summary_title; ?></h3></div>
                <div><?php echo $summary_content; ?></div>
            </div>
            <br><br>
            <div class="education col-sm-6">
                <div>
                    <h3>
                    <?php echo $experience_title; ?>
                    </h3>
                </div>
                <div>
                <?php echo $experience_content; ?>
                </div>
            </div>
            </div>
            <br><br><br>
            <div class="row">
            <div class="resume-download col-sm-4 offset-sm-4">
                <button class="btn btn-primary"><a href="LatestDev.pdf">Download Resume</a></button>
            </div>
            </div>
        </div>
    </div>
</section>
<section id="project" class="project-container row" data-type="background" data-speed="5">
<div class="col-sm-12">
        <div class="section-title project-title"><h1>PROJECTS</h1></div>
        <br><hr><br>
        <div class="project row">
            <div class="thumbnails col-12">
            <?php $loop = new WP_Query( array( 'post_type' => 'projects', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
			
            <?php while( $loop->have_posts() ) : $loop->the_post(); 
                $project_image = get_field('project_image');
            ?>
            
                <div class="proj-thumb" 
                    name="<?php the_field('project_name'); ?>" 
                    link="<?php the_field('project_link'); ?>" 
                    desc="<?php the_field('project_description'); ?>" 
                    style="background:url('<?php echo $project_image['url']; ?>') center center / cover; border: none;"
                    github="<?php the_field('project_github') ?>"
                    <?php 
                    $techs = get_field('project_techs');
                    
                    if($techs): 
                        
                    ?>
                    technologies="<?php 
                    foreach($techs as $tech):
                    echo $tech.','; ?> <?php endforeach; ?>"
                    
                    <?php endif; ?>
                    >
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <div class="proj col-12">
                <div></div>
                <br>
                <a class="btn btn-warning" href="./Patatapoly/circles.html" target="_blank" id="live-link">Click Images to see Projects!</a>
                <p></p>
                <a href="" class="btn btn-success" id="github-link"></a>


            </div>
            <div class="tech col-12">
                <div class="row">
                    <div class="col-12">
                        <h4 style="text-align: center;">Technologies used</h4>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="icon col-sm-8 offset-sm-2">
                        <span class="icons"><i class="devicon-bootstrap-plain"></i><span class="label">Bootstrap</span></span>
                        <span class="icons"><i class="devicon-css3-plain"></i><span class="label">CSS3</span></span>
                        <span class="icons"><i class="devicon-html5-plain"></i><span class="label">HTML5</span></span>
                        <span class="icons"><i class="devicon-javascript-plain"></i><span class="label">JavaScript</span></span>
                        <span class="icons"><i class="devicon-jquery-plain"></i><span class="label">jQuery</span></span>
                        <span class="icons"><i class="devicon-mongodb-plain"></i><span class="label">MongoDB</span></span>
                        <span class="icons"><i class="devicon-nodejs-plain"></i><span class="label">Nodejs</span></span>
                        <span class="icons"><i class="devicon-express-original"></i><span class="label">ExpressJS</span></span>
                        <span class="icons"><i class="devicon-php-plain"></i><span class="label">PHP</span></span>
                        <span class="icons"><i class="devicon-mysql-plain"></i><span class="label">mySQL</span></span>
                        <span class="icons"><i class="devicon-webstorm-plain"></i><span class="label">Webstorm</span></span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

<?php
get_footer();
?>