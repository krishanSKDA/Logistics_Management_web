document.addEventListener("DOMContentLoaded", function() {
	const selectElements = document.querySelectorAll(".select");
	selectElements.forEach(select => {
	  const selectBtn = select.querySelector(".selectBtn");
	  const selectDropdown = select.querySelector(".selectDropdown");
	  const options = selectDropdown.querySelectorAll(".option");
  
	  selectBtn.addEventListener("click", function() {
		selectBtn.classList.toggle("toggle");
		selectDropdown.classList.toggle("toggle");
	  });
  
	  options.forEach(option => {
		option.addEventListener("click", function() {
		  selectBtn.innerHTML = option.innerHTML;
		  selectBtn.classList.remove("toggle");
		  selectDropdown.classList.remove("toggle");
		});
	  });
	});
  
	document.addEventListener("click", function(event) {
	  if (!event.target.closest(".select")) {
		document.querySelectorAll(".select .selectBtn.toggle").forEach(btn => {
		  btn.classList.remove("toggle");
		});
		document.querySelectorAll(".select .selectDropdown.toggle").forEach(dropdown => {
		  dropdown.classList.remove("toggle");
		});
	  }
	});
  });
  