# BusTravelTask
- Chose to use PHP as I understand from the job description that php is your preffered backend language.
- Used Xampp on my local machine
- The Slim Micro Framework was used as I could draw from a previous project and take advantage of the ORM Eloquent.

ASSUMPTION -- Customers know their customer id but not the unique id associated with each record (primary key)

- I believe the best way to appraoch and test would be to start by adding and updating customers as described by your data structure.
- Able to add and update customers without deleting previous records.
- Was quite optimistic on how quickly I would be able to set-up the required enviroment to help me quickly prototype.
- started with creating the class responsible for pulling customer information by taking advantage of the 'latest()' method offered through eloquent. Would then compare to the previous record and return the information in a human readable manner.
- To link all the tables and get relevant information foreign keys will be used accordingly
