		$( document ).ready(function() {
			  setTimeout(function() {
				  
				let modals = $(".modal")
				var active = null;
				let wantToClose = false;
				 
				$(".curso").click(function(){
				
					$("body").css("overflow","hidden");

					let child = $(this).find(".modal");
					let closeBtn = $(this).find(".close");
					active = child;
					if(active !== null && active.is(child) && $(child).is(":visible") == false){
						child.show(500);
						
					}	

					closeBtn.click(function(){
						wantToClose = true;
					});
					
					if(wantToClose){
						wantToClose = false;
						child.hide(500);
						$("body").css("overflow","visible");
					}

				});  
				  
				let modalsForm = $(".modal-form")
				var activeForm = null;
				let wantToCloseForm = false;
				$(".inscripcion-btn").click(function(){
					$("body").css("overflow","hidden");
					
					let childForm = $(this).find(".modal-form");
					activeForm = childForm;
					if(activeForm !== null && activeForm.is(childForm) && $(childForm).is(":visible") == false){
						childForm.show(500);
					}
					let closeBtn = $(this).find(".close");
					closeBtn.click(function(){
						wantToCloseForm = true;
					});
					
					if(wantToCloseForm){
						wantToCloseForm = false;
						childForm.hide(500);
						$("body").css("overflow","visible");
					}
				});
				  
				  
  			  }, 1000);
		});