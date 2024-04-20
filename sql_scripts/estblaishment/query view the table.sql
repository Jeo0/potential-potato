SELECT b.buildingname, e.floornum, e.roomnum, r.roomtype
FROM establishment_table e
JOIN building_table b ON e.buildingid = b.buildingid
JOIN roomtype_table r ON e.roomtypeid = r.roomtypeid;

select * from building_table;
select * from roomtype_table;
select * from establishment_table;