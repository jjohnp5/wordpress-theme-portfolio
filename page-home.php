<?php
/**
 * Template Name: Home Page
 *

 */
$landing_image = get_field('background');

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


<section class="banner" style="background: url('<?php echo $landing_image['url'];?>') no-repeat; background-size: cover;">


    <div class="quote">
        <h3 class="quote-text">
        <?php echo get_field('quote');?>
        </h3>
        <h6>&origof; <?php echo get_field('author'); ?> &imof;</h6>
    </div>

</section>
<section class="about" id="about">
        <div class="story">
            <div class="section-title">
                <h1><?php the_author(); ?></h1>
            </div>
            
            <div class="github"><a href="<?php echo $git_link; ?>" target="_blank"><i
                class="devicon-github-plain"></i></a><span class="label">Github</span></div>
                <div class="row">
            <div class="profile-personal col-sm-6 offset-sm-3">
                <h3><?php echo $box_1_title; ?></h3>
                <?php echo $box_1_desc; ?>
            </div>
            </div>
            <div class="row">
            <div class="profile-education col-sm-6 offset-sm-3">
            <h3><?php echo $box_2_title; ?></h3>
            <?php echo $box_2_desc; ?>
            </div>
            </div>
            <div class="row">
            <div class="profile-other col-sm-6 offset-sm-3">
            <h3><?php echo $box_3_title; ?></h3>
            <?php echo $box_3_desc; ?>
            </div>
            </div>
            
        </div>
</section>
<section class="resume-container">
    <div id="resume">
            <div class="resume">
            <div class="section title">
                <h1><?php echo $section_3_title; ?></h1>
            </div>
            <div class="row">
            <div class="summary col-sm-6 offset-sm-3">
                <div><h3><?php echo $summary_title; ?></h3></div>
                <div><?php echo $summary_content; ?></div>
            </div>
            </div>
            <div class="row">
            <div class="education col-sm-6 offset-sm-3">
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
            <div class="row">
            <div class="resume-download col-sm-4 offset-sm-4">
                <button class="btn btn-primary"><a href="DevResume.docx">Download Resume</a></button>
            </div>
            </div>
        </div>
    </div>
</section>
<section id="project" class="project-container" data-type="background" data-speed="5">
        <div class="section-title project-title"><h1>PROJECTS</h1></div>
        <div class="project">
            <div class="thumbnails">
            <?php $loop = new WP_Query( array( 'post_type' => 'projects', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
			
            <?php while( $loop->have_posts() ) : $loop->the_post(); 
                $project_image = get_field('project_image');
            ?>
            
                <div class="proj-thumb" 
                    name="<?php the_field('project_name'); ?>" 
                    link="<?php the_field('project_link'); ?>" 
                    desc="<?php the_field('project_description'); ?>" 
                    style="background:url('<?php echo $project_image['url']; ?>') center center / cover; border: none;"
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
            <div class="proj">
                <div></div>
                <button class="btn btn-warning"><a href="./Patatapoly/circles.html" target="_blank">Click Images to see Projects!</a></button>
                <p></p>


            </div>
            <div class="tech">
                <h4>Technologies used</h4>
                <div class="icon">
                    <div class="icons"><i class="devicon-bootstrap-plain"></i><span class="label">Bootstrap</span></div>
                    <div class="icons"><i class="devicon-css3-plain"></i><span class="label">CSS3</span></div>
                    <div class="icons"><i class="devicon-html5-plain"></i><span class="label">HTML5</span></div>
                    <div class="icons"><i class="devicon-javascript-plain"></i><span class="label">JavaScript</span></div>
                    <div class="icons"><i class="devicon-jquery-plain"></i><span class="label">jQuery</span></div>
                    <div class="icons"><i class="devicon-mongodb-plain"></i><span class="label">MongoDB</span></div>
                    <div class="icons"><i class="devicon-nodejs-plain"></i><span class="label">Nodejs</span></div>
                    <div class="icons"><i class="devicon-express-original"></i><span class="label">ExpressJS</span></div>
                    <div class="icons"><i class="devicon-php-plain"></i><span class="label">PHP</span></div>
                    <div class="icons"><i class="devicon-mysql-plain"></i><span class="label">mySQL</span></div>
                    <div class="icons"><i class="devicon-webstorm-plain"></i><span class="label">Webstorm</span></div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>