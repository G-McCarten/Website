Project Name: Simple Arcade
Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game.
Github Link: https://github.com/G-McCarten/IT202-005/tree/Milestone2/public_html/Project
Website Link: https://gm348-prod.herokuapp.com/Project/register.php
Your Name: Gerald McCarten

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 

Milestone Features:
	Milestone 1:
- [x] [11/10/2021] \(mm/dd/yyyy of completion) User will be able to register a new account
  -  List of Evidence of Feature Completion
    - Status: Partiallly Working
    - Direct Link: https://gm348-prod.herokuapp.com/Project/register.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/25
    - Screenshots
     - Screenshot #1: ![Screenshot_9](https://user-images.githubusercontent.com/76708068/141400045-b0e69997-6b74-48f8-bc8f-6a3859686e70.png)
     	- Form Fields, Username, email, password, confirm password(other fields optional), Email is required and must be validated
     - Screenshot #2: ![Screenshot_10](https://user-images.githubusercontent.com/76708068/141400820-fa5008f1-b191-43eb-a8c0-1a29e5721ef8.png) 
	- Username is required
      - Screenshot #3: ![Screenshot_12](https://user-images.githubusercontent.com/76708068/141401319-43ad11df-9db5-4628-8072-3da6c10b0c03.png)
	- Confirm password’s match 
      - Screenshot #4: ![Screenshot_13](https://user-images.githubusercontent.com/76708068/141401446-72ca8c13-1d4f-40bf-8313-b9927c4c0003.png)
	- User Table, Id, username, email, password (60 characters), created, modified Password must be hashed
      - Screenshot #5: ![Screenshot_15](https://user-images.githubusercontent.com/76708068/141401813-4f1efc1f-5e9d-482e-b89f-6f2d5ea8a817.png)
	-  Email should be unique
      - Screenshot #6: ![Screenshot_14](https://user-images.githubusercontent.com/76708068/141401966-f0327510-c1a9-420a-9234-b3fb5834129e.png)
	- Username should be unique
      - Screenshot #7: ![Screenshot_10](https://user-images.githubusercontent.com/76708068/141400820-fa5008f1-b191-43eb-a8c0-1a29e5721ef8.png) 
	- Username is required
      - Screenshot #8: ![Screenshot_12](https://user-images.githubusercontent.com/76708068/141401319-43ad11df-9db5-4628-8072-3da6c10b0c03.png)
	-Confirm password’s match
	
	
- [x] [11/10/2021] \(mm/dd/yyyy of completion) User will be able to login to their account (given they enter the correct credentials)
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/login.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/26
    - Screenshots
     - Screenshot #1: ![Screenshot_5](https://user-images.githubusercontent.com/76708068/141404891-9b3e5a19-4fc9-4fa3-8e2c-499243fedc3b.png)
     - Screenshot #2: ![Screenshot_7](https://user-images.githubusercontent.com/76708068/141404909-bea59dd7-42a6-4ed4-9b8c-f82b22fd7a88.png)
     - Screenshot #3: ![Screenshot_6](https://user-images.githubusercontent.com/76708068/141404914-c0be54ae-a779-4842-97b2-9cfa607afd48.png)
      	- User can login with email or username
      - Screenshot #4: ![Screenshot_8](https://user-images.githubusercontent.com/76708068/141405006-3d9f6190-dcc7-433b-a95d-ee1dde499a0d.png)
      - Password is required
      - Screenshot #5: ![Screenshot_9](https://user-images.githubusercontent.com/76708068/141405026-02eaadfe-7674-468d-bdc2-10955d130e8b.png)
	- Logging in should fetch the user’s details (and roles) and save them into the session. This can be home, profile, a dashboard, etc.
      - Screenshot #6: ![Screenshot_6](https://user-images.githubusercontent.com/76708068/141405054-0713a524-0fd5-435d-b268-933f8a322c4b.png)
	- User will be directed to a landing page upon login
      - Screenshot #7: ![Screenshot_10](https://user-images.githubusercontent.com/76708068/141405113-6e37af8b-f9bc-42cc-b391-f9263f040723.png)
      	-This is a protected page (non-logged in users shouldn’t have access). (Typing home.php in url before pressing enter)
      - Screenshot #8: ![Screenshot_11](https://user-images.githubusercontent.com/76708068/141405115-5d5d4555-68e1-4e89-8fc5-7f371972e663.png)
      	- (After pressing enter)


