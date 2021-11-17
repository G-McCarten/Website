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
	
	[11/10/2021] \(mm/dd/yyyy of completion) User will be able to login to their account (given they enter the correct credentials)
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
	[11/10/2021] \(mm/dd/yyyy of completion) User will be able to logout
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
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/login.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/29
    - Screenshot #1: ![Screenshot_15](https://user-images.githubusercontent.com/76708068/141405864-ff3fd0aa-5c7d-4ce3-8a75-91aa59751e0f.png)
	- Function to check if user is logged 
    - Screenshot #2: ![Screenshot_17](https://user-images.githubusercontent.com/76708068/141405884-b7e81129-6eb4-4d3f-bf03-c65542c69953.png)
	- Function should be called on appropriate pages that only allow logged in user. In home.php:
	[11/10/2021] \(mm/dd/yyyy of completion) Basic Roles implemented
  -  List of Evidence of Feature Completion
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
  -  List of Evidence of Feature Completion
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
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://gm348-prod.herokuapp.com/Project/profile.php
    - Pull Requests
     - https://github.com/G-McCarten/IT202-005/pull/34
    - Screenshots
     - Screenshot #1: ![Screenshot_23](https://user-images.githubusercontent.com/76708068/141409098-98383328-6c52-4d35-bcfc-687963deafdd.png)
	- User will be able to see their profile
	[11/10/2021] \(mm/dd/yyyy of completion) User will be able to edit their profile
  -  List of Evidence of Feature Completion
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


Hint: logic for the password check would be similar to login
	Milestone 2:
Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator (may build off of a sample from the site shared in class)
What game will you be doing?
[game]
Briefly describe it.
[describe]
Note: For this milestone the game doesn’t need to be complete, just have something basic or a placeholder that can generate a score when played.
The system will save the user’s score at the end of the game if the user is logged in
There should be a scores table (id, user_id, score, created)
Each received score is a new entry (scores will not be updated)
The user will be able to see their last 10 scores
Show on their profile page
Ordered by most recent
Create functions that output the following scoreboards (this will be used later)
Top 10 Weekly
Top 10 Monthly
Top 10 Lifetime
Scoreboards should show no more than 10 results; if there are no results a proper message should be displayed (i.e., “No [time period] scores to display”)
	Milestone 3:
Users will have points associated with their account.
Alter the User table to include points with a default of 0.
This field will not be incremented/decremented directly, you must use the PointsHistory table to calculate it and set it each time the points change
Points should show on their profile page
You may show points elsewhere as well if you wish
Create a PointsHistory table (id, user_id, point_change, reason, created)
Any new entry should update the user’s points value (do not update the User points column directly)
SUM the point_change for the user_id to get the total
Competitions table should have the following columns (id, name, created, duration, expires (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified)
User will be able to create a competition
Competitions will start at 1 point (reward)
User sets a name for the competition
User determines % given for 1st, 2nd, and 3rd place winners
Combination must be equal to 100% (no more, no less)
User determines if it’s free to join or the cost to join (min 0 for free)
User determines the duration of the competition (in days)
User can determine the minimum score to qualify (min 0)
User determines minimum participants for payout (min 3)
Show any user friendly error messages
Show user friendly confirmation message that competition was created
The cost to the creator of the competition will be (1 + starting reward value)
If they can’t afford it, the competition should not be created
If they can afford it, automatically add them to the competition
Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up
Have a page where the User can see active competitions (not expired)
For this milestone limit the output to a maximum of 10
Order the results by soonest to expire
Will need an association table CompetitionParticipants (id, comp_id, user_id, created)
Comp_id and user_id should be a composite unique key (user can only join a competition once)
User can join active competitions 
Creates an entry in CompetitionParticipants
Recalculate the Competitions.participants value based on the count of participants for this competition from the CompetitionParticipants table.
Update the Competitions.reward based on the # of participants and the appropriate math from the competition requirements above
Best to due this based on a simple equation via the initial Competition data and participants
Show proper error message if user is already registered
Show proper confirmation if user registered successfully
Create function that calculates competition winners
Get all expired and not paid_out competitions
For each competition
Check that the participant count against the minimum required
Get the top 3 winners
Pick 1 (strike out the option you won’t do; do not delete):
Option 1: Scores are calculated by the sum of the score from the Scores table where it was earned/created between Competition start and Competition expires timestamps
Option 2: Where the score was earned/created between when the user joined the competition and when the Competition expires
Calculate the payout (reward * place_percent)
Round up the value (it’s ok to pay out an extra point here and there)
Create entries for the Users in the PointsHistory table
Apply the new values (SUM) to their points column in the Users table after entry is added
Reason should be recorded as ‘competition’ (or something with more precise information)
Mark the competition as paid_out = true
	Milestone 4:
User can set their profile to be public or private (will need another column in Users table)
If public, hide email address from other users
User will be able to see their competition history
Limit to 10 results
Paginate anything after 10
If no results, show the appropriate message
User with the role of “admin” can edit a competition where paid_out = false
They can adjust any of the regular form values
If the competition was expired they can update the duration to include extra time
Add pagination to the Active Competitions view
Show 10 competitions per page
Paginate anything after 10
If no results, show the appropriate message
Anywhere a username is displayed should be a link to that user’s profile
This includes all scoreboards
If the profile is private you can have the page just display “this profile is private” upon access
Viewing an active or expired competition should show the top 10 scoreboard related to that competition
Game should be fully implemented/complete by this point
Game should tell the player if they’re not logged in that their score will not be recorded.
User’s score history will include pagination
Show latest 10
Paginate after 10
Show appropriate message for no results
Home page will have a weekly, monthly, and lifetime scoreboard
Will also have a link to the game
Scoreboards will show username and points for the session
(See requirement about username linking to profile)
