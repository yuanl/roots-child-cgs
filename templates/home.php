<div id="headline" class="row">
    <div id="picnews" class="span8">
        <?php get_template_part('templates/content', 'picnews'); ?>
    </div>
    <div class="news span4">
        <?php echo cgs_posts_list( "cgsnews", 15 ); ?>
    </div>
</div> <!-- headline -->

<hr />
<div id="main">
    <div class="row">
        <div class="news span4">
            <div class="well well-header">
                <h1>南航动态</h1>
            </div>
            <?php echo cgs_posts_list_ul( "", 10, "industrylink" ); ?>
        </div>
        <div class="news span4">
            <?php echo cgs_posts_list( "focus", 7 ); ?>
        </div>
        <div class="news span4">
            <?php get_template_part("templates/content", "star"); ?>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="tabbable span3">
            <?php $cats = array("partynews", "team"); ?>
            <?php get_template_part("templates/content", "tabbable-news"); ?>
        </div>
        <div class="tabbable span3">
            <?php $cats = array("depnews", "staff"); ?>
            <?php get_template_part("templates/content", "tabbable-news"); ?>
        </div>
        <div class="tabbable span3">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#" data-toggle="tab">工作汇报</a>
                </li>
            </ul>
            <div class="tab-content news">
                <div class="tab-pane active">
                    <?php echo do_shortcode('[wpfilebase tag="list" id="1" tpl="ul" num="10" pagenav="0" /]'); ?>
                </div>
            </div>
            
        </div>

    </div> <!-- row -->
</div> <!-- main -->
