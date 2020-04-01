<div class="fullblue">
	<div class="">

		<!-- BEGIN #footer-bottom -->
		<div id="footer-bottom" class="clearfix">

			<p style="text-align:center">
				<?php // Display footer message
echo '<a href="http://www.danhostel.dk" style="text-align:center">';
                                    echo __('&copy; Copyright www.danhostel.dk','danhostel');
                                   echo '</a>';
							echo ' - <a href="https://www.danhostel.dk/persondatapolitik" class="footer-terms">';
                            echo __('Danhostels persondatapolitik','danhostel');
                          echo '  </a>'; ?>
									
			</p>

			<!-- END #footer-bottom -->
		</div>

	</div>
</div>

<!-- END .background-wrapper -->
</div>


<style>
	@media all and (max-width: 767px) {
		form.booking-form.booking-validation.hidden {
			display: block !important;
		}

		form.booking-form.booking-validation {
			display: none !important;
		}
	}
</style>
<?php wp_footer(); ?>

<div id="gdpr-box" class="cookies-accept">
	<div class="gdcontent">
		<h2>Vi anvender cookies til at forbedre oplevelsen på vores side.</h2>
		<p>Du accepterer ved at fortsætte</p>
	</div>
	<div class="gdbttcontent">

	<button class="gdpr-button-accept">OK, jeg accepterer</button>
	<button class="gdpr-button-reject">Nej tak</button>
	
	</div>
</div>


<!-- END body -->
</body>

</html>
