function border(elem) {
	elem.style.borderColor = "#57B846";
	elem.style.transition = ".5s all"
}
function disBorder(elem) {
	elem.style.borderColor = "gray";
	elem.style.transition = ".5s all"
	if (elem.value != "") {
		elem.style.borderColor = "#57B846";
	}
}