<?php 
/*
**Template Name: Brafton Mission
*/

get_header(); ?>

			<div id="content">
				<div class="graphical-header">
					<img src="/wp-content/themes/brafton/library/images/page-headers/blank_header.png">

					<h1><div class="inner">Our <strong>Mission</strong></div></h1>
				</div>

				<div class="objectives mission_container">
					<div class="inner">
					<div class="mission_row wrap">
							<?php

								$subhead = get_field( 'subhead' );

							?>
							<div class="subhead d-all t-all m-all">
								<?php echo $subhead; ?>
						</div>
					</div>

					<img src="/wp-content/themes/brafton/library/images/mission/objectives.jpg"/>

					<div class="mission_row wrap">

							<?php

								$grow = get_field( 'grow' );
								$strengthen = get_field( 'strengthen' );
								$develop = get_field( 'develop' );

							?>

							<div class="copy d-1of3 t-1of3 m-all">
								<h2>Grow</h2>
								<p><?php echo $grow; ?></p>
							</div>
							
							<div class="copy d-1of3 t-1of3 m-all">
								<h2>Strengthen</h2>
								<p><?php echo $strengthen; ?></p>
							</div>

							<div class="copy d-1of3 t-1of3 m-all">
								<h2>Develop</h2>
								<p><?php echo $develop; ?></p>
							</div>
						</div>
					</div>
				</div>


				<div class="values mission_container">
					<div class="inner">
					<img src="/wp-content/themes/brafton/library/images/mission/employee_values.jpg"/>
					<div class="mission_row wrap">

						<?php

							//loop through and retrieve all the "value" custom fields...
							//And, create new column after three iterations...

						?>

						<div class="copy d-1of2 t-1of2 m-all">

						<?php

							for($i=1; $i<=7; $i++) {
								if( $i==4) { ?>
									</div>
									<div class="copy d-1of2 t-1of2 m-all">
								<?php } ?>

								<div class="item">
									<div class="big"><?php echo $i; ?>.</div>
									<div class="text">
										<?php echo get_field( 'value_' . $i ); ?>
									</div>
								</div>
							<?php } //end for loop ?>
						</div>
					</div>


				<div class="priorities mission_container">
					<img src="/wp-content/themes/brafton/library/images/mission/priorities.jpg"/>

					<div class="mission_row wrap">

						<?php

						//Get object of all "Brafton Mission Page- Priorities" custom fields


						$fields = get_field_objects();


						$priorities = array();

						foreach($fields as $field) {

							if( $field["field_group"] == 81103) {
								array_push( $priorities, $field );
							}

						}

						//Sort them in the correct order!

						function cmp($a, $b) {
							return $a["order_no"] - $b["order_no"];
						}

						usort($priorities, "cmp");

						//Now that we have the object of all the "Priority" fields, loop through them
						//And, create a new column after 5 iterations

						?>

						<div class="copy d-1of2 t-1of2 m-all">

							<?php

							//var_dump( $priorities );

							$i = 0;

							foreach( $priorities as $p ) { 

								if( $i==5 ) { ?>
									</div>
									<div class="copy d-1of2 t-1of2 m-all">
								<?php } ?>

								<div class="item">

									<div class="big"><?php echo $p['label']; ?></div>
									<div class="text">
										<?php echo $p['value']; ?>
									</div>

								</div>

								<?php $i++; ?>

							<?php } ?>

						</div>

					</div>

				</div>

				</div>


			</div>


			<?php get_template_part( "footer-includes/fixed_footer" ); ?>


<?php get_footer(); ?>
