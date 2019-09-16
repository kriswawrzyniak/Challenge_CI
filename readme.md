Launch: 
1. Install MAMP and start apache server and mysql server
2. Install Node.js and dependancies into /assets/js folder
3. Run node server.js in the /assets/js folder
4. Navigate to localhost/challenge_ci/




Implementation:
1. A basic welcome page was created adapted from the existing code igniter view and controller. Two buttons were created that directed you to either Admin or User pages.
2. A mySQL database containing a single table was connected to the application. The table stored unique user ID's (int), name (string), and admin (boolean).
3. A user model was created with a simple query to return all of the users. I plan to add queries to obtain lists of either user's or admin's, but for now left it as is and hard coded the obtainment of the user and the admin.
3. An admin view and controller were created. The index function connected to the user model and retrieved the admins information, created session with userdata storing the unique ID from the database. The view then displayed all the information. The admin view also has javascript code embedded to connect to a node.JS server and open a socket using socket.io. There is a submit button that creates a message and emits to all clients connected to the node server. This was used to communicate between the admins and all the connected users no matter how many there are. I also implemented a logout button to logout only the admin. This will delete the userdata stored in the session and redirect to the home page.
4. A user view and controller were creted. The index function acts almost the same as the admin's. I kept them seperate for ease of displaying the two different views, but they could be combined and upon login the view corresponding to the user's level would be loaded. The user page also has a logout function that will logout only that user by again deleting the session data and redirecting to the home page. The user view has a script that opens a socket connection to the node server. If it receives a message it makes an ajax request to the controller to logout, deleting the session data, then the page is redirected to the home page.
5. An assets folder was created and contains a js folder holding all of the javascript. A server.js opens up a node server to listen for messages from a socket, and then emit to all other clients connected to the socket. A nodeClient.js file was created to be run when the admins logout all users button is clicked which broadcasts a message to the socket.

Notes:
By using the emit function and running a script on the user's view page all users will be logged out when a message is received. There could be added functionality to end user's sessions based off their user level or any other information they currently have stored in their session or on their view, like name, unique ID, or user level. With the current implementation if there is more than one admin logged in the other admins will not be logged out because the script to end the session is only present in the users view. This again could be extended to the admins by running the script in the admin view or combining the two views and dynamically displaying the page based on the user level.


Code for socket scripts adapted from: https://github.com/jdutheil/nodePHP/blob/master/js/nodeClient.js
