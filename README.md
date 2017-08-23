Target site:  http://chatangu.tk
<!--Header -->
The Chatango Warehouse
Buy and offer for original accounts, or browse profile tutorials.
Learn about current projects coming soon!

<!-- Page 1 -->
Over 500 Original Usernames Available
The biggest repository of original usernames you'll ever find.
Below you will be able to search for alphabetically for a username that fits you. Because of the ridiculous amount of usernames available, the prices of these usernames will be vastly lower than original market prices. This will put an end to the elitists selling accounts for $300 or more.</p>
All accounts are secured as chats to make transactions smooth and create an easy transition of ownership. Because of the high volume of requests for usernames you should expect a wait-time of at least 5 minutes. All transactions are safely secured with Paypal and once you pay for a username, you will be told when the username is free to register. Furthermore, all transactions are final.

<!-- Two -->
Security is Our Priority
Developers: Debugger / Aeri<br>  
Bot: Iceball
As recently stated, every account is secured as a chat, and when a purchase is made, the account will be freed to register. Warning: Do NOT disclose the username to ANYONE before purchasing it. Failure to listen to this warning may lead to someone you know registering your account. If you have any questions or concerns you can message the developers listed, or the helper bot (coming soon).

<!-- Three -->
Chatango Tutorials and Upcoming Projects
Have problems creating a full profile or mini profile? Visit our free tutorials page.
The companion bot project is currently being developed, and details of the construction will be posted on the bot progress page.








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