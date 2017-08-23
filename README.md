<h1>  Target site:  http://chatangu.tk </h1>
<!--Header -->
The Chatango Warehouse
Buy and offer for original accounts, or browse profile tutorials.
Learn about current projects coming soon!







Insert into <Head>:
<link rel="stylesheet" href="listnav.css">

Code up your list:
<ul id="myList">...</ul>

Insert before </body>:
<script src="jquery-listnav.min.js"></script>
<script>
	$("#myList").listnav();
</script>

Navigation:
The navigation defaults to being placed directly above your list element. You can place the navigation in a place of your choice by adding to your markup.
<div id="{myList}-nav"></div>


Options
$("myList").listnav({
    initLetter: '',        // filter the list to a specific letter on init ('a'-'z', '-' [numbers 0-9], '_' [other])
    includeAll: true,      // Include the ALL button
    includeOther: false,    // Include a '...' option to filter non-english characters by
    includeNums: true,     // Include a '0-9' option to filter by
    flagDisabled: true,    // Add a class of 'ln-disabled' to nav items with no content to show
    removeDisabled: false, // Remove those 'ln-disabled' nav items (flagDisabled must be set to true for this to function)
    allText: 'All',        // set custom text in navbar to ALL button
    noMatchText: 'No matching entries', // set custom text for nav items with no content to show
    showCounts: true,      // Show the number of list items that match that letter above the mouse
    dontCount: ''          // A comma separated list of selectors you want to exclude from the count function (numbers on top of navigation)
    cookieName: null,      // Set this to a string to remember the last clicked navigation item requires jQuery Cookie Plugin ('myCookieName')
    onClick: null,         // Set a function that fires when you click a nav item. see Demo 5
    prefixes: [],          // Set an array of prefixes that should be counted for the prefix and the first word after the prefix ex: ['the', 'a', 'my']
    filterSelector: ''     // Set the filter to a CSS selector rather than the first text letter for each item
});


//update db

  //save definitions to corresponding username 
    $save = mysqli_query($conn, "UPDATE store SET def = '$title' WHERE  user_name = '$a'");
     mysqli_query($conn,$save);