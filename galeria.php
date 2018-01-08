
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin: 0 auto;z-index:1;">
	    <ol class="carousel-indicators">	
			<?php 
				include('photos.php');
				$i= 0;	
				foreach ($a->photos->data as $p) {
					if($i==0){
						echo "<li data-target='#myCarousel' data-slide-to='".$i."' class='active'></li>";
					}else{
						echo "<li data-target='#myCarousel' data-slide-to='".$i."'></li>";
					}
				$i++;
				}
			?>
	    </ol>

	    <div class="carousel-inner">
	    <?php 
			$i = 0;
			foreach ($a->photos->data as $p) {
				if($i==0){
					echo '<div class="item active">';
					echo '<a href="'.$p->link.'"  target="_blank"> <img src="'.$p->images[0]->source.'" alt="Dayas Modas"width=100%></a>';
					echo "</div>";
				}else{
					echo '<div class="item">';
					echo '<a href="'.$p->link.'"  target="_blank"><img src="'.$p->images[0]->source.'" alt="Dayas Modas"width=100%></a>';
					echo "</div>";
				}
				$i++;
			}
		?>
		</div>
	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
  	</div>
