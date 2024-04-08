# jessi input:  
Project details:
- We considered few key datas that a university would need. The following items are the details that would describe the tables, the columns and its data type (consider the type-written would be the latest update):
    ~ establishment 
        * bldg      enum ('L', 'M', 'A', 'O')
        * floor     int,            not null
        * room #    int,            not null

    ~ employee
        * ID        int,            auto_increment, primary key
        * email     varchar(25),    not null
        * fn        varchar(25),    not null
        * mn        varchar(25),    not null
        * ln        varchar(25),    not null
        * sex       char(6),        not null
        * position  varchar(20),    not null
        * dept      varchar(15),    not null
        * salary    int


    ~ students
        * ID        int,            auto_increment, primary key
        * sex       char(6),        not null
        * email     varchar(25),    not null
        * phone     int
        * age       int
        * fn        varchar(25),    not null
        * mn        varchar(25),    not null
        * ln        varchar(25),    not null
        * birthyr   int,            not null
        * birthmth  int,            not null
        * birthd    int,            not null

    ~ course 
        * ID        int,            auto_increment, primary key
        * name      varchar(25),    not null

    ~ subject
        * ID        int,            auto_increment, primary key
        * name      varchar(25),    not null


- The relationships can be mapped in the following pic:
`https://drive.google.com/file/d/12NUHrnplj5wOq8U6W-_ssAAvxBnWnXLS/view`

- We plan on separating the files for the back end and the front end. However, due to the scope of the project is about the database itself, it will be up to our future selves whether we would want to make any front end beautifying stuffs.
    
- There are still no mockup website dedicated for the database.





Workflow update:
- We tried using git to keep track of updates and be able to update accordingly
- see `https://github.com/Jeo0/potential-potato/tree/unfinished`





TODOs:
- Make a ppt 
    * show the tables' specifics (with example data)
    * show the details and the reasons between the relationship of the tables (show what things can be shown in front end as a student, and an employee -- i.e., how the subject site will be shown as an instructor, or a student; how the establishment database will be interfaced to an admin employee when there is another building or some changes to the purpose of a room)

- Create a basic input, read, delete, and update for the tables indicated at the project details -- webpages similar to the latest CRUD lab activity
