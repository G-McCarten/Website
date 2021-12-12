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


<table>
<tr><td>Milestone 3</td></tr><tr><td>
<table>
<tr><td>F1 - Users will have points associated with their account. (2021-12-06)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/profile.php](https://gm348-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/75](https://github.com/G-McCarten/IT202-005/pull/75)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Alter the User table to include points with a default of 0.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145706704-c6996153-a22b-4648-9b74-ff23c34bc9cf.png">
<p>SQL for altering table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - This field will not be incremented/decremented directly, you must use the PointsHistory table to calculate it and set it each time the points change</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145706824-4671023f-d3a8-4a17-b3a5-a923605bf81d.png">
<p>Snipped from functions.php. Uses pointhistory table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Points should show on their profile page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145706846-94cc33d9-3114-4d93-a20d-4d632f86f958.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Create a PointsHistory table (id, user_id, point_change, reason, created) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/sql/008_create_table_PointsHistory.sql](https://gm348-prod.herokuapp.com/Project/sql/008_create_table_PointsHistory.sql)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/75](https://github.com/G-McCarten/IT202-005/pull/75)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Any new entry should update the user’s points value (do not update the User points column directly)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707067-0f7ed038-916d-4319-b01a-64fae396e726.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - SUM the point_change for the user_id to get the total</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707076-fa3f46f2-86f6-4369-a47b-b30cfb87edb0.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - Competitions table should have the following columns (id, name, duration, expires (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/sql/009_create_table_competitions.sql](https://gm348-prod.herokuapp.com/Project/sql/009_create_table_competitions.sql)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/79](https://github.com/G-McCarten/IT202-005/pull/79)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707163-4ff43b0e-443b-4dee-854c-9d1abdb66b0f.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - User will be able to create a competition ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/create_competition.php](https://gm348-prod.herokuapp.com/Project/create_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/79](https://github.com/G-McCarten/IT202-005/pull/79)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Competitions will start at 1 point (reward)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707249-2a375831-8b6e-4c1a-8488-cc28fa14334d.png">
<p>Snipped from Competitions Table creation, starting reward default is 1</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - User sets a name for the competition</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707284-0c8b54fe-43e6-480f-aa48-3b4ad752dada.png">
<p>Can set name, placings, duration, min score, join cost, min participants,  starting reward</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - User determines % given for 1st, 2nd, and 3rd place winners</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="">
<p>See sub feature 2</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Combination must be equal to 100% (no more, no less)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707379-c8363004-39ef-470d-8fd5-5962c60b50bb.png">
<p>Snippet from create_competition.php , only allows percents that add up to 100</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - User determines if it’s free to join or the cost to join (min 0 for free)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="">
<p>See sub feature 2</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - User determines the duration of the competition (in days)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="">
<p>See sub feature 2</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - User can determine the minimum score to qualify (min 0)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="">
<p>See sub feature 2</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - User determines minimum participants for payout (min 3)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="">
<p>See sub feature 2</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Show any user friendly error messages</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707467-396632e4-ef50-4f96-b0d7-48aa43806d90.png">
<p>Error message when not enough points</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Show user friendly confirmation message that competition was created</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707478-049917fd-958c-441e-9a3e-9c51033be7ec.png">
<p>Snippet from create_competitions.php , if executed will print out friendly message</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - The cost to the creator of the competition will be (1 + starting reward value)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707468-8a641058-7170-4b10-9e3f-a1e92a835853.png">
<p>Snippet from create_competitions.php</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - If they can’t afford it, the competition should not be created</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707467-396632e4-ef50-4f96-b0d7-48aa43806d90.png">
<p>Snippet from create_competitions.php</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - If they can afford it, automatically add them to the competition</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707472-8ad95d48-2418-4ed2-a043-260656a39baa.png">
<p>Snippet from create_competitions.php, if created a competition, calls function to add themselves and deduct points from themselves.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up (2021-12-11)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/competitions.php](https://gm348-prod.herokuapp.com/Project/competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/80](https://github.com/G-McCarten/IT202-005/pull/80)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707644-5cb58605-5819-4292-9424-4e00d7fc9bb3.png">
<p>Reward increased on updating through sql</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Have a page where the User can see active competitions (not expired) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/competitions.php](https://gm348-prod.herokuapp.com/Project/competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/80](https://github.com/G-McCarten/IT202-005/pull/80)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - For this milestone limit the output to a maximum of 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707918-87f00b3d-9c86-4073-b4d2-4aea90b79edd.png">
<p>Lists competitions</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F6 - Order the results by soonest to expire</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145707788-96aa7339-3af1-4764-a305-fb253726cdea.png">
<p>sql statement ordered by descending expiration dates</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - Will need an association table CompetitionParticipants (id, comp_id, user_id, created) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/sql/010_create_table_usercomps.sql](https://gm348-prod.herokuapp.com/Project/sql/010_create_table_usercomps.sql)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/80](https://github.com/G-McCarten/IT202-005/pull/80)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Comp_id and user_id should be a composite unique key (user can only join a competition once)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708002-f77a355f-330e-4ace-ad90-221ded4421cc.png">
<p>SQL to show unique keys</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708007-1c7997ef-6a5c-42a5-864e-bf7e8edea650.png">
<p>Table in database</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - User can join active competitions  ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/competitions.php](https://gm348-prod.herokuapp.com/Project/competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/80](https://github.com/G-McCarten/IT202-005/pull/80)</p></td></tr>
<tr><td>
<table>
<tr><td>F8 - Creates an entry in CompetitionParticipants</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708229-8f51032e-a92a-482f-a14a-ddeb4d838cfd.png">
<p>if clicked join and is able to, insert into UserComp table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Recalculate the Competitions.participants value based on the count of participants for this competition from the CompetitionParticipants table.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708231-70f73b2a-652f-402e-bc32-99ce6e79789a.png">
<p>Snippet from functions.php, updates through sql</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Update the Competitions.reward based on the # of participants and the appropriate math from the competition requirements above</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708232-57c0deb9-2daf-43af-bc1e-ef0399e819ae.png">
<p>snippet from functions.php, updates when inserted through sql</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show proper error message if user is already registered</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708929-42999be8-9cd7-4a9e-8266-c6f70095959f.png">
<p>Cant join again</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show proper confirmation if user registered successfully</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708234-aaa4fb67-47da-4e4b-92e4-e5282b558139.png">
<p>Cant join again</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F9 - Create function that calculates competition winners ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://gm348-prod.herokuapp.com/Project/login.php](https://gm348-prod.herokuapp.com/Project/login.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/G-McCarten/IT202-005/pull/81](https://github.com/G-McCarten/IT202-005/pull/81)</p></td></tr>
<tr><td>
<table>
<tr><td>F9 - Get all expired and not paid_out competitions</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708606-529bab54-421f-4192-8b1b-3ece3d1f1747.png">
<p>snippet from function calc_winners()</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Check that the participant count against the minimum required</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708636-2cca3a96-8702-4c1f-a36e-fbeb5a90a3ea.png">
<p>Snippet from sql that retrieves  all expired and not paid_out competitions</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Get the top 3 winners</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708649-08b5a096-08e8-4a71-8f15-6f32bed29887.png">
<p>function to get top winners and return their username and id</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Where the score was earned/created between when the user joined the competition and when the Competition expires</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708689-98f8ae8f-5fcb-45c6-8ba5-37e1a363f41b.png">
<p>snippet from function get_top_score_comp(),gets scores in in respect to joined date and comp expiration date.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Calculate the payout (reward * place_percent)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708743-f708ceb9-551e-47a6-a8b2-3317f1a9baca.png">
<p>snippet from calc_winners, gets rewards for first,second,third place</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Create entries for the Users in the PointsHistory table</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708770-7e713d34-f24c-43fe-a6f6-384cdb31b757.png">
<p>snippet from calc_winners, inserts entries into pointshistory table through change_points() function</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Apply the new values (SUM) to their points column in the Users table after entry is added</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708770-7e713d34-f24c-43fe-a6f6-384cdb31b757.png">
<p>snippet from calc_winners, updates all winners points through this update_points() function</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Reason should be recorded as ‘competition’ (or something with more precise information)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708799-d2c20d31-2ffd-46d4-a2fb-a07f95d28ce0.png">
<p>Respective winning reason for first,second,third place</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Mark the competition as paid_out = true</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/76708068/145708861-cae1db0e-2b6d-475e-a1b4-123e7b5831c8.png">
<p>Applies sql to competitions that paid the winners</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>


Milestone 4:

<table><tr><td>Milestone 4</td></tr><tr><td><table><tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F1 - If public, hide email address from other users<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F2 - User will be able to see their competition history ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F2 - Limit to 10 results<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - Paginate anything after 10<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - If no results, show the appropriate message<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F3 - User with the role of “admin” can edit a competition where paid_out = false ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F3 - They can adjust any of the regular form values<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - If the competition was expired they can update the duration to include extra time<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F4 - Add pagination to the Active Competitions view ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F4 - Show 10 competitions per page<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F4 - Paginate anything after 10<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F4 - If no results, show the appropriate message<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F5 - Anywhere a username is displayed should be a link to that user’s profile ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F5 - This includes all scoreboards<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F5 - If the profile is private you can have the page just display “this profile is private” upon access<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F6 - Viewing an active or expired competition should show the top 10 scoreboard related to that competition ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F6 - item 1<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F7 - Game should be fully implemented/complete by this point ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F7 - Game should tell the player if they’re not logged in that their score will not be recorded.<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F8 - User’s score history will include pagination ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F8 - Show latest 10<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Paginate after 10<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Show appropriate message for no results<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F9 - Home page will have a weekly, monthly, and lifetime scoreboard ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F9 - Will also have a link to the game<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F9 - Scoreboards will show username and points for the session<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr></td></tr></table>