- [x] [11/10/2021] \(mm/dd/yyyy of completion) User will be able to logout
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/logout.php
    - Pull Requests
     - PR link #1 https://github.com/G-McCarten/IT202-005/pull/28
    - Screenshots
     - Screenshot #1: ![Screenshot_14](https://user-images.githubusercontent.com/76708068/141405536-1ac287d8-621f-4939-a8de-30febb9c71c6.png)
   	- Logging out will redirect to login page
   	- User should see a message that they’ve successfully logged out
   	- Session should be destroyed (so the back button doesn’t allow them access back in)
	[11/10/2021] \(mm/dd/yyyy of completion) Basic security rules implemented
	
	
- [x] List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/login.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/29
    - Screenshot #1: ![Screenshot_15](https://user-images.githubusercontent.com/76708068/141405864-ff3fd0aa-5c7d-4ce3-8a75-91aa59751e0f.png)
	- Function to check if user is logged 
    - Screenshot #2: ![Screenshot_17](https://user-images.githubusercontent.com/76708068/141405884-b7e81129-6eb4-4d3f-bf03-c65542c69953.png)
	- Function should be called on appropriate pages that only allow logged in user. In home.php:
	[11/10/2021] \(mm/dd/yyyy of completion) Basic Roles implemented
	
	
- [x] List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/login.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/30
    - Screenshot #1: ![Screenshot_17](https://user-images.githubusercontent.com/76708068/141406375-2580a3d5-aecd-4f58-a9a9-43d47e8b7097.png)
	- Have a Roles table (id, name, description, is_active, modified, created
    - Screenshot #2: ![Screenshot_16](https://user-images.githubusercontent.com/76708068/141406414-e7e9e439-1384-4110-b78c-9f00b916ed19.png)
	- Have a User Roles table (id, user_id, role_id, is_active, created, modified
    - Screenshot #3: ![Screenshot_18](https://user-images.githubusercontent.com/76708068/141406543-db318eda-4e76-4b21-90ca-5df87fcb1d6d.png)
	[11/10/2021] \(mm/dd/yyyy of completion) Site should have basic styles/theme applied; everything should be styled
	
	
- [x] List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/login.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/32
    - Screenshot #1: ![Screenshot_18](https://user-images.githubusercontent.com/76708068/141408006-9644b2f7-4423-4b8c-8712-42877b063446.png)
    - Screenshot #2: ![Screenshot_19](https://user-images.githubusercontent.com/76708068/141408017-905e9eee-9027-468f-b542-3b35f87d8d24.png)
    - Screenshot #3: ![Screenshot_20](https://user-images.githubusercontent.com/76708068/141408245-1b16f5b5-062c-4c6f-8c74-9d013d95007c.png)
     - forms/input, navigation bar, etc
	[11/10/2021]] \(mm/dd/yyyy of completion) Any output messages/errors should be “user friendly”
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/login.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/33
    - Screenshots
     - Screenshot #1: ![Screenshot_21](https://user-images.githubusercontent.com/76708068/141408778-1ca750d0-3306-4b21-9776-e430d133ab7c.png)
     - Screenshot #2: ![Screenshot_22](https://user-images.githubusercontent.com/76708068/141408783-f58bbd80-786a-408e-9de5-141d04af4845.png)
	- Any output messages/errors should be “user friendly”
	[11/10/2021] \(mm/dd/yyyy of completion) User will be able to see their profile
	
	
- [x] List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/profile.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/34
    - Screenshots
     - Screenshot #1: ![Screenshot_23](https://user-images.githubusercontent.com/76708068/141409098-98383328-6c52-4d35-bcfc-687963deafdd.png)
	- User will be able to see their profile
	[11/10/2021] \(mm/dd/yyyy of completion) User will be able to edit their profile
	
	
 - [ ] List of Evidence of Feature Completion
    - Status: Partiallly Working
    - Direct Link: https://gm348-prod.herokuapp.com/Project/profile.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/34
    - Screenshots
     - Screenshot #1: ![Screenshot_24](https://user-images.githubusercontent.com/76708068/141409812-fa379b6a-f334-48be-8b7a-2907e81eb74e.png)
	- User will be able to edit their profile:
    - Screenshot #2: ![Screenshot_25](https://user-images.githubusercontent.com/76708068/141409823-5acd1797-3a37-4c39-a585-cfa8e3c5815a.png)
	- Any other fields should be properly validated
    - Screenshot #3: ![Screenshot_26](https://user-images.githubusercontent.com/76708068/141409829-181cde3b-94d2-4d6a-9450-0381c630d654.png)
     	- Allow password reset (only if the existing correct password is provided)



Milestone 2:

<table><tr><td>Milestone 2</td></tr><tr><td><table><tr><td>F1 - Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator (2021-11-22)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/game.php](https://gm348-prod.herokuapp.com/Project/game.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/63](https://github.com/G-McCarten/IT202-005/pull/63)</p></td></tr><tr><td><table><tr><td>F1 - What game will you be doing?<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/76708068/144695101-66b20d8b-b62b-46aa-944d-504dc5640ae9.png"><p>A point and click shooter game.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - Briefly describe it.<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="Not Applicable"><p>My game will the allow the player to move in all directions on the canvas and shoot off enemies that target the player. The twist in this shooter is that you can build walls and slow down time.</td></tr></td></tr></table></td></tr><table><tr><td>F2 - The system will save the user’s score at the end of the game if the user is logged in (2021-11-29)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/save_score.php](https://gm348-prod.herokuapp.com/Project/save_score.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/66](https://github.com/G-McCarten/IT202-005/pull/66)</p></td></tr><tr><td><table><tr><td>F2 - There should be a scores table (id, user_id, score, created)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/76708068/144695296-93d35f6e-4dd2-4ab8-bb7b-d46914d6931b.png"><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - Each received score is a new entry (scores will not be updated)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/76708068/144695296-93d35f6e-4dd2-4ab8-bb7b-d46914d6931b.png"><p>Different scores from the same users (user_id) to prove new entries</td></tr></td></tr></table></td></tr><table><tr><td>F3 - The user will be able to see their last 10 scores ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://github.com/G-McCarten/IT202-005/pull/home.php](https://github.com/G-McCarten/IT202-005/pull/home.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/69](https://github.com/G-McCarten/IT202-005/pull/69)</p></td></tr><tr><td><table><tr><td>F3 - Show on their profile page<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/76708068/144695512-139aa024-002b-4f38-b161-21912c723a98.png"><p>Shows on home page for now</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - Ordered by most recent<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/76708068/144695512-139aa024-002b-4f38-b161-21912c723a98.png"><p>Shows most recent scores at closer to the top (created column)</td></tr></td></tr></table></td></tr><table><tr><td>F4 - Create functions that output the following scoreboards (this will be used later) ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://github.com/G-McCarten/IT202-005/pull/home.php](https://github.com/G-McCarten/IT202-005/pull/home.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/70](https://github.com/G-McCarten/IT202-005/pull/70)</p></td></tr><tr><td><table><tr><td>F4 - Top 10 Weekly, Monthly, Lifetime<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/76708068/144695608-8ea9df73-6820-4121-8c69-df01261947d8.png"><p>Default shows weekly for now</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F4 - Scoreboards should show no more than 10 results; if there are no results a proper message should be displayed (i.e., “No [time period] scores to display”)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/76708068/144695634-3563d905-c212-4074-89c3-5f7c825927b8.png"><p>SQL already limits to 10 results, displays proper "no result" message depending on time period.</td></tr></td></tr></table></td></tr></td></tr></table>
	
	
	
Milestone 3:

- [ ] \(mm/dd/yyyy of completion) Users will have points associated with their account.
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show


- [ ] \(mm/dd/yyyy of completion) Create a PointsHistory table
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show


- [ ] \(mm/dd/yyyy of completion) Competitions table should have the following columns
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) User will be able to create a competition
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show


