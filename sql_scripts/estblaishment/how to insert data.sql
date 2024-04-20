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
INSERT INTO establishment_table (id_building, id_roomtype, floornum, roomnum)
VALUES (
	(SELECT id_building FROM building_table WHERE buildingname = 'S'),
	(SELECT id_roomtype FROM roomtype_table WHERE roomtype = 'canteen'),
	0,
	NULL
),(
    (SELECT id_building FROM building_table WHERE buildingname = 'S'),
	(SELECT id_roomtype FROM roomtype_table WHERE roomtype = 'lab'),
	0,
	0
),(
	(SELECT id_building FROM building_table WHERE buildingname = 'L'),
	(SELECT id_roomtype FROM roomtype_table WHERE roomtype = 'lab'),
    0,
    1
);
    
    
truncate table establishment_table;

-- updating
/*
$sql = "UPDATE establishments_table SET floornum = ?, buildingid = ?, roomtypeid = ? WHERE establishment_id = ?";
*/
