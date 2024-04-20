-- HOW TO INSERT DATA

 
-- Insert a new building into building_table
-- ignore the insertion if there is a duplicate building_name
INSERT IGNORE INTO building_table (buildingname) 
VALUES ('S'), ('L');

-- Insert a new room type into room_type_table
-- ignore the insertion if there is a duplicate room_type
INSERT IGNORE INTO roomtype_table (roomtype)
VALUES ('canteen'), ('lab'), ('lecture');

insert ignore into roomtype_table (roomtype)
values ('lab'), ('lecture');

-- Insert a new establishment into establishment_table
INSERT INTO establishment_table (buildingid, roomtypeid, floornum, roomnum)
VALUES (
	(SELECT buildingid FROM building_table WHERE buildingname = 'S'),
	(SELECT roomtypeid FROM roomtype_table WHERE roomtype = 'canteen'),
	0,
	NULL
),(
    (SELECT buildingid FROM building_table WHERE buildingname = 'S'),
	(SELECT roomtypeid FROM roomtype_table WHERE roomtype = 'lab'),
	0,
	0
),(
	(SELECT buildingid FROM building_table WHERE buildingname = 'L'),
	(SELECT roomtypeid FROM roomtype_table WHERE roomtype = 'lab'),
    0,
    1
);
    
    
truncate table establishment_table;