- [ ] \(mm/dd/yyyy of completion) Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show



- [ ] \(mm/dd/yyyy of completion) Have a page where the User can see active competitions (not expired)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Will need an association table CompetitionParticipants
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show


- [ ] \(mm/dd/yyyy of completion) User can join active competitions 
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show


- [ ] \(mm/dd/yyyy of completion) Create function that calculates competition winners
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
     - PR link #1 (repeat as necessary)
    - Screenshots
     - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - Screenshot #1 description explaining what you're trying to show



Milestone 4:


<table>
<tr><td>Milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/home.php](https://gm348-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/85](https://github.com/G-McCarten/IT202-005/pull/85)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - If public, hide email address from other users</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147296526-486a6db6-6631-46ef-8ba7-df5a94b02d23.png">
<p>Users can mark their profile as public</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147296530-9f9d5672-72ae-4639-a2fa-d13ac6c9f33c.png">
<p>Public profiles do not display email</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147296531-aebcba49-25a0-4707-8598-414a79aed610.png">
<p>Public column added to users</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - User will be able to see their competition history ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/home.php](https://gm348-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/86](https://github.com/G-McCarten/IT202-005/pull/86)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Limit to 10 results</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147296624-f5828611-50c5-42a5-a26e-bbe7ab69490f.png">
<p>Past competitions displayed on home page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Paginate anything after 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147296781-06c72752-cc29-4d79-a7d3-a32e24ef02e9.png">
<p>Pagination variables for competition history</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - If no results, show the appropriate message</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147296700-e112cf64-510d-42dc-b3d3-e1f5f2fa782e.png">
<p>Informs user of no competions</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User with the role of “admin” can edit a competition where paid_out = false ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/edit_competition.php?id=12](https://gm348-prod.herokuapp.com/Project/edit_competition.php?id=12)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/86](https://github.com/G-McCarten/IT202-005/pull/86)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - They can adjust any of the regular form values</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147296946-75c7f903-1b03-4f35-897f-54b67ae3df06.png">
<p>Edit competition page</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297100-9fce463e-1013-46a1-9d8b-df7914e09b08.png">
<p>Snippet from view_competition.php, only allows admins to edit.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - If the competition was expired they can update the duration to include extra time</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147296948-d7db8068-00ae-4c9c-90c4-e083dff720f5.png">
<p>Ability to edit duration</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Add pagination to the Active Competitions view ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/competitions.php](https://gm348-prod.herokuapp.com/Project/competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/87](https://github.com/G-McCarten/IT202-005/pull/87)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Show 10 competitions per page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297246-96eadbbc-2ef1-43b1-82e3-47fbccd82ddd.png">
<p>Displays active competitions with pagination</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Paginate anything after 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297287-09bb5665-69a6-423a-bcc2-c11ed706c673.png">
<p>Pagination variables, allows for 10 competitions per_page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - If no results, show the appropriate message</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297289-ef77107d-f86f-4e8a-9442-3c4675c8b9e2.png">
<p>Snippet from competitions.php, displays proper message when no active competitions</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Anywhere a username is displayed should be a link to that user’s profile ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/home.php](https://gm348-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/85](https://github.com/G-McCarten/IT202-005/pull/85)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - This includes all scoreboards</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297474-cf741493-2e8f-481a-837b-af9c21367204.png">
<p>Clickable usernames through <a href> tags</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F5 - If the profile is private you can have the page just display “this profile is private” upon access</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297505-c6465e5f-faf3-40af-957f-9ced0f827e66.png">
<p>This user did not mark their profile as public</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Viewing an active or expired competition should show the top 10 scoreboard related to that competition ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/view_competition.php?id=13](https://gm348-prod.herokuapp.com/Project/view_competition.php?id=13)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/87](https://github.com/G-McCarten/IT202-005/pull/87)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297609-f31fd59b-1f14-431a-bb06-b20d6db42f5a.png">
<p>This active competition's leader board is viewable</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - Game should be fully implemented/complete by this point ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/shooter.php](https://gm348-prod.herokuapp.com/Project/shooter.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/88](https://github.com/G-McCarten/IT202-005/pull/88)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Game should tell the player if they’re not logged in that their score will not be recorded.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297690-b0c09494-e7d7-4e89-8e96-83a42738a330.png">
<p>User is notified their score will not be recorded</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F7 - fully implemented</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297791-a7d03cb9-452f-44c4-aeaa-a97668b1109e.png">
<p>Players can move and shoot enemies for more score, passively gaining score as well</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - User’s score history will include pagination ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/home.php?start=1](https://gm348-prod.herokuapp.com/Project/home.php?start=1)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/86](https://github.com/G-McCarten/IT202-005/pull/86)</p></td></tr>
<tr><td>
<table>
<tr><td>F8 - Show latest 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297976-96da1ba4-ec65-4aab-9af5-718780e6b125.png">
<p>Last 10 scores displayed</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Paginate after 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297976-96da1ba4-ec65-4aab-9af5-718780e6b125.png">
<p>10 per page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show appropriate message for no results</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147298103-7b656b8f-eef5-48fd-8e61-2b461ce132d1.png">
<p>No scores displayed</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F9 - Home page will have a weekly, monthly, and lifetime scoreboard ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/home.php](https://gm348-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/89](https://github.com/G-McCarten/IT202-005/pull/89)</p></td></tr>
<tr><td>
<table>
<tr><td>F9 - Will also have a link to the game</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147298394-6936ab06-194d-4b9d-b8ce-6a993bd0bab5.png">
<p>Home page includes nav bar which has link to games</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Scoreboards will show username and points for the session</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/147297474-cf741493-2e8f-481a-837b-af9c21367204.png">
<p>Username and points displayed, as well as date the score was acquired</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>
