SELECT b.buildingname, e.floornum, e.roomnum, r.roomtype
FROM establishment_table e
JOIN building_table b ON e.id_building = b.id_building
JOIN roomtype_table r ON e.id_roomtype = r.id_roomtype;

select * from building_table;
select * from roomtype_table;
select * from establishment_table;