DELETE FROM establishment_table
WHERE establishmentid = 2;

-- after deletion, reset the autoincrement of the primary key to 1
-- to prevent the duplication of rows
ALTER TABLE establishment_table AUTO_INCREMENT = 1;