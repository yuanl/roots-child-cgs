<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<div class="ngg-galleryoverview" id="<?php echo $gallery->anchor ?>">

<?php if ($gallery->show_slideshow) { ?>
	<!-- Slideshow link -->
	<div class="slideshowlink">
		<a class="slideshowlink" href="<?php echo $gallery->slideshow_link ?>">
			<?php echo $gallery->slideshow_link_text ?>
		</a>
	</div>
<?php } ?>

<?php if ($gallery->show_piclens) { ?>
	<!-- Piclense link -->
	<div class="piclenselink">
		<a class="piclenselink" href="<?php echo $gallery->piclens_link ?>">
			<?php _e('[View with PicLens]','nggallery'); ?>
		</a>
	</div>
<?php } ?>
	
	<div class="pins">
		<!-- Thumbnails -->
		<?php foreach ( $images as $image ) : ?>
		
		<div id="ngg-image-<?php echo $image->pid ?>" class="pin_wrapper" <?php echo $image->style ?> >
			<div class="pin_thumbnail" >			
				<?php if ( !$image->hidden ) { ?>
					<a class="block" href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
						<img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> />
					</a>
					<h6><?php echo $image->description ?></h6>
				<?php } ?>
			</div>
		</div>
	
		<?php if ( $image->hidden ) continue; ?>
		<?php if ( $gallery->columns > 0 && ++$i % $gallery->columns == 0 ) { ?>
			<br style="clear: both" />
		<?php } ?>

	 	<?php endforeach; ?>
 	</div>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</div>

<?php endif; ?>