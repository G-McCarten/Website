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
