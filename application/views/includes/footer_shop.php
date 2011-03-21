</div>
			
			<div class="right">
				<div class="shop">
					<h3>Your Basket</h3>
					<p id="total">Your current total: &pound;<span><?php echo $this->cart->total();?></span></p>
					<a href="<?php echo base_url(); ?>Shop/basket" class="button" id='view_order'>View Order</a><br />
					<a href="<?php echo base_url(); ?>Shop/checkout" class="button" id="checkout">Checkout</a><br />
					<a href="<?php echo base_url(); ?>Shop/empty_basket" class="button" id="empty_basket">Empty basket</a><br />
					<img src="<?php echo base_url(); ?>graphics/sep_ox.jpg" alt="sep_ox" width="210" height="2" />
				</div><!-- end shop -->

				
								<?php //include('right_side_bar.php');?>

				
			</div><!-- end right -->
			<div class="clear"></div>
		</div><!-- end container -->
			<div class="push"></div>

	</div><!-- end Main -->
		
	<div id="footer" class="footer">
		<div class="container">
			<img id="collection" src="<?php echo base_url(); ?>graphics/collection(K)_54.png" alt="collection(K)_54" width="210" height="306" />
			<div class="ox_contact">
				<p>Oxfordshire County Council, County Hall, New Road, Oxford, OX1 1ND</p>
				<p></p>
				<p><strong>Main switchboard:</strong> 01865 792422 | <strong>Fax:</strong> 01865 726155</p>
				
				

			</div>
			<p id="credits">
				web design and development:<a href="http://space-dog.co.uk/index.html" class="" id="" title="Web designer">space-dog</a>
			</p>
		<?php echo anchor('login', 'Admin', 'id="login" class="lkjn"');?>

			<div class='clear'></div>
		</div>
	</div>
	</body>
</html>