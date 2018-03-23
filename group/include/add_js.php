		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#install").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "controller/setup.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center> <i class="fas fa-spinner fa-pulse"></i></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
					
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_district").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_district.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#new_district')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#updateDistrict").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_district.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#new_district')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_country").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_country.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".infoc").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".infoc").fadeIn(5000).html(data);
						$('#new_country')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#updateCountry").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_country.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		
		

		
		
		
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_bank").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_bank.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".infoc").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".infoc").fadeIn(5000).html(data);
						$('#new_bank')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#updateBank").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_bank.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".infoc").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#new_bank')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_account").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_account.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".infoc").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".infoc").fadeIn(5000).html(data);
						$('#new_account')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#updateAcc").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_account.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});

			</script>
			
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_qualification").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_qualification.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".infoc").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".infoc").fadeIn(5000).html(data);
						$('#new_qualification')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#updateQualification").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_qualification.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#removeEmpq").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/remove_q.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#removeEmpB").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/remove_b.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>


		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_leave").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_leave.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#new_leave')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>	

		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#absent").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_absent.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#absent')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#updateCont").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_contribution.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#absent')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>	
		
				<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_cont").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_contribution.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#absent')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>	
		
		
		
						<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_loantype").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_loantype.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#absent')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>	
		
		
						<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_question").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_question.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('new_question')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
						<script type="text/javascript">
			$(document).ready(function (e) {
				$("#slips").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/slips.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('new_question')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>









						<script type="text/javascript">
			$(document).ready(function (e) {
				$("#quest").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_quest.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".rr").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
								$(function() {
    var tar = $('.rr');
    tar.fadeIn().animate({top: $(window).height()/10 - tar.outerHeight()/10}, {duration: 'slow', queue: false}, function() {
        //Animation complete.
    });
});
						$(".rr").fadeIn(5000).html(data);
						$('quest')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>		

		
								<script type="text/javascript">
			$(document).ready(function (e) {
				$("#update_question").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_question.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
					
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>	
		
		
		
		
						<script type="text/javascript">
			$(document).ready(function (e) {
				$("#update_loantype").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_loantype.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#absent')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
						<script type="text/javascript">
			$(document).ready(function (e) {
				$("#emploan").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/newemploan.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#absent')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		
								<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_em").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_em.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#newemloan')[0].reset();
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
								<script type="text/javascript">
			$(document).ready(function (e) {
				$("#updateadmin").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_admin.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
										<script type="text/javascript">
			$(document).ready(function (e) {
				$("#update_comapany").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_company.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		
										<script type="text/javascript">
			$(document).ready(function (e) {
				$("#update_def").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_def.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
												<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_insu").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_insu.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
												<script type="text/javascript">
			$(document).ready(function (e) {
				$("#removeI").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/removeI.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		
												<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_comp").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_company.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#addemployeeQ").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_empq.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
			
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_benefit").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_benefit.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#new_benefit')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#update_benefit").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_benefit.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#new_qualification')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#on_benefit").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_on_benefit.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#on_benefit')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_grade").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_grade.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#new_grade')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#update_grade").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_grade.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#new_dep").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/new_dep.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						$('#new_dep')[0].reset();
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#update_dep").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_dep.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>
		
		
		<script type="text/javascript">
			$(document).ready(function (e) {
				$("#updateEmployee").on('submit',(function(e) {
					e.preventDefault();
					$.ajax({
						url: "../controller/update_employee.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
							beforeSend: function() 
						{
							$(".info").html('<center><img class="gifi" src="../media/images/loader.gif" alt="Loading...." align="absmiddle" title="Loading...."/></center>');
						},
						success: function(data)
						{
						$(".info").fadeIn(5000).html(data);
						
				
						},
						error: function() 
						{
						} 	        
				   });
				}));
			});
		</script>