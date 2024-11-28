<?php
/*
* Template Name: Contact us 
*/
?>

<?php get_header(); ?>

<main id="app" class="page-detail">

		<div class="section py-8 md:py-16 my-8 md:my-16" data-label="Section">


			<div class="mx-auto max-width ">
				<div class="title-text text-center">

					<p class="section-title mb-8">Contact us</p>

				</div>

				<div class="type-container columns space-y-8 md:space-y-0">
					<div id="prospect-form" data-site-key="6Ld51dsZAAAAAIz82Q8UmNgqyH31vM8IbMVDyH3D"
						class="mb-8 w-full md:w-auto">
						<form name="rightworks_com_prospect_form" method="post" class="prospect-form p-4">
							<fieldset class="w-full mb-4">
								<legend class="text-sm">I am:</legend>
								<div class="inline mr-4"><label for="business"><input id="business" name="is_individual"
											type="radio" class="form-radio" value="0">&nbsp;A business owner
									</label></div>
								<div class="inline"><label for="individual"><input id="individual" name="is_individual"
											type="radio" class="form-radio" value="1">&nbsp;An individual
									</label></div>
							</fieldset>
							<div class="form-row">
								<div class="form-item required"><label for="first_name">First Name</label> <input
										id="first_name" type="text" name="first_name" placeholder="First Name"
										class="form-input"> <!----></div>
								<div class="form-item required"><label for="last_name">Last Name</label> <input
										id="last_name" type="text" name="last_name" placeholder="Last Name"
										required="required" class="form-input"> <!----></div>
							</div>
							<div class="form-row">
								<div class="form-item required"><label for="company_name">Company Name</label> <input
										id="company_name" type="text" name="company_name" placeholder="Company Name"
										aria-label="Enter your company name" required="required" class="form-input">
									<!----> <!----></div>
								<div class="form-item"><label>Website</label> <input type="text" name="website"
										placeholder="www.url.com" aria-label="If applicable, Enter your website url"
										class="form-input"> <!----></div>
							</div>
							<fieldset class="w-full my-4">
								<legend class="text-sm">Preferred contact method:</legend>
								<div class="inline mr-4"><label for="preferred_contact_method_email"><input
											id="preferred_contact_method_email" name="preferred_contact_method"
											type="radio" value="email" class="form-radio">&nbsp;Email
									</label></div>
								<div class="inline"><label for="preferred_contact_method_phone"><input
											id="preferred_contact_method_phone" name="preferred_contact_method"
											type="radio" value="phone" class="form-radio">&nbsp;Phone
									</label></div>
							</fieldset>
							<div class="form-row">
								<div class="form-item required"><label for="email">Email</label> <input id="email"
										type="text" name="email" placeholder="email@example.com" class="form-input">
									<!----> <!----></div>
								<div class="form-item"><label for="phone">Phone</label> <input id="phone" type="text"
										name="phone" placeholder="(###)###-####" class="form-input"> <!----></div>
							</div>
							<div class="row"><label for="notes" class="uppercase">Message</label> <textarea id="notes"
									name="notes" rows="5" placeholder="Let us know what else we can help you with."
									class="w-full form-input"></textarea></div> <button type="submit"
								class="btn btn-primary flex items-center"><!----> <span>Submit</span></button>
							<div id="rightworks_com_prospect_form_errors"></div>
						</form> <!---->
					</div>

					<div data-label="" class="text-sm type-offices w-full md:w-auto mb-8">

						<div class="grid-item mb-10">
							<div class="responsive-container mb-4">
								<iframe width="600" height="300" id="gmap_canvas"
									src="./Contact _ Northrop Financial Group_files/place.html" frameborder="0"
									scrolling="no" marginheight="0" marginwidth="0"></iframe>

							</div>

							<h3 class="border-b-2 mb-4 pb-1 h4">Fort Myers Office</h3>

							<div class="flex justify-between">
								<div class="flex-1">
									<div class="flex items-end mb-2 leading-snug">
										<h4 class="h5 m-0 font-medium uppercase">Address</h4>
									</div>

									<address class="not-italic mb-4">
										13700 6 Mile Cypress Pkwy<br>Suite 2<br>
										Fort Myers, FL 33912
									</address>

									<h4 class="h5 font-medium uppercase">Contact</h4>
									<p class="text-sm m-0"><span class="capitalize">phone:&nbsp;</span>
										<a href="tel:12392712488">
											(239) 271-2488
										</a>
									</p>
									<p class="text-sm m-0"><span class="capitalize">email:&nbsp;</span>
										<span class="email" data-email="vasb@abeguebcsvanapvny.pbz"><a
												href="mailto:info@northropfinancial.com">info@northropfinancial.com</a></span>
									</p>
								</div>

								<div class="flex-none">
									<h4 class="sr-only">Hours</h4>
									<table class="m-0 w-full">
										<thead class="sr-only">
											<tr>
												<th>Day</th>
												<th>Hours</th>
											</tr>
										</thead>
										<tbody>
											<tr class="p-0">
												<td class="p-0 pr-2 font-bold">Monday</td>
												<td class="p-0 whitespace-nowrap">8:00am – 5:00pm</td>
											</tr>
											<tr class="p-0">
												<td class="p-0 pr-2 font-bold">Tuesday</td>
												<td class="p-0 whitespace-nowrap">8:00am – 5:00pm</td>
											</tr>
											<tr class="p-0">
												<td class="p-0 pr-2 font-bold">Wednesday</td>
												<td class="p-0 whitespace-nowrap">8:00am – 5:00pm</td>
											</tr>
											<tr class="p-0">
												<td class="p-0 pr-2 font-bold">Thursday</td>
												<td class="p-0 whitespace-nowrap">8:00am – 5:00pm</td>
											</tr>
											<tr class="p-0">
												<td class="p-0 pr-2 font-bold">Friday</td>
												<td class="p-0 whitespace-nowrap">8:00am – 5:00pm</td>
											</tr>
											<tr class="p-0">
												<td class="p-0 pr-2 font-bold">Saturday</td>
												<td class="p-0 whitespace-nowrap">Closed</td>
											</tr>
											<tr class="p-0">
												<td class="p-0 pr-2 font-bold">Sunday</td>
												<td class="p-0 whitespace-nowrap">Closed</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</main>


<?php get_footer(); ?>
