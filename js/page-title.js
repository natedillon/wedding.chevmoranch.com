// add site title to the page title
pageTitle = document.title;
siteTitle = "Lindsey & Michael";
seperator = " - "
if(pageTitle != "") {
	if(pageTitle != siteTitle) {
		document.title = siteTitle + seperator + pageTitle;
	}
} else {
	document.title = siteTitle;
}

// prints the original page title
function printTitle() {
	if(pageTitle != "") {
		document.write(pageTitle);
	}
}
